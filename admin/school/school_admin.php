<?php
session_start();
require_once '../../db/db.php';
require_once '../../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

spl_autoload_register(function ($class) {
    include $class . '.php';
});

function my_autoloader($class) {
    require $class . '.php';
}

$admin_id = $_SESSION['user'];
$u_id = $_SESSION['user'];
$admin_phone = $_SESSION['user_phone'];
$school_id = $_SESSION['school_id'];

$uniqueId= time().'-'.mt_rand();

$unique = strtoupper(bin2hex(random_bytes(3)));
$ran_id = rand(time(), 100000000);

$unique.' - '.$uniqueId.' - '.$ran_id;


if (isset($_POST['export_routine'])) {

    $routineId = isset($_POST['id']) ? intval($_POST['id']) : 0;

    if ($routineId > 0) {
        $stmt = $con->prepare("SELECT routine_id, day, start_time, end_time, sub_name, sub_code, section, room, t_name, lab_theory FROM schedule WHERE routine_id = ?");
        $stmt->bind_param("i", $routineId);
        $stmt->execute();
        $result = $stmt->get_result();

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        if (!empty($data)) {

            $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            // Add headers
            $headers = array_keys($data[0]);
            $sheet->fromArray([$headers], NULL, 'A1');

            // Add data
            $row = 2;
            foreach ($data as $rowdata) {
                $sheet->fromArray([$rowdata], NULL, 'A' . $row);
                $row++;
            }

            // Save the Excel file
            $excelFileName = 'edu_routine_schedule_export.xlsx';
            $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $writer = new Xlsx($spreadsheet);
            $writer->save($excelFileName);
            
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename=' . basename($excelFileName));

            header("Location:$excelFileName");
            $writer->save('php://output');
            readfile($excelFileName);

            // $fileHandle = fopen($excelFileName, 'rb');
            // while (!feof($fileHandle)) {
            //     echo fread($fileHandle, 8192);
            // }
            // fclose($fileHandle);
            

            // unlink($excelFileName);
            exit;

        } else {
            echo 'No data found for the specified routine ID.';
        }
    } else {
        echo 'Invalid routine ID.';
    }
}

