<?php
include('../../db/db.php');
session_start();

if(isset($_SESSION['user'])){
   $_SESSION['visitor_id']=$_SESSION['user'];
   $_SESSION['unique_id']=$_SESSION['user'];

   if(!isset($_SESSION['role'])){
        header("location:../../login");
   }else{
        if($_SESSION['role']=='school'){
            header("location:../../admin/school");
        }elseif($_SESSION['role']=='mess'){
            header("location:../../admin/mess");
        }elseif($_SESSION['role']=='user'){
            header("location:../../");
        }elseif($_SESSION['role']=='manager'){
            header("location:../../");
        }
   }



}else{
   header("location:../../login");
}


if(!isset($_SESSION['user'])){
   header('location:../../login');
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>