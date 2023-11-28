<?php
include('db/db.php');
session_start();

if(isset($_SESSION['user'])){
   $_SESSION['visitor_id']=$_SESSION['user'];
   $_SESSION['unique_id']=$_SESSION['user'];

   if(!isset($_SESSION['role'])){
        header("location:login");
   }else{
        if($_SESSION['role']=='school'){
            header("location:admin/school");
        }elseif($_SESSION['role']=='mess'){
            header("location:admin/mess");
        }elseif($_SESSION['role']=='teacher'){
            header("location:school/faculty");
        }
   }


}else{
   header("location:login");
}


if(!isset($_SESSION['user'])){
   header('location:login');
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./output/output.css">
</head>
<body>

    <div class="w-full text-xl text-red-600 ml-5 mr-5">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus vero ducimus aliquid, magni nemo officia corporis quidem blanditiis commodi eos alias. Quas ducimus neque aspernatur placeat modi quos error tempora tempore corrupti voluptatem adipisci perspiciatis beatae temporibus, quod autem consequuntur impedit minus aliquam. Tempora, praesentium est, sapiente officiis deleniti culpa alias, inventore exercitationem illo amet maiores reiciendis minus sunt dolore omnis ullam voluptatum esse dolor! Soluta delectus vero ex debitis exercitationem alias, natus, quidem unde non at numquam excepturi corporis quasi consequatur vitae itaque. Facilis alias, corrupti natus dolorem at incidunt iure delectus ipsa quis ab ea debitis facere.
        </p>
    </div>
    
</body>
</html>