if(isset($_POST['routine_import_data'])){
    
    if($_POST['routine_import_name']!=""){
        $r_name = $_POST["routine_import_name"];
        $r_details = $_POST["routine_import_details"];
        $r_session = $_POST["select_session_for_routine_import"];

        $file_name = $_FILES['routine_file']['name'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $allowed_extentions = ['xls','csv','xlsx'];

        if(in_array($file_ext, $allowed_extentions)){

                $uniqueId= time().'-'.mt_rand();
                $unique = strtoupper(bin2hex(random_bytes(3)));
                $ran_id = rand(time(), 100000000);
                $unique_id = $unique.'-'.$uniqueId.'-'.$ran_id;

            
                $r_code = $unique;
                $r_type = '0';
                

                $sqlc= "SELECT * FROM routine WHERE sId='$school_id' AND session_id='$r_session' AND temp_name='$r_name' ";

                $result = mysqli_query($con, $sqlc);
                if(mysqli_num_rows($result)==0){

                $sql = "INSERT INTO routine(sId, unique_id, temp_name, temp_code, temp_details, temp_num, uId, session_id, routine_type) VALUES('$school_id','$unique_id','$r_name','$r_code','$r_details','$ran_id','$u_id','$r_session','$r_type')";

                    if ($con->query($sql)) {

                        $r_sql = "SELECT id FROM routine WHERE unique_id='$unique_id' ";
                        $r_q = mysqli_query($con,$r_sql);
                        $row = mysqli_fetch_assoc($r_q);

                        $r_id = $row['id'];

                        $inputFileNamePath = $_FILES['routine_file']['tmp_name'];
                        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
                        $sheet = $spreadsheet->getActiveSheet();
                        $data = $sheet->toArray();
                        $highestRow = $sheet->getHighestRow();

                        $count = 0;
                        foreach($data as $row){
                
                            if($count>0){
                                $routine_id = $row['0'];
                                $day = $row['1'];
                                $time_from = $row['2'];
                                $time_to = $row['3'];
                                $sub_name = $row['4'];
                                $sub_code = $row['5'];
                                $section = $row['6'];
                                $room = $row['7'];
                                $teacher = $row['8'];
                                $lab_theory = $row['9'];
                    
                            
                                $uniqueId= time().'-'.mt_rand();
                                $unique = strtoupper(bin2hex(random_bytes(3)));
                                $ran_id = rand(time(), 100000000);
                                $unique_id = $unique.'-'.$uniqueId.'-'.$ran_id;
                            
                            
                                $r_code = $unique;
                                $r_type = '0';
                            
                                $sqlc= "SELECT * FROM routine WHERE sId='$school_id' AND id='$r_id' ";
                            
                                $result = mysqli_query($con, $sqlc);
                                if(mysqli_num_rows($result)==1){
                            
                                    $rnrow = mysqli_fetch_assoc($result);
                                    $temp_code = $rnrow['temp_code'];
                                    $temp_num = $rnrow['temp_num'];
                            
                                    $sql = "INSERT INTO schedule(sId, unique_id, sub_name, sub_code, t_name, section, routine_id, room, day, start_time, end_time, temp_code, temp_num, lab_theory) VALUES('$school_id','$unique_id','$sub_name','$sub_code','$teacher','$section','$r_id','$room','$day','$time_from','$time_to','$temp_code','$temp_num','$lab_theory')";
                            
                                    if ($con->query($sql)) {
                            
                                        echo 1;
                            
                                    } else {
                                        echo "Sorry, Something Went Wrong! Try Again Please! Error: " . $con->error;
                            
                                        // error_log("MySQL Error: " . $con->error);
                                    }
                                }else{
                                    echo 2;
                                }
                            }else{
                                echo 2;
                            }    
                        }
            
                        $routineData = [];
                        for ($row = 2; $row <= $highestRow; ++$row) {
                            $rowData = $sheet->rangeToArray('A' . $row . ':T' . $row, null, true, false)[0];
                            $routineData[] = $rowData;
                        }
            
                        // var_dump($routineData);


                        echo 1;

                    } else {
                        echo "Sorry, Something Went Wrong! Try Again Please! Error: " . $con->error;

                        // error_log("MySQL Error: " . $con->error);
                    }
                }else{
                    echo "Routine Already added with these Data". $con->error;
                }



        }else{
            echo "File Type is invalied";
        }

        // $dateef = strtotime($datef);
      
        // $monthh = date('m', $dateef);
        // $yearr= date('Y', $dateef);
        
        // $mon = date('m', $dateef);
        // $yea= date('Y', $dateef);
    
    
    
        }else{
    
        echo "Sorry, Something Went Wrong! Try Again Please!";
    
        }

}

if(isset($_POST['routine_schedule_import_data'])){
    $r_id = $_POST['routine_schedule_import_data'];

    $file_name = $_FILES['routine_file']['name'];
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $allowed_extentions = ['xls','csv','xlsx'];

    if(in_array($file_ext, $allowed_extentions)){
        $inputFileNamePath = $_FILES['routine_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray();
        $highestRow = $sheet->getHighestRow();

        $count = 0;
        foreach($data as $row){

            if($count>0){

                $routine_id = $row['0'];
                $day = $row['1'];
                $time_from = $row['2'];
                $time_to = $row['3'];
                $sub_name = $row['4'];
                $sub_code = $row['5'];
                $section = $row['6'];
                $room = $row['7'];
                $teacher = $row['8'];
                $lab_theory = $row['9'];

            
                $uniqueId= time().'-'.mt_rand();
                $unique = strtoupper(bin2hex(random_bytes(3)));
                $ran_id = rand(time(), 100000000);
                $unique_id = $unique.'-'.$uniqueId.'-'.$ran_id;
            
            
                $r_code = $unique;
                $r_type = '0';
            
                $sqlc= "SELECT * FROM routine WHERE sId='$school_id' AND id='$r_id' ";
            
                $result = mysqli_query($con, $sqlc);
                if(mysqli_num_rows($result)==1){
            
                    $rnrow = mysqli_fetch_assoc($result);
                    $temp_code = $rnrow['temp_code'];
                    $temp_num = $rnrow['temp_num'];
            
                    $sql = "INSERT INTO schedule(sId, unique_id, sub_name, sub_code, t_name, section, routine_id, room, day, start_time, end_time, temp_code, temp_num, lab_theory) VALUES('$school_id','$unique_id','$sub_name','$sub_code','$teacher','$section','$r_id','$room','$day','$time_from','$time_to','$temp_code','$temp_num','$lab_theory')";
            
                    if ($con->query($sql)) {
            
            
                    } else {
                        echo "Sorry, Something Went Wrong! Try Again Please! Error: " . $con->error;
            
                        // error_log("MySQL Error: " . $con->error);
                    }
                }else{
                    echo 2;
                }

            }else{
                $count = 1;
            }

        }
    
        $routineData = [];
        for ($row = 2; $row <= $highestRow; ++$row) {
            $rowData = $sheet->rangeToArray('A' . $row . ':T' . $row, null, true, false)[0];
            $routineData[] = $rowData;
        }
    
        // var_dump($routineData);
    }else{
        echo "File Type is invalied";
    }

}

if(isset($_POST['export_routine_schedules'])){
    ?>

<div class="container shadow-md">
        <form class="space-y-2 routine_import_form_data" id="routine_import_form_data" action="#" role="form" method="POST" enctype="multipart/form-data">
                                    <div class="form-floating">
                                        <input type="file" name="routine_file" id="routine_file" class="form-control  form-floating bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Select a Xlsx/xls/csv file" required="">
                                        <label for="routine_file" class="sr-onlyy">Select a Xlsx/xls/csv file</label>

                                    </div>
                                    <div class="flex items-start">
                                      <input type="hidden" name="routine_schedule_import_data" value="<?=$_POST['id']?>">
                                      </div>
                                      <button type="button" class="btn-primary w-full routine_import_add_btn text-dark hover:text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="routine_import_add_btn">Import & Save Schedules</button>
                                  </form>
        </div>

    <?php
}

if(isset($_POST['session_data'])){


    if($_POST['session_name']!=""){
        $s_name = $_POST["session_name"];
        $s_date = $_POST["s_s_date"];
        $s_date = $s_date.'-01';
        $e_date = $_POST["s_e_date"];
        $e_date = $e_date.'-01';
        $priority = $_POST['session_priority'];

        if($priority==''){
            $priority = '0';
        }

        // $dateef = strtotime($datef);
      
        // $monthh = date('m', $dateef);
        // $yearr= date('Y', $dateef);
        
        // $mon = date('m', $dateef);
        // $yea= date('Y', $dateef);

        $uniqueId= time().'-'.mt_rand();
        $unique = strtoupper(bin2hex(random_bytes(3)));
        $ran_id = rand(time(), 100000000);
        $unique_id = $unique.'-'.$uniqueId.'-'.$ran_id;


        $sqlq = "SELECT * FROM session WHERE sId='$school_id' AND start_d='$s_date' AND end_d='$e_date'";

        $result = mysqli_query($con, $sqlq);
        if(mysqli_num_rows($result)==0){

        $sql = "INSERT INTO session(sId, unique_id, session_name, start_d, end_d, priority) VALUES('$school_id','$unique_id','$s_name','$s_date','$e_date','$priority')";

            if ($con->query($sql)) {

                echo 1;

            } else {
                echo "Sorry, Something Went Wrong! Try Again Please! Error: " . $con->error;

                // error_log("MySQL Error: " . $con->error);
            }
        }else{
            echo "Session Already added with these Date". $con->error;
        }    
    
    
        }else{
    
        echo "Sorry, Something Went Wrong! Try Again Please!";
    
        }


}

if(isset($_POST["session_data_f"])){

    ?>

        <table class="table tables">
        <thead>
          <tr>
            <th style="width: 140px;">SI#</th>
            <th style="width: 140px;">session Name</th>
            <th style="width: 140px;">From</th>
            <th style="width: 140px;">To</th>
            <th style="width: 140px;">Status</th>
            <th style="width: 240px;">Action</th>
          </tr>
        </thead>
        <tbody>


    <?php

    $sql = "SELECT * FROM session WHERE sId='$school_id'";

    $result = mysqli_query($con, $sql);
    $i = 1;
    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $sdate = $row['start_d'];
            $edate = $row['end_d'];

        $dates = strtotime($sdate);
      
        $datee = strtotime($edate);

        $month = date('m', $dates);
        $mo = date('F', $dates);
        $year= date('Y', $dates);
        
        $mon = date('m', $datee);
        $m = date('F', $datee);
        $yea= date('Y', $datee);

        $s_date = $mo .', '. $year;
        $e_date = $m.', '.$yea;

            $priority = $row['priority'];

            if($priority== '0'){
                $p = 'None';
            }else if($priority== '1'){
                $p = 'Active';
            }else{ 
                $p = 'Upcomming';
            }

            ?>

                <tr>
                    <td style="width: 140px;"><?=$i++?>#</td>
                    <td style="width: 140px;"><?=$row['session_name']?></td>
                    <td style="width: 140px;"><?=$s_date?></td>
                    <td style="width: 140px;"><?=$e_date?></td>
                    <td style="width: 140px;"><?=$p?></td>
                    <td style="width: 240px;">
                    <?php
                                    if($priority== '0'){
                                        $p = 'None';
                                        ?>
                                    <button class="set_class_session_active py-1 px-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" id="<?=$id?>">
                                        Active
                                    </button>
                                    <button class="set_class_session_next py-1 px-2 bg-warning  text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" id="<?=$id?>">
                                        Next->
                                    </button>
                                        <?php
                                    }else if($priority== '1'){
                                        $p = 'Active';
                                        ?>
                                        <button class="set_class_session_next py-1 px-2 bg-warning text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" id="<?=$id?>">
                                            Next->
                                        </button>
                                        <button class="set_class_session_none py-1 px-2 bg-danger text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" id="<?=$id?>">
                                            None
                                        </button>
                                        <?php
                                    }else{ 
                                        $p = 'Upcomming';
                                        ?>
                                        <button class="set_class_session_active py-1 px-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" id="<?=$id?>">
                                            Active
                                        </button>
                                        <button class="set_class_session_none py-1 px-2 bg-danger text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" id="<?=$id?>">
                                            None
                                        </button>
                                        <?php
                                    }
                    ?>

                    </td>
                </tr>

            <?php

        }
    }else{

    }
    ?>

        </tbody>
        </table>
    <?php

}

