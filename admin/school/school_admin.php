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


        $sqlq = "SELECT COUNT(id) as num FROM session WHERE sId='$school_id' AND start_d='$s_date' AND end_d='$e_date'";

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
                                    <button class="py-1 px-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                                        Active
                                    </button>
                                    <button class="py-1 px-2 bg-warning  text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                                        Next->
                                    </button>
                                        <?php
                                    }else if($priority== '1'){
                                        $p = 'Active';
                                        ?>
                                        <button class="py-1 px-2 bg-warning text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                                            Next->
                                        </button>
                                        <button class="py-1 px-2 bg-danger text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                                            None
                                        </button>
                                        <?php
                                    }else{ 
                                        $p = 'Upcomming';
                                        ?>
                                        <button class="py-1 px-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                                            Active
                                        </button>
                                        <button class="py-1 px-2 bg-danger text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
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

?>