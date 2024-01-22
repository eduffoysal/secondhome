<?php
session_start();
require_once '../../db/db.php';

spl_autoload_register(function ($class) {
    include $class . '.php';
    // echo $class;
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

if(isset($_POST['routine_schedule_data'])){
    ?>

<div class="container-fluid">

<div class="row">
    <div class="text-center m-auto">

    </div>
    <div class="row">
        <div class="col-6 text-start">
        <button class="btn btn-warning new_schedule_btn" data-bs-toggle="modal" data-bs-target="#my_modal_schedule_add" data-bs-whatever="@mdo">
            <center>Schedules</center>
        </button>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-warning new_schedule_btn" data-bs-toggle="modal" data-bs-target="#my_modal_schedule_add" data-bs-whatever="@mdo">
                New
            </button>
        </div>
    </div>
    <div class="col-md">
        <div class="accordion">
        <div class="accordion-item">
                <h2 style="font-size:15px" class="accordion-button" data-bs-target="#schedule_table" data-bs-toggle="collapse">Schedules</h2>
                <div class="others_fees_list_hhh"></div>
                <div id="schedule_table" class="accordion-collapse collapse:visible visibility: visible show">
                    <div class="accordion-body">

                        <div class="routine_schedule_table_list">
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                #
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Roll|SID
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Gender
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Serial
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Phone
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="_candidates_data_row">


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