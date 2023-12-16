<?php
session_start();
require_once '../../db/db.php';

$admin_id = $_SESSION['user'];
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

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" id="<?=$id?>">
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
    if($_POST['class_id']!= '0' || $_POST['class_id']!=null){
        $id = $_POST['class_id'];
        $sql = "SELECT c.*, s.*, c.id as c_id, s.id as s_id, c.unique_id as cuid, s.uniqueId as suid FROM candidate c LEFT JOIN class_data cd ON c.class_id=cd.id LEFT JOIN students s ON c.user_id=s.uId  WHERE c.sId='$school_id' AND c.id='$id' GROUP BY c.id ORDER BY s.stdName ASC ";

        $i=0;
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result)> 0){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["c_id"];
                    ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" id="<?=$id?>">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?=$i?>#
                                    </th>
                                    <td class="px-6 py-4">
                                        <?=$row['std_id']?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?=$row['stdName']?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?=$row['gender']?>
                                    </td>
                                    <td class="px-6 py-4">
                                    <?=$row['selected']?>
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
            }

    }
}

?>