if(isset($_POST["session_data_ff"])){


    $sql = "SELECT * FROM session WHERE sId='$school_id'";

    $result = mysqli_query($con, $sql);
    $i = 1;
    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $sdate = $row['start_d'];
            $edate = $row['end_d'];

        $dates = strtotime($sdate);
      
        $datee = strtotime($edate);

        $month = date('m', $dates);
        $mo = date('F', $dates);
        $year= date('Y', $dates);
        
        $mon = date('m', $datee);
        $m = date('F', $datee);
        $yea= date('Y', $datee);

        $s_date = $mo .', '. $year;
        $e_date = $m.', '.$yea;

            $priority = $row['priority'];

            if($priority== '0'){
                $p = 'None';
            }else if($priority== '1'){
                $p = 'Active';
            }else{ 
                $p = 'Upcomming';
            }

            ?>

                <tr>
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                    <td style="width: 140px;"><?=$i++?>#</td>
                    <td style="width: 140px;"><?=$row['session_name']?></td>
                    <td style="width: 140px;"><?=$s_date?></td>
                    <td style="width: 140px;"><?=$e_date?></td>
                    <td style="width: 140px;"><?=$p?></td>
                    <td style="width: 240px;">
                    <?php
                                    if($priority== '0'){
                                        $p = 'None';
                                        ?>
                                    <button class="set_class_session_active py-1 px-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" id="<?=$id?>">
                                        Active
                                    </button>
                                    <button class="set_class_session_next py-1 px-2 bg-warning  text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" id="<?=$id?>">
                                        Next->
                                    </button>
                                        <?php
                                    }else if($priority== '1'){
                                        $p = 'Active';
                                        ?>
                                        <button class="set_class_session_next py-1 px-2 bg-warning text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" id="<?=$id?>">
                                            Next->
                                        </button>
                                        <button class="set_class_session_none py-1 px-2 bg-danger text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" id="<?=$id?>">
                                            None
                                        </button>
                                        <?php
                                    }else{ 
                                        $p = 'Upcomming';
                                        ?>
                                        <button class="set_class_session_active py-1 px-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" id="<?=$id?>">
                                            Active
                                        </button>
                                        <button class="set_class_session_none py-1 px-2 bg-danger text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" id="<?=$id?>">
                                            None
                                        </button>
                                        <?php
                                    }
                    ?>

                    </td>
                </tr>

            <?php

        }
    }else{

    }

}

if(isset($_POST['schedule_data'])){
    $r_id = $_POST['schedule_data'];

    $sub_name = $_POST['sub_name'];
    $sub_code = $_POST['sub_code'];
    $room = $_POST['room'];
    $teacher = $_POST['teacher'];
    $day = $_POST['sel_day'];
    $section = $_POST['schedule_section'];
    $time_to = $_POST['time_to'];
    $time_from = $_POST['time_from'];
    $room_id = $_POST['sel_room'];
    $lab_theory = $_POST['lab_theory'];

    if($room_id!='0'){
        $rsql = "SELECT * FROM room WHERE id='$room_id' ";
        $rq = mysqli_query($con,$rsql);
        $rn = mysqli_num_rows($rq);
        if($rn==1){
            $rrow = mysqli_fetch_assoc($rq);
            $room = $rrow['room_code'];
        }
        
    }


    $uniqueId= time().'-'.mt_rand();
    $unique = strtoupper(bin2hex(random_bytes(3)));
    $ran_id = rand(time(), 100000000);
    $unique_id = $unique.'-'.$uniqueId.'-'.$ran_id;


    $r_code = $unique;
    $r_type = '0';

    $sqlc= "SELECT * FROM routine WHERE sId='$school_id' AND id='$r_id' ";

    $result = mysqli_query($con, $sqlc);
    if(mysqli_num_rows($result)==1){

        $rnrow = mysqli_fetch_assoc($result);
        $temp_code = $rnrow['temp_code'];
        $temp_num = $rnrow['temp_num'];

        $sql = "INSERT INTO schedule(sId, unique_id, sub_name, sub_code, t_name, section, routine_id, room_id, room, day, start_time, end_time, temp_code, temp_num, lab_theory) VALUES('$school_id','$unique_id','$sub_name','$sub_code','$teacher','$section','$r_id','$room_id','$room','$day','$time_from','$time_to','$temp_code','$temp_num','$lab_theory')";

        if ($con->query($sql)) {

            echo 1;

        } else {
            echo "Sorry, Something Went Wrong! Try Again Please! Error: " . $con->error;

            // error_log("MySQL Error: " . $con->error);
        }
    }else{
        echo 2;
    }

}

