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
      
      $empl = 1;
    
      $sql = "INSERT INTO mess(unique_id, mess_name, mess_desc, email, phone, location, address, date_time, admin_id, admin_phone, num_users, otp) VALUES('$unique_id','$name','$about','$email','$phone', '$map', '$address', '$date', '$admin_id', '$admin_phone', '$empl', '$unique')";

      if ($con->query($sql)) {

        $u_sql = "UPDATE users SET mess_id = '$b_id' WHERE unique_id = '$admin_id' AND phone = '$admin_phone' ";
        if($con->query($u_sql)){
            echo "Mess added Successfully!";
            $_SESSION['mess_id'] = $b_id;
        }else{
            echo "Mess Successfully added but Admin id not updated!";
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