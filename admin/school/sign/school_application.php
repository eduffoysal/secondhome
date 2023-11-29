<?php
session_start();
require_once '../../../db/db.php';

$admin_id = $_SESSION['user'];
$admin_phone = $_SESSION['user_phone'];

$uniqueId= time().'-'.mt_rand();

$unique = strtoupper(bin2hex(random_bytes(3)));
$ran_id = rand(time(), 100000000);

$unique.' - '.$uniqueId.' - '.$ran_id;

if(isset($_POST['mess_application'])){

    if($_POST['mess_name']!=""){
      $name =$_POST['mess_name'];
      $about = $_POST['about'];
      $date =$_POST['date'];
      $phone =$_POST['phone'];
      $email =$_POST['email'];
      $division =$_POST['division'];
      $upazila =$_POST['upazila'];
      $zila =$_POST['district'];
      $union =$_POST['union'];
      $ward =$_POST['ward'];
      $map =$_POST['location'];


      $address = $ward.', '.$union.', '.$upazila.', '.$zila.', '.$division;

      $uniqueId= time().'-'.mt_rand();

      $unique = strtoupper(bin2hex(random_bytes(3)));
      $ran_id = rand(time(), 100000000);
  

      $unique_id = $unique.'-'.$uniqueId.'-'.$ran_id;

      $b_id = $unique_id;

      $sId = "CO-".$b_id;
      
      $empl = 1;
    
      $sql = "INSERT INTO school(sId, unique_id, sName, s_desc, sEmail, sPhone, location, sAdrs, admin_id, sItp1, sEmpl, sVerification) VALUES('$sId','$unique_id','$name','$about','$email','$phone', '$map', '$address', '$admin_id', '$admin_phone', '$empl', '$unique')";

      if ($con->query($sql)) {

        $u_sql = "UPDATE users SET school_id = '$b_id' WHERE unique_id = '$admin_id' AND phone = '$admin_phone' ";
        if($con->query($u_sql)){
            echo "School Data added Successfully!";
            $_SESSION['school_id'] = $b_id;
        }else{
            echo "School Data Successfully added but Admin id not updated!";
        }


    } else {
        echo "Sorry, Something Went Wrong! Try Again Please! Error: " . $con->error;

        // error_log("MySQL Error: " . $con->error);
    }
  
  
    }else{
  
      echo "Sorry, Something Went Wrong! Try Again Please!";
  
    }
  
  
  }

?>