if(isset($_POST['routine_schedule_data'])){
    $r_id = $_POST['id'];
    ?>
<div class="popup-add_schedule_container hidden">
    <div class="content-add_schedule_container text-justify border-pink-300 border-2 shadow-lg  rounded-lg bg-white-100 ">
            <div class="back"><button type="button" class="add_schedule_container_back_btn float-end text-3xl font-medium ml-5 text-pink-600"><i class="bi bi-arrow-left-circle-fill"></i></button></div>
            <div class="add_schedule_container_body pt-2">

            <div class="p-1 pt-2 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                  <form class="space-y-2 schedule_form_data" id="schedule_form_data" action="#" role="form">
                                    <div class="form-floating">
                                    <input type="text" class="input-1 form-control form-floating" placeholder="Course or Subject Title" name="sub_name" id="sub_name">
                                    <label class="" for="sub_name">Course or Subject Title</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="sub_code" id="sub_code" class="form-control form-floating bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Course or Subject Code" required="">
                                        <label for="sub_code" class="sr-onlyy">Course or Subject Code</label>

                                    </div>
                                    <div class="form-floating">
                                    <input type="text" class="input-1 form-control form-floating" placeholder="Instructor or Teacher" name="teacher" id="teacher">
                                    <label class="" for="teacher">Instructor or Teacher</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="schedule_section" id="schedule_section" class="form-control form-floating bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Section">
                                        <label for="schedule_section" class="sr-onlyy">Section</label>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                            <input type="time" class="input-1 form-control form-floating" placeholder="Time(From)" name="time_from" id="time_from">
                                            <label class="" for="time_from">Time(From)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="time" class="input-1 form-control form-floating" placeholder="Time(To)" name="time_to" id="time_to">
                                            <label class="" for="time_to">Time(To)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="room" id="room" class="form-control form-floating bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Type Room No or Select Room below" required="">
                                        <label for="room" class="sr-onlyy">Room</label>

                                    </div>

                                    <div class="sm:hiddenn" id="select_room">
                                        <label for="sel_room" class="sr-only">Select Room</label>
                                            <select id="sel_room" name="sel_room" class="sel_room bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#user_all_contentt" role="tablistt">
                                            <option id="about-tab" value="0" data-tabs-target="#about"   aria-controls="about" aria-selected="false">Select Room</option>

                        <?php
                            $sql = "SELECT * FROM room WHERE sId='$school_id' GROUP BY id ";
                            $i = 0;
                            $result = mysqli_query($con, $sql);
                            if(mysqli_num_rows($result)> 0){
                                while($row = mysqli_fetch_array($result)){
                                    $id = $row["id"];
    
                                    ?>
                                    <option id="<?=$row['id']?>" value="<?=$row['id']?>" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true"><?=$row['room_name'].' -'.$row['room_code']?></option>
                                    <?php
                                }
                            }
    
                            
                        ?>

                                            </select>
                                  </div>
                                  <div class="sm:hiddenn" id="class_programme">
                                        <label for="sel_day" class="sr-only">Select Day</label>
                                            <select id="sel_day" name="sel_day" class="sel_day bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#user_all_contentt" role="tablistt">
                                            <option id="about-tab" value="Sunday" data-tabs-target="#about"   aria-controls="about" aria-selected="false">Select Day</option>
                                                <option id="" value="Sunday" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Sunday</option>
                                                <option id="" value="Monday" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Monday</option>
                                                <option id="" value="Tuesday" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Tuesday</option>
                                                <option id="" value="Wednesday" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Wednesday</option>
                                                <option id="" value="Thursday" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Thursday</option>
                                                <option id="" value="Friday" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Friday</option>
                                                <option id="" value="Saturday" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Saturday</option>
                                                <option id="" value="Everyday" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Everyday</option>


                                            </select>
                                  </div>
                                  <div class="sm:hiddenn" id="class_code">
                                        <label for="sel_lab_theory" class="sr-only">Select Lab|Theroy</label>
                                            <select id="sel_lab_theory" name="lab_theory" class="sel_lab_theory bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#user_all_contentt" role="tablistt">
                                            <option id="about-tab" value="theory" data-tabs-target="#about"   aria-controls="about" aria-selected="false">Select Lab|Theroy</option>

                                            <option id="" value="theory" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Theory</option>
                                            <option id="" value="lab" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Lab</option>

                                            </select>
                                  </div>

                                      <!-- <div>
                                          <input type="number" name="number_phone" id="tk_pay" placeholder="Phone number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                      </div>
                                      <div>
                                          <input type="number" name="number_tk" id="tk_pay" placeholder="Amount at least 10/=" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                      </div> -->
                                      <div class="flex items-start">
                                      <input type="hidden" name="schedule_data" value="<?=$r_id?>">
                                      </div>
                                      <button type="button" class="btn-primary w-full schedule_add_btn text-dark hover:text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="schedule_add_btn">Save Schedule</button>
                                  </form>
                              </div>

            </div>
    </div>      
</div> 
<div class="schedule_container_body">
<div class="row text-start">
        <div class="col text-start">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-danger new_schedule_btn" id="<?=$r_id?>" data-bs-toggle="modal" data-bs-target="#my_modal_schedule_add" data-bs-whatever="@mdo">New</button>
                <button type="button" class="btn btn-warning import_routine_schedule_btn" id="<?=$r_id?>" data-bs-toggle="modal" data-bs-target="#my_modal_routine_import" data-bs-whatever="@mdo">IMPORT</button>
                <button type="button" class="btn btn-success export_routine_schedule_btn" id="<?=$r_id?>" data-bs-toggle="modal" data-bs-target="#my_modal_schedule_adddd" data-bs-whatever="@mdo">EXPORT</button>
            </div>

        </div>
</div>
<div class="row">

<div class="category-section">
        <div class="">
            <div class="category-wrapper">
                <button type="button" class="category-arrow prev prevv hidden"><i class="bi bi-arrow-left-square-fill"></i></button>
                <button type="button" class="category-arrow next nextt"><i class="bi bi-arrow-right-square-fill"></i></button>
                <div class="category-link" id="day_btn">


                    <!-- <a href="#">Electronics</a>
                    <a href="#">Automotive</a> -->

<?php

$daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

foreach ($daysOfWeek as $index => $day) {
    $activeClass = ($index === 0) ? 'active' : '';
    ?>
        <a href="#" class="tablinks <?=$activeClass?>" onclick="openTab(event,'<?=$day?>')" id="nav-<?=$day?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?=$day?>" type="button" role="tab" aria-controls="nav-<?=$day?>" aria-selected="true"><?=$day?></a>
    <?php
}
?>
                </div>
            </div>
        </div>
</div>
    <div class="col-md">
        <div class="accordion">
        <div class="accordion-item">
                <h2 style="font-size:15px" class="accordion-button" data-bs-target="#schedule_table" data-bs-toggle="collapse">Schedules</h2>
                <div class="others_fees_list_hhh"></div>
                <div id="schedule_table" class="accordion-collapse collapse:visible visibility: visible show">
                    <div class="accordion-body">

<?php

foreach ($daysOfWeek as $index => $day) {

    $activeClass = ($index === 0) ? 'activee' : '';
    ?>
                        <div class="routine_schedule_table_list tab-content <?=$activeClass?>" id="<?=$day?>">
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                                    <?php
$sql = "SELECT * FROM schedule WHERE routine_id='$r_id' AND (day='$day' OR day='Everyday') ORDER BY start_time, room";
$result = $con->query($sql);

if ($result->num_rows > 0) {

    ?>
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">Time</label>
                                </div>
                            </th>
    <?php

    $roomNames = array();
    while ($row = $result->fetch_assoc()) {
        $roomNames[$row['room']] = true;
    }

    foreach ($roomNames as $roomName => $value) {
        ?>
                <th scope="col" class="px-6 py-3">
                    <?=$roomName?>  
                </th>
        <?php
    }

    ?>
                        </tr>
                    </thead>
                    <tbody id="schedule_data_row">
    <?php

    $result->data_seek(0);
    while ($row = $result->fetch_assoc()) {
?>
            <tr>
                <td class="px-6 py-4">
                    <?=$row['start_time']?>
                </td>
<?php

        foreach ($roomNames as $roomName => $value) {
            ?>
            <td class="px-6 py-4 schedule_specific_btn" id="<?=$row['id']?>">
            <?php

            if ($row['room'] == $roomName) {
                echo $row['sub_name'];
            }
            ?>
            </td>
            <?php
        }

        echo '</tr>';
    }

} else {
    echo "No records found";
}

// $con->close();
?>


                                    </tbody>
                                </table>
                                <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">

                                    <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                        </li>
                                        <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                                </div>
                        </div>
    <?php
}
?>

                        <div class="routine_schedule_table_list" id="All">
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                                    <?php
$sql = "SELECT * FROM schedule WHERE routine_id='$r_id' ORDER BY start_time, room";
$result = $con->query($sql);

if ($result->num_rows > 0) {

    ?>
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">Time</label>
                                </div>
                            </th>
    <?php

    $roomNames = array();
    while ($row = $result->fetch_assoc()) {
        $roomNames[$row['room']] = true;
    }

    foreach ($roomNames as $roomName => $value) {
        ?>
                <th scope="col" class="px-6 py-3">
                    <?=$roomName?>  
                </th>
        <?php
    }

    ?>
                        </tr>
                    </thead>
                    <tbody id="schedule_data_row">
    <?php

    $result->data_seek(0);
    while ($row = $result->fetch_assoc()) {
?>
            <tr>
                <td class="px-6 py-4">
                    <?=$row['start_time']?>
                </td>
<?php

        foreach ($roomNames as $roomName => $value) {
            echo '<td class="px-6 py-4 schedule_specific_btn" id="'.$row['id'].'" >';
            if ($row['room'] == $roomName) {
                echo $row['sub_name'];
            }
            echo '</td>';
        }

        echo '</tr>';
    }

} else {
    echo "No records found";
}

$con->close();
?>


                                    </tbody>
                                </table>
                                <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">

                                    <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                        </li>
                                        <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                                </div>
                        </div>

                    </div>
                </div>
        </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md">
        
        <div class="row">
            <div class="accordion">
            <div class="accordion-item">
                    <h2 style="font-size:15px" class="accordion-button" data-bs-target="#lotery_system3e" data-bs-toggle="collapse">System</h2>
                    
                    <div id="lotery_system3e" class="accordion-collapse collapse:visible visibility: visible show">
                        <div class="accordion-body text-dark">




                        </div>
                    </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="accordion">
            <div class="accordion-item">
                    <h2 style="font-size:15px" class="accordion-button" data-bs-target="#lotery_system22e" data-bs-toggle="collapse">Remarks Key</h2>
                    
                    <div id="lotery_system22e" class="accordion-collapse collapse:visible visibility: visible show">
                        <div class="accordion-body text-dark">




                        </div>
                    </div>
            </div>
            </div>
        </div>

    </div>
</div>

</div>

    <?php
}

if(isset($_POST['routine_data'])){


    if($_POST['routine_name']!=""){
        $r_name = $_POST["routine_name"];
        $r_details = $_POST["routine_details"];
        $r_session = $_POST["select_session_for_routine"];


        // $dateef = strtotime($datef);
      
        // $monthh = date('m', $dateef);
        // $yearr= date('Y', $dateef);
        
        // $mon = date('m', $dateef);
        // $yea= date('Y', $dateef);

        $uniqueId= time().'-'.mt_rand();
        $unique = strtoupper(bin2hex(random_bytes(3)));
        $ran_id = rand(time(), 100000000);
        $unique_id = $unique.'-'.$uniqueId.'-'.$ran_id;

    
        $r_code = $unique;
        $r_type = '0';
        

        $sqlc= "SELECT * FROM routine WHERE sId='$school_id' AND session_id='$r_session' AND temp_name='$r_name' ";

        $result = mysqli_query($con, $sqlc);
        if(mysqli_num_rows($result)==0){

        $sql = "INSERT INTO routine(sId, unique_id, temp_name, temp_code, temp_details, temp_num, uId, session_id, routine_type) VALUES('$school_id','$unique_id','$r_name','$r_code','$r_details','$ran_id','$u_id','$r_session','$r_type')";

            if ($con->query($sql)) {

                echo 1;

            } else {
                echo "Sorry, Something Went Wrong! Try Again Please! Error: " . $con->error;

                // error_log("MySQL Error: " . $con->error);
            }
        }else{
            echo "Routine Already added with these Data". $con->error;
        }    
    
    
        }else{
    
        echo "Sorry, Something Went Wrong! Try Again Please!";
    
        }


}

if(isset($_POST["routine_data_f"])){

    $sql = "SELECT *,r.id as rid, s.id as sid FROM routine r, session s WHERE r.sId='$school_id' AND r.session_id=s.id AND r.routine_type='0' ";

    $result = mysqli_query($con, $sql);
    $i = 1;
    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
            $id = $row["rid"];

            if($row['aStatus']=='1'){
                $status = "Active";
            }else{
                $status = "Disabled";
            }

            ?>

            <tr class="bg-white border-b routine_wise_data_btn dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" id="<?=$id?>">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?=$i++?>
                </th>
                <td class="px-6 py-4">
                    <?=$row['session_name']?>
                </td>
                <td class="px-6 py-4">
                    <?=$row['temp_name']?>
                </td>
                <td class="px-6 py-4">
                <?=$row['temp_code']?>
                </td>
                <td class="px-6 py-4">
                <?=$status?>
                </td>
                
                <td class="px-6 py-4">
                <?=$row['temp_num']?>
                </td>
                <td class="flex items-center px-6 py-4">
                    <a href="#" class="class_edit font-medium text-blue-600 dark:text-blue-500 hover:underline" id="<?=$id?>">Edit</a>
                    <a href="#" class="class_delete font-medium text-red-600 dark:text-red-500 hover:underline ms-3" id="<?=$id?>">Remove</a>
                </td>
            </tr>

            <?php

        }
    }else{
        ?>
            <tr>
                <td colspan='8' class='text-center m-auto'>
                    Data Not Found
                </td>
            </tr>
        <?php
    }

}

if(isset($_POST['routine_edu_data'])){


    if($_POST['routine_name']!=""){
        $r_name = $_POST["routine_name"];
        $r_details = $_POST["routine_details"];
        $r_session = $_POST["select_session_for_routine"];


        // $dateef = strtotime($datef);
      
        // $monthh = date('m', $dateef);
        // $yearr= date('Y', $dateef);
        
        // $mon = date('m', $dateef);
        // $yea= date('Y', $dateef);

        $uniqueId= time().'-'.mt_rand();
        $unique = strtoupper(bin2hex(random_bytes(3)));
        $ran_id = rand(time(), 100000000);
        $unique_id = $unique.'-'.$uniqueId.'-'.$ran_id;

    
        $r_code = $unique;
        $r_type = '1';

        $sqlc= "SELECT * FROM routine WHERE sId='$school_id' AND session_id='$r_session' AND temp_name='$r_name' ";

        $result = mysqli_query($con, $sqlc);
        if(mysqli_num_rows($result)==0){

        $sql = "INSERT INTO routine(sId, unique_id, temp_name, temp_code, temp_details, temp_num, uId, session_id, routine_type) VALUES('$school_id','$unique_id','$r_name','$r_code','$r_details','$ran_id','$u_id','$r_session','$r_type')";

            if ($con->query($sql)) {

                echo 1;

            } else {
                echo "Sorry, Something Went Wrong! Try Again Please! Error: " . $con->error;

                // error_log("MySQL Error: " . $con->error);
            }
        }else{
            echo "Routine Already added with these Data". $con->error;
        }    
    
    
        }else{
    
        echo "Sorry, Something Went Wrong! Try Again Please!";
    
        }


}

if(isset($_POST["routine_edu_data_f"])){

    $sql = "SELECT *,r.id as rid, s.id as sid FROM routine r, session s WHERE r.sId='$school_id' AND r.session_id=s.id AND r.routine_type='1' ";

    $result = mysqli_query($con, $sql);
    $i = 1;
    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
            $id = $row["rid"];

            if($row['aStatus']=='1'){
                $status = "Active";
            }else{
                $status = "Disabled";
            }

            ?>

            <tr class="bg-white border-b routine_edu_wise_data_btn dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" id="<?=$id?>">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?=$i++?>
                </th>
                <td class="px-6 py-4">
                    <?=$row['session_name']?>
                </td>
                <td class="px-6 py-4">
                    <?=$row['temp_name']?>
                </td>
                <td class="px-6 py-4">
                <?=$row['temp_code']?>
                </td>
                <td class="px-6 py-4">
                <?=$status?>
                </td>
                
                <td class="px-6 py-4">
                <?=$row['temp_num']?>
                </td>
                <td class="flex items-center px-6 py-4">
                    <a href="#" class="class_edit font-medium text-blue-600 dark:text-blue-500 hover:underline" id="<?=$id?>">Edit</a>
                    <a href="#" class="class_delete font-medium text-red-600 dark:text-red-500 hover:underline ms-3" id="<?=$id?>">Remove</a>
                </td>
            </tr>

            <?php

        }
    }else{
        ?>
            <tr>
                <td colspan='8' class='text-center m-auto'>
                    Data Not Found
                </td>
            </tr>
        <?php
    }

}

if(isset($_POST['exam_routine_data'])){


    if($_POST['routine_name']!=""){
        $r_name = $_POST["routine_name"];
        $r_details = $_POST["routine_details"];
        $r_session = $_POST["select_session_for_routine"];


        // $dateef = strtotime($datef);
      
        // $monthh = date('m', $dateef);
        // $yearr= date('Y', $dateef);
        
        // $mon = date('m', $dateef);
        // $yea= date('Y', $dateef);

        $uniqueId= time().'-'.mt_rand();
        $unique = strtoupper(bin2hex(random_bytes(3)));
        $ran_id = rand(time(), 100000000);
        $unique_id = $unique.'-'.$uniqueId.'-'.$ran_id;

    
        $r_code = $unique;
        $r_type = '2';

        $sqlc= "SELECT * FROM routine WHERE sId='$school_id' AND session_id='$r_session' AND temp_name='$r_name' ";

        $result = mysqli_query($con, $sqlc);
        if(mysqli_num_rows($result)==0){

        $sql = "INSERT INTO routine(sId, unique_id, temp_name, temp_code, temp_details, temp_num, uId, session_id, routine_type) VALUES('$school_id','$unique_id','$r_name','$r_code','$r_details','$ran_id','$u_id','$r_session','$r_type')";

            if ($con->query($sql)) {

                echo 1;

            } else {
                echo "Sorry, Something Went Wrong! Try Again Please! Error: " . $con->error;

                // error_log("MySQL Error: " . $con->error);
            }
        }else{
            echo "Routine Already added with these Data". $con->error;
        }    
    
    
        }else{
    
        echo "Sorry, Something Went Wrong! Try Again Please!";
    
        }


}

if(isset($_POST["exam_routine_data_f"])){

    $sql = "SELECT *,r.id as rid, s.id as sid FROM routine r, session s WHERE r.sId='$school_id' AND r.session_id=s.id AND r.routine_type='2' ";

    $result = mysqli_query($con, $sql);
    $i = 1;
    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
            $id = $row["rid"];

            if($row['aStatus']=='1'){
                $status = "Active";
            }else{
                $status = "Disabled";
            }

            ?>

            <tr class="bg-white border-b exam_routine_wise_data_btn dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" id="<?=$id?>">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?=$i++?>
                </th>
                <td class="px-6 py-4">
                    <?=$row['session_name']?>
                </td>
                <td class="px-6 py-4">
                    <?=$row['temp_name']?>
                </td>
                <td class="px-6 py-4">
                <?=$row['temp_code']?>
                </td>
                <td class="px-6 py-4">
                <?=$status?>
                </td>
                
                <td class="px-6 py-4">
                <?=$row['temp_num']?>
                </td>
                <td class="flex items-center px-6 py-4">
                    <a href="#" class="class_edit font-medium text-blue-600 dark:text-blue-500 hover:underline" id="<?=$id?>">Edit</a>
                    <a href="#" class="class_delete font-medium text-red-600 dark:text-red-500 hover:underline ms-3" id="<?=$id?>">Remove</a>
                </td>
            </tr>

            <?php

        }
    }else{
        ?>
            <tr>
                <td colspan='8' class='text-center m-auto'>
                    Data Not Found
                </td>
            </tr>
        <?php
    }

}


if(isset($_POST['class_data'])){


    if($_POST['class_name']!=""){
        $c_name = $_POST["class_name"];
        $num_section = $_POST["class_section"];
        $c_version = $_POST["class_code"];
        $programme = $_POST['class_programme'];

        if($programme==''){
            $programme = 'day';
        }

        if($c_version== ''){
            $c_version= 'bangla';
        }

        // $dateef = strtotime($datef);
      
        // $monthh = date('m', $dateef);
        // $yearr= date('Y', $dateef);
        
        // $mon = date('m', $dateef);
        // $yea= date('Y', $dateef);

        $uniqueId= time().'-'.mt_rand();
        $unique = strtoupper(bin2hex(random_bytes(3)));
        $ran_id = rand(time(), 100000000);
        $unique_id = $unique.'-'.$uniqueId.'-'.$ran_id;

    
        $c_code = $unique;
        

        if($num_section== null){
            $num_section = 3;
        }

        $sqlc= "SELECT * FROM class_data WHERE sId='$school_id' AND class_name='$c_name' AND day_eve='$programme' AND programme='$c_version' ";

        $result = mysqli_query($con, $sqlc);
        if(mysqli_num_rows($result)==0){

        $sql = "INSERT INTO class_data(sId, unique_id, class_name, class_code, section_num, day_eve, programme) VALUES('$school_id','$unique_id','$c_name','$c_code','$num_section','$programme','$c_version')";

            if ($con->query($sql)) {

                echo 1;

            } else {
                echo "Sorry, Something Went Wrong! Try Again Please! Error: " . $con->error;

                // error_log("MySQL Error: " . $con->error);
            }
        }else{
            echo "Class Already added with these Data". $con->error;
        }    
    
    
        }else{
    
        echo "Sorry, Something Went Wrong! Try Again Please!";
    
        }


}

if(isset($_POST["class_data_f"])){

    $sql = "SELECT * FROM class_data WHERE sId='$school_id'";

    $result = mysqli_query($con, $sql);
    $i = 1;
    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $priority = $row['day_eve'];

            $programme = $row['programme'];

            if($programme== 'bangla'){
                $pr = 'Bangla';
            }else if($programme== 'english'){
                $pr = 'English';
            }else{
                $pr = $programme;
            }

            if($row['status']=='1'){
                $status = "Active";
            }else{
                $status = "Disabled";
            }

            if($priority== 'day'){
                $p = 'Day';
            }else{ 
                $p = 'Evening';
            }

            ?>

            <tr class="bg-white border-b class_wise_data_btn dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" id="<?=$id?>">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?=$i++?>
                </th>
                <td class="px-6 py-4">
                    <?=$row['class_name']?>
                </td>
                <td class="px-6 py-4">
                    <?=$p?>
                </td>
                <td class="px-6 py-4">
                    <?=$pr?>
                </td>
                <td class="px-6 py-4">
                    <?=$row['class_code']?>
                </td>
                <td class="px-6 py-4">
                <?=$row['section_num']?>
                </td>
                <td class="px-6 py-4">
                <?=$status?>
                </td>
                <td class="flex items-center px-6 py-4">
                    <a href="#" class="class_edit font-medium text-blue-600 dark:text-blue-500 hover:underline" id="<?=$id?>">Edit</a>
                    <a href="#" class="class_delete font-medium text-red-600 dark:text-red-500 hover:underline ms-3" id="<?=$id?>">Remove</a>
                </td>
            </tr>

            <?php

        }
    }else{
        ?>
            <tr>
                <td colspan='6' class='text-center m-auto'>
                    Data Not Found
                </td>
            </tr>
        <?php
    }

}

if(isset($_POST['room_data'])){


    if($_POST['room_name']!=""){
        $r_name = $_POST["room_name"];
        $r_code = $_POST["room_code"];
        $r_campus = $_POST["campus_name"];
        $invigilator = $_POST['invigilator'];

        $lab_theory = $_POST['lab_theory'];
        $r_column = $_POST['room_column'];

        // $dateef = strtotime($datef);
      
        // $monthh = date('m', $dateef);
        // $yearr= date('Y', $dateef);
        
        // $mon = date('m', $dateef);
        // $yea= date('Y', $dateef);

        $uniqueId= time().'-'.mt_rand();
        $unique = strtoupper(bin2hex(random_bytes(3)));
        $ran_id = rand(time(), 100000000);
        $unique_id = $unique.'-'.$uniqueId.'-'.$ran_id;

    
        $room_code = $unique;
        

        $sqlc= "SELECT * FROM room WHERE sId='$school_id' AND campus='$r_campus' AND room_code='$r_code' ";

        $result = mysqli_query($con, $sqlc);
        if(mysqli_num_rows($result)==0){

        $sql = "INSERT INTO room(sId, unique_id, room_name, room_code, campus, invigilator, lab_theory, num_column) VALUES('$school_id','$unique_id','$r_name','$r_code','$r_campus','$invigilator','$lab_theory','$r_column')";

            if ($con->query($sql)) {

                echo 1;

            } else {
                echo "Sorry, Something Went Wrong! Try Again Please! Error: " . $con->error;

                // error_log("MySQL Error: " . $con->error);
            }
        }else{
            echo "Room Already added with these Data". $con->error;
        }    
    
    
        }else{
    
        echo "Sorry, Something Went Wrong! Try Again Please!";
    
        }


}

if(isset($_POST["room_data_f"])){

    $sql = "SELECT * FROM room WHERE sId='$school_id'";

    $result = mysqli_query($con, $sql);
    $i = 1;
    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
            $id = $row["id"];

            if($row['status']=='1'){
                $status = "Active";
            }else{
                $status = "Disabled";
            }

            ?>

            <tr class="bg-white border-b room_wise_data_btn dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" id="<?=$id?>">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?=$i++?>
                </th>
                <td class="px-6 py-4">
                    <?=$row['room_code']?>
                </td>
                <td class="px-6 py-4">
                    <?=$row['room_name']?>
                </td>
                <td class="px-6 py-4">
                <?=$row['campus']?>
                </td>
                <td class="px-6 py-4">
                <?=$status?>
                </td>
                <td class="px-6 py-4">
                    <?=$row['invigilator']?>
                </td>
                <td class="flex items-center px-6 py-4">
                    <a href="#" class="class_edit font-medium text-blue-600 dark:text-blue-500 hover:underline" id="<?=$id?>">Edit</a>
                    <a href="#" class="class_delete font-medium text-red-600 dark:text-red-500 hover:underline ms-3" id="<?=$id?>">Remove</a>
                </td>
            </tr>

            <?php

        }
    }else{
        ?>
            <tr>
                <td colspan='6' class='text-center m-auto'>
                    Data Not Found
                </td>
            </tr>
        <?php
    }

}

if(isset($_POST['session_update_2'])){
    if(isset($_POST['session_id']) && $_POST['session_id']!=null){
        $id = $_POST['session_id'];

        $uSql = "UPDATE session SET priority='0' WHERE sId='$school_id' AND priority='2' ";

        if(mysqli_query($con, $uSql)){
            $sql = "UPDATE session SET priority='2' WHERE sId='$school_id' AND id='$id' ";
            if(mysqli_query($con, $sql)){
                $sql = "UPDATE class_data SET session_id='$id' WHERE sId='$school_id' ";
                if(mysqli_query($con, $sql)){
                    echo 1;
                }else{
                    echo 2;
                }
            }else{
                echo 3;
            }
        }else{
            echo 4;
        }

    }
}

if(isset($_POST["select_class_session"])){
    ?>

 

                <option id="about-tab" value="0" data-tabs-target="#about"   aria-controls="about" aria-selected="false">Select a Class</option>

                    <?php
                        $sql = "SELECT c.*, s.*, c.id as c_id, s.id as s_id FROM class_data c, session s WHERE c.session_id=s.id AND c.sId='$school_id' AND c.status='1' GROUP BY c.id ";
                        $i = 0;
                        $result = mysqli_query($con, $sql);
                        if(mysqli_num_rows($result)> 0){
                            while($row = mysqli_fetch_array($result)){
                                $id = $row["c_id"];
                                $sdate = $row['start_d'];
                                $edate = $row['end_d'];

                                $dates = strtotime($sdate);
                                $datee = strtotime($edate);
                        
                                $month = date('m', $dates);
                                $mo = date('F', $dates);
                                $year= date('Y', $dates);
                                
                                $mon = date('m', $datee);
                                $m = date('F', $datee);
                                $yea= date('Y', $datee);
                        
                                $s_date = $mo .', '. $year;
                                $e_date = $m.', '.$yea;


                                ?>
                                <option id="<?=$row['c_id']?>" value="<?=$row['c_id']?>" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true"><?=$row['class_name'].' -'.$row['day_eve'].'-'.$row['programme'].'-'.$s_date.'-'.$e_date?></option>
                                <?php
                            }
                        }

}

if(isset($_POST['select_session'])){
    ?>

    <!-- 
                        <option id="" value="1" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Active</option>
                        <option id="" value="2" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Upcomming</option> -->
    
    
                        <option id="about-tab" value="0" data-tabs-target="#about"   aria-controls="about" aria-selected="false">Select a Session</option>
    
                        <?php
                            $sql = "SELECT * FROM session WHERE sId='$school_id' GROUP BY id ";
                            $i = 0;
                            $result = mysqli_query($con, $sql);
                            if(mysqli_num_rows($result)> 0){
                                while($row = mysqli_fetch_array($result)){
                                    $id = $row["id"];
                                    $sdate = $row['start_d'];
                                    $edate = $row['end_d'];
    
                                    $dates = strtotime($sdate);
                                    $datee = strtotime($edate);
                            
                                    $month = date('m', $dates);
                                    $mo = date('F', $dates);
                                    $year= date('Y', $dates);
                                    
                                    $mon = date('m', $datee);
                                    $m = date('F', $datee);
                                    $yea= date('Y', $datee);
                            
                                    $s_date = $mo .', '. $year;
                                    $e_date = $m.', '.$yea;
    
    
                                    ?>
                                    <option id="<?=$row['id']?>" value="<?=$row['id']?>" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true"><?=$row['session_name'].' -'.$s_date.'-'.$e_date?></option>
                                    <?php
                                }
                            }
    
                            
                        ?>
    
                            <!-- <option id="" value="0" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">None</option>
                            <option id="" value="1" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Active</option>
                            <option id="" value="2" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Upcomming</option> -->
    
        <?php
}

if(isset($_POST['select_class_session_candidate'])){
    if(isset($_POST['class_id'])){
        if($_POST['class_id']!= '0' || $_POST['class_id']!=null){
            $id = $_POST['class_id'];
            $sql = "SELECT c.*, s.*, cd.*, c.gender as cgender, c.id as c_id, s.id as s_id, c.unique_id as cuid, s.uniqueId as suid FROM candidate c LEFT JOIN class_data cd ON c.class_id=cd.id LEFT JOIN students s ON c.user_id=s.uId  WHERE c.sId='$school_id' AND c.class_id='$id' AND cd.id='$id' GROUP BY c.id ORDER BY s.stdName ASC ";
    
            $i=1;
                $result = mysqli_query($con, $sql);
                if(mysqli_num_rows($result)> 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row["c_id"];
                        if($row['selected']=='0'){
                            $c = 'danger';
                            $select = "Sorry!";
                        }else if($row['selected']== '1'){
                            $c = 'info';
                            $select = "SELECTED";
                        }else{
                            $c = 'warning';
                            $select = "Waiting";
                        }
                        ?>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" id="<?=$id?>">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <?=$i++?>#
                                        </th>
                                        <td class="px-6 py-4">
                                            <?=$row['std_id']?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?=$row['stdName']?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?=$row['cgender']?>
                                        </td>
                                        <td class="px-6 py-4 bg-<?=$c?>">
                                        <?=$select?>
                                        </td>
                                        <td class="px-6 py-4">
                                        <?=$row['programme']?>
                                        </td>
                                        <td class="px-6 py-4">
                                        <?=$row['class_name']?>
                                        </td>
                                        <td class="px-6 py-4">
                                        <?=$row['serial_code']?>
                                        </td>
                                        <td class="px-6 py-4">
                                        <?=$row['stdPhone']?>
                                        </td>
                                        <td class="px-6 py-4">
                                        <?=$row['stdEmail']?>
                                        </td>
                                        <td class="flex items-center px-6 py-4">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                        </td>
                                    </tr>
                        <?php
    
                    }
                }else{
                    echo "NOT FOUND";
                }
    
        }
    }else{

    }
}

if(isset($_POST['select_class_session_candidate2'])){
    if(isset($_POST['class_id'])){
        if($_POST['class_id']!= '0' || $_POST['class_id']!=null){
            $id = $_POST['class_id'];
            $sql = "SELECT c.*, s.*, cd.*, c.gender as cgender, c.id as c_id, s.id as s_id, c.unique_id as cuid, s.uniqueId as suid FROM candidate c LEFT JOIN class_data cd ON c.class_id=cd.id LEFT JOIN students s ON c.user_id=s.uId  WHERE c.sId='$school_id' AND c.class_id='$id' AND cd.id='$id' GROUP BY c.id ORDER BY s.stdName ASC ";

            $i=1;
                $result = mysqli_query($con, $sql);
                // print_r($result);
                if(mysqli_num_rows($result)> 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row["c_id"];

                        if($row['selected']=='0'){
                            $c = 'danger';
                            $select = "Sorry!";
                        }else if($row['selected']== '1'){
                            $c = 'info';
                            $select = "SELECTED";
                        }else{
                            $c = 'warning';
                            $select = "Waiting";
                        }

                        ?>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" id="<?=$id?>">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <?=$i++?>#
                                        </th>
                                        <td class="px-6 py-4">
                                            <?=$row['std_id']?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?=$row['stdName']?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?=$row['cgender']?>
                                        </td>
                                        <td class="px-6 py-4 bg-<?=$c?>">
                                        <?=$select?>
                                        </td>
                                        <td class="px-6 py-4">
                                        <?=$row['serial_code']?>
                                        </td>
                                        <td class="px-6 py-4">
                                        <?=$row['stdPhone']?>
                                        </td>
                                        <td class="flex items-center px-6 py-4">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                        </td>
                                    </tr>
                        <?php

                    }
                }else{
                    echo "Not Found";
                }

        }
    }else{

    }    
}


if(isset($_POST['lottery_submit_form_data2'])){
    if(isset($_POST['select_class_session22'])){
        
    }
}

my_autoloader("../../Modal/Candidate");

function performLottery($candidateList, $maleSelectedCount, $maleWaitingCount, $femaleSelectedCount, $femaleWaitingCount) {
    $maleStudents = array_filter($candidateList, function ($candidate) {
        return $candidate->gender === 'male';
    });

    $femaleStudents = array_filter($candidateList, function ($candidate) {
        return $candidate->gender === 'female';
    });

    shuffle($maleStudents);
    shuffle($femaleStudents);

    $selectedMale = array_slice($maleStudents, 0, $maleSelectedCount);
    $selectedFemale = array_slice($femaleStudents, 0, $femaleSelectedCount);

    foreach ($selectedMale as $candidate) {
        $candidate->setSelected('1');
    }

    foreach ($selectedFemale as $candidate) {
        $candidate->setSelected('1');
    }

    $waitingMale = array_slice($maleStudents, $maleSelectedCount, $maleWaitingCount);
    $waitingFemale = array_slice($femaleStudents, $femaleSelectedCount, $femaleWaitingCount);

    foreach ($waitingMale as $candidate) {
        $candidate->setSelected('2');
    }

    foreach ($waitingFemale as $candidate) {
        $candidate->setSelected('2');
    }

    foreach ($candidateList as $candidate) {
        if ($candidate->getSelected() !== '1' && $candidate->getSelected() !== '2') {
            $candidate->getSelected('0');
        }
    }
    // foreach ($candidateList as $candidate) {
    //     echo $candidate->getSelected().'\n';
    // }

    return $candidateList;
}

if(isset($_POST["lottery_submit_form_data"])){
    if(isset($_POST["select_class_session2"]) && isset($_POST["waiting_female"])){
        if($_POST["select_class_session2"]!= "0" || $_POST['select_class_session2']!=null){
            $id = $_POST['select_class_session2'];
            $s_male = $_POST['selection_male'];
            $s_female = $_POST['selection_female'];
            $w_male = $_POST['waiting_male'];
            $w_female = $_POST['waiting_female'];

            if($s_male!=null && $s_female!=null && $w_male!=null && $w_female!=null){


                $sql = "SELECT * FROM candidate WHERE class_id='$id' AND selected!='1' ORDER BY RAND() ";

                $result = mysqli_query($con,$sql);

                $candidateList = [];
                if(mysqli_num_rows($result)> 0){
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $student = new Candidate($row);
                        $candidateList[] = $student;
                    }

                    $maleCount = 0;
                    $femaleCount = 0;

                    $umaleCount = 0;
                    $ufemaleCount = 0;

                    $query = "SELECT 
                            SUM(CASE WHEN gender = 'Male' THEN 1 ELSE 0 END) AS maleCount,
                            SUM(CASE WHEN gender = 'Female' THEN 1 ELSE 0 END) AS femaleCount
                            FROM candidate WHERE class_id='$id' ";

                    $result2 = mysqli_query($con, $query);
                    if(mysqli_num_rows($result2)>0){
                        $r = mysqli_fetch_assoc($result2);
                        $maleCount = $r['maleCount'];
                        $femaleCount = $r['femaleCount'];

                        $queryu = "SELECT 
                        SUM(CASE WHEN gender = 'Male' AND selected <> '1' THEN 1 ELSE 0 END) AS umaleCount,
                        SUM(CASE WHEN gender = 'Female' AND selected <> '1' THEN 1 ELSE 0 END) AS ufemaleCount
                        FROM candidate WHERE class_id='$id' ";

                        $result3 = mysqli_query($con, $queryu);
                        $ru = mysqli_fetch_assoc($result3);
                        $umaleCount = $ru['umaleCount'];
                        $ufemaleCount = $ru['ufemaleCount'];

                        // echo ''.$maleCount.''.$femaleCount.'';

                        if($s_male>$umaleCount){
                            $s_male = $umaleCount;
                        }
                        if($s_female>$ufemaleCount){
                            $s_female = $ufemaleCount;
                        }

                        if($w_male>$umaleCount){
                            $w_male = $umaleCount-$s_male;
                        }

                        if($w_female>$ufemaleCount){
                            $w_female = $ufemaleCount-$w_female;
                        }


                        $candidateList = performLottery($candidateList,$s_male,$w_male,$s_female,$w_female);

                        foreach ($candidateList as $candidate) {
                            if ($candidate->getSelected() !== '0'){
                                $cId = $candidate->getId();
                                $sel = $candidate->getSelected();
                                $con->query("UPDATE candidate SET selected='$sel' WHERE id='$cId' ");
                            }
                        }
                        echo 1;


                    }else{
                        echo "male female not found";
                    }

                }else{
                    echo "Candidate Not Found";
                }





            }else{
                echo "Please Input All Feilds";
            }


        }
    }

    mysqli_close($con);
}



if(isset($_POST["my"])){
    shuffle($studentsArray);
    $randomStudents = array_slice($studentsArray, 0, $n);
    $randomKeys = array_rand($studentsArray, $n);

    // If only one key is selected, array_rand returns a single value, so wrap it in an array
    if (!is_array($randomKeys)) {
        $randomKeys = [$randomKeys];
    }
    
    $randomStudents = [];
    foreach ($randomKeys as $key) {
        $randomStudents[] = $studentsArray[$key];
    }

// Define a custom comparison function
function compareStudents($a, $b) {
    return mt_rand(-1, 1); // mt_rand generates a random integer
}

// Use usort to shuffle the array
usort($studentsArray, 'compareStudents');

// Select the first N elements
$randomStudents = array_slice($studentsArray, 0, $n);
    




function getRandomStudents($studentsList, $count) {
    $randomKeys = array_rand($studentsList, $count);

    // If only one key is selected, array_rand returns a single value, so wrap it in an array
    if (!is_array($randomKeys)) {
        $randomKeys = [$randomKeys];
    }

    $randomStudents = [];
    foreach ($randomKeys as $key) {
        $randomStudents[] = $studentsList[$key];
    }

    return $randomStudents;
}


function performLottery($studentsList, $maleSelectedCount, $maleWaitingCount, $femaleSelectedCount, $femaleWaitingCount) {
    $maleStudents = array_filter($studentsList, function ($student) {
        return $student->gender === 'Male';
    });

    $femaleStudents = array_filter($studentsList, function ($student) {
        return $student->gender === 'Female';
    });

    // Shuffle the arrays to randomize the order
    shuffle($maleStudents);
    shuffle($femaleStudents);

    // Select the first N male and female students as selected
    $selectedMale = array_slice($maleStudents, 0, $maleSelectedCount);
    $selectedFemale = array_slice($femaleStudents, 0, $femaleSelectedCount);

    // Update statuses for selected students
    foreach ($selectedMale as $student) {
        $student->setStatus('selected');
    }

    foreach ($selectedFemale as $student) {
        $student->setStatus('selected');
    }

    // Select the next N male and female students as waiting
    $waitingMale = array_slice($maleStudents, $maleSelectedCount, $maleWaitingCount);
    $waitingFemale = array_slice($femaleStudents, $femaleSelectedCount, $femaleWaitingCount);

    // Update statuses for waiting students
    foreach ($waitingMale as $student) {
        $student->setStatus('waiting');
    }

    foreach ($waitingFemale as $student) {
        $student->setStatus('waiting');
    }

    // Update statuses for the remaining students as unselected
    foreach ($studentsList as $student) {
        if ($student->getStatus() !== 'selected' && $student->getStatus() !== 'waiting') {
            $student->setStatus('unselected');
        }
    }
}

// Example: Perform the lottery with 3 selected male, 2 waiting male, 2 selected female, and 1 waiting female students
performLottery($studentsList, 3, 2, 2, 1);

// Display the students with their statuses
foreach ($studentsList as $student) {
    echo "Student ID: {$student->id}, Name: {$student->name}, Gender: {$student->gender}, Status: {$student->getStatus()}\n";
}







    
$randomStudents = getRandomStudents($studentsList, 3);

function getRandomNStudents($studentsList, $count) {
    // Shuffle the array to randomize the order
    shuffle($studentsList);

    // Slice the array to get the first N elements
    $randomStudents = array_slice($studentsList, 0, $count);

    return $randomStudents;
}

// Example: Get and display 3 random students
$randomStudents = getRandomNStudents($studentsList, 3);

foreach ($randomStudents as $student) {
    echo "Student ID: {$student->id}, Name: {$student->uId}, Gender: {$student->gender}\n";
}


}


?>