<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:../');
}



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EdULearn - ClassRoom</title>
  	<link rel="shortcut icon" href="image/" type="image/x-icon" />

        <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../jquery-3.4.1.js"></script>
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    <link rel="stylesheet" href="../icon/bootstrap-icons.css">

    <!-- <script src="ck/ckeditor.js"></script> -->
    <!-- <script src="f/admin/ckeditor/ckeditor.js"></script> -->

    <!-- <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script> -->
    <script src="../jquery-3.5.1.min.js"></script>
    <!-- swap -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- swap -->


<style>



:root {
  --primary-color: rgb(255, 92, 92);
  --primary-variant: #ff2d2d;
  --secondary-color: #1b9999;
  --on-primary: rgb(250, 250, 250);
  --on-background: rgb(66, 66, 66);
  --on-background-alt: rgba(66, 66, 66, 0.7);
  --background: rgb(255, 255, 255);
  --box-shadow: 0 5px 20px 1px rgba(0, 0, 0, 0.5);
}

[data-theme="dark"] {
  --primary-color: rgb(150, 65, 255);
  --primary-variant: #6c63ff;
  --secondary-color: #03dac5;
  --on-primary: #000;
  --on-background: rgba(255, 255, 255, 0.9);
  --on-background-alt: rgba(255, 255, 255, 0.7);
  --background: #121212;
}

html {
  box-sizing: border-box;
  scroll-behavior: smooth;
}

body {
  margin: 0;
  color: var(--on-background);
  font-family: Comfortaa, sans-serif;
  background-color: var(--background);
  background-image: url("data:image/svg+xml,%3Csvg width='180' height='180' viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M81.28 88H68.413l19.298 19.298L81.28 88zm2.107 0h13.226L90 107.838 83.387 88zm15.334 0h12.866l-19.298 19.298L98.72 88zm-32.927-2.207L73.586 78h32.827l.5.5 7.294 7.293L115.414 87l-24.707 24.707-.707.707L64.586 87l1.207-1.207zm2.62.207L74 80.414 79.586 86H68.414zm16 0L90 80.414 95.586 86H84.414zm16 0L106 80.414 111.586 86h-11.172zm-8-6h11.173L98 85.586 92.414 80zM82 85.586L87.586 80H76.414L82 85.586zM17.414 0L.707 16.707 0 17.414V0h17.414zM4.28 0L0 12.838V0h4.28zm10.306 0L2.288 12.298 6.388 0h8.198zM180 17.414L162.586 0H180v17.414zM165.414 0l12.298 12.298L173.612 0h-8.198zM180 12.838L175.72 0H180v12.838zM0 163h16.413l.5.5 7.294 7.293L25.414 172l-8 8H0v-17zm0 10h6.613l-2.334 7H0v-7zm14.586 7l7-7H8.72l-2.333 7h8.2zM0 165.414L5.586 171H0v-5.586zM10.414 171L16 165.414 21.586 171H10.414zm-8-6h11.172L8 170.586 2.414 165zM180 163h-16.413l-7.794 7.793-1.207 1.207 8 8H180v-17zm-14.586 17l-7-7h12.865l2.333 7h-8.2zM180 173h-6.613l2.334 7H180v-7zm-21.586-2l5.586-5.586 5.586 5.586h-11.172zM180 165.414L174.414 171H180v-5.586zm-8 5.172l5.586-5.586h-11.172l5.586 5.586zM152.933 25.653l1.414 1.414-33.94 33.942-1.416-1.416 33.943-33.94zm1.414 127.28l-1.414 1.414-33.942-33.94 1.416-1.416 33.94 33.943zm-127.28 1.414l-1.414-1.414 33.94-33.942 1.416 1.416-33.943 33.94zm-1.414-127.28l1.414-1.414 33.942 33.94-1.416 1.416-33.94-33.943zM0 85c2.21 0 4 1.79 4 4s-1.79 4-4 4v-8zm180 0c-2.21 0-4 1.79-4 4s1.79 4 4 4v-8zM94 0c0 2.21-1.79 4-4 4s-4-1.79-4-4h8zm0 180c0-2.21-1.79-4-4-4s-4 1.79-4 4h8z' fill='%233ca5bb' fill-opacity='0.29' fill-rule='evenodd'/%3E%3C/svg%3E");
}






.fotter-section nav{

  width: 25px;
  transition: all 0.3s linear;

}
.fotter-section nav div{
  height: 40px;
  position:relative;
}
.fotter-section nav div .a{

  display: block;
  height: 100%;
  width: 100%;
  line-height: 20px;

  transition: all .3s linear;


}
/* .fotter-section nav div:nth-child(1) .a{
  background: #3b5998;
} */
/* .fotter-section nav div:nth-child(2) .a{
  background: #00acee;
}
.fotter-section nav div:nth-child(3) .a{
  background: #cd486b;
}
.fotter-section nav div:nth-child(4) .a{
  background: #0077b5;
}

.fotter-section nav div:nth-child(5) .a{
  background: #ff0000;
} */
.fotter-section nav div .a i{
  position:absolute;
  margin-top: 6px;
  font-size: 25px;

}
.fotter-section  div .a span{
  display: none;
  font-weight: bold;
  font-size:40px;

  letter-spacing: 1px;
  text-transform: uppercase;
}
.fotter-section .a:hover {
  z-index:1;
  width: 500px;
}
.fotter-section  div:hover .a span{
  padding-left: 20%;
  display: block;
}


.tophead{
    font-family:'Poppins', sans-serif;
    margin:0;
    padding:0;
    outline: none;
    border: none;
    text-decoration:none;
    text-transform:capitalize;
    scroll-behavior:smooth;
    top: 3px;
    left:0;
    right:0;
    height: 70px;
    z-index: 1000;

}

.topheader .topnav{
    display:flex;
    background:cyan;

}
.topheader .topnav a{
    flex:1;
    text-align:center;
    font-size: 14px;
    line-height:50px;
    text-decoration:none;
    color:white;
    text-transform:capitalize;
    font-family:'Poppins', sans-serif;


}
.topheader .topnav a span{
    padding-left:5px;


}
.topheader .topnav a:hover{
    filter:brightness(.7);
    color:black;

}
.topheader .topnav a:nth-child(1){
    background: #e74c3c;
}

.topheader .topnav a:nth-child(2){
    background: #27ae60;
}

.topheader .topnav a:nth-child(3){
    background: #2980b9;
}

.topheader .topnav a:nth-child(4){
    background: #8e44ad;
}

.topheader .topnav a:nth-child(5){
    background: #f39c12;
}

.topcontainer{
    /* display:flex; */

}


#postUser, #postOthers, #signUp, #logIn, #all_class_sections{
  display:none;
}

/* age calculator */

.containerAge
{

    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 50px 30px;
}
.containerAge *
{
    outline: none;
    border: none;
}
.containerAge .inputs-wrapper
{
    background-color: #fff;
    padding: 30px 25px;
    box-shadow: 0 15px 25px rgba(0,0,0,0.3);
    border-radius: 8px;
    margin-bottom: 50px;
}
.inputs-wrapper input,
.inputs-wrapper button
{
    background: #0a6cf1;
    border-radius: 5px;
    color: #fff;
    font-weight: 500;
    height: 50px;
}
.inputs-wrapper input
{
    width: 60%;
    padding: 0 20px;
    font-size: 14px;
    color: #fff;
}
.inputs-wrapper button
{
    width: 30%;
    float: right;
    padding: 0 20px;
    cursor: pointer;
}
.output
{
    width: 100%;
    display: flex;
    justify-content: space-between;
}
.output div
{
    width: 100px;
    height: 100px;
    color: #0a6cf1;
    background: #fff;
    box-shadow: 0 15px 25px rgba(0,0,0,0.3);
    display: grid;
    place-items: center;
    border-radius: 50%;
    padding: 20px 0;
}
.output div span
{
    font-size: 30px;
    font-weight: 500;
}
.output div p
{
    font-size: 14px;
    color: #707070;
    font-weight: 400;
}


@media(max-width:400px){
    .topname{
        display: none;
    }
}

/* video */

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*

.material-icons
{
    user-select: none;
    -webkit-user-select: none;
    cursor: pointer;
}

#section
{
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 51px);
    width: 100%;
    padding: 1.7%;
}


.msg{
        background: cyan;
        position: fixed;
        bottom: 5%;
        right:10px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size:32px;
        color:#1f1f1f;
        opacity:1;
        transition:all 0.5s;
        /* transition:all 10s; */
        animation-name: mff;
        animation-duration: 10s;
        animation-fill-mode: forwards;
        animation-iteration-count: infinite;
    }
    #msg:hover{
        bottom:60px;
        pointer-events:auto;
        color: yellow;
        background-color: red;
        transform: rotate(-360deg);
        opacity: 0.8;

    }

#sob{
    background-color: red;

}
#sob:hover{
    background-color: #008000;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #250657;
}
.rowwhi{
    margin-right:5px;
}
@media(max-width:768px){

        /* grid-template-columns: 1fr; */
.grid-container {
  display: inline;
  grid-template-columns: auto auto auto;
  background-color: #2E1405;
}

}



/* container content */



.content{
    display: flex;
    /* width: 50%; */
    justify-content: center;
    font-family: "Poppins",sans-serif;
    background: #000;
    text-align: center;
    min-height: 50px;


}
.content{
    position: relative;
    justify-content: center;
    text-align: center;
    box-shadow:0px 8px 8px rgb(0, 0, 0);

}
.content h2{
    font-variant: small-caps;
    font-family: sans-serif;
    font-weight: bold;
    position: absolute;
    font-size: 1.8rem;
    text-transform: capitalize;
    /* margin-left: 1%; */
    /* padding-left: 10%; */


}
.content h2:nth-child(1){
    /* position: relative; */
    color: transparent;
    -webkit-text-stroke: 2px #03a9f4;
}
.content h2:nth-child(2){
    color: #03a9f4;
    animation: anim 4s ease-in-out infinite;
}
@keyframes anim {
    0%,100%{
        clip-path: polygon(0% 45%, 15% 44%, 32% 50%, 54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%);
    }
    50%{
        clip-path: polygon(0% 60%, 16% 65%, 34% 66%, 51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%);
    }
}

/* .present_bttn{
  background-color: green;
} */


</style>


    <link rel="stylesheet" href="../bootstrap.min.css">
    <script src="../bootstrap.budle.min.js"></script>
    <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">




        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
 -->






	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">







</head>
<body id="sob" class="bg- text-light">



<div class="topheader">
    <header class="tophead">
        <nav class="topnav">
            <a href="#main" class="btttnu-1"  id="HtmlBtn"><i class="bi bi-box-arrow-in-right"><span class="topname">Login</span> <i class="bi bi-share"></i></i></a>
            <a href="#user" class="btttnu-2"><i class="bi bi-house"><span class="topname">Mess</span></i></a>
            <a href="#others" class="btttnu-3"><i class="bi bi-bell"><span class="topname">Admin</span></i></a>
            <a href="#signup" class="btttnu-4"><i class="bi bi-plus-square"><span class="topname">Quiz</span><i class="bi bi-person-plus-fill"></i></i></a>
            <a href="#login" class="btttnu-5"><i class="bi bi-house-fill"><span class="topname">About</span></i></a>

        </nav>
    </header>
</div>
<div class="container text-center">
<span style="font-size:10px" id="notice" class="text-center text-info">উপরের প্লাস / SignUp বাটনে ক্লিল করে আপনার আইপি লোকেশন দেখুন। ধন্যবাদ!</span>
</div>

<div class="container topcontainer">
    <section id="mainHome" class="section msssgu-1">









<div class="container">
	<div style="height:50px;">
	</div>
    <div class="row" id="loginform">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> Login
                    	<span class="pull-right"><span class="glyphicon glyphicon-pencil"></span> <a style="text-decoration:none; cursor:pointer; color:black;" id="signup">Sign up</a></span>
                    </h3>
                </div>
            	<div class="panel-body">
                	<form role="form" id="logform">
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Phone/User ID" name="username" id="username" type="phone" autofocus>
                            	<input class="form-control" placeholder="Phone/User ID" name="melogin" id="melogin" type="hidden">
                        	</div>

                        	<button type="button" id="loginbutton" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-log-in"></span> <span id="logtext">Login</span></button>
                    	</fieldset>
                	</form>
            	</div>
            </div>
        </div>

        
    </div>

    <div class="row" id="signupform" style="display:none;">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span> Sign Up
                    	<span class="pull-right"><span class="glyphicon glyphicon-log-in"></span> <a style="text-decoration:none; cursor:pointer; color:white;" id="login">Login</a></span>
                    </h3>
                </div>
            	<div class="panel-body">
                	<form role="form" id="signform">
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Full Name" name="susername" id="susername" type="text" autofocus>
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Phone" name="phone" id="spassword" type="phone">
                        	</div>
                          <div class="form-group">
                            	<input class="form-control" placeholder="New Password" name="classnumber" id="classNumber" type="number" autofocus>
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Mess Id" name="mentorId" id="mentorId" type="text">
                        	</div>
                          <input class="form-control" placeholder="Phone/Student ID" name="mesignup" id="mesignup" type="hidden">
                        	<button type="button" id="signupbutton" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-check"></span> <span id="signtext">Sign Up</span></button>
                    	</fieldset>
                	</form>
            	</div>
            </div>
        </div>
    </div>

    <div id="myalert" style="display:none;">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="alert alert-info">
    			<center><span id="alerttext"></span></center>
    		</div>
   	 	</div>
    </div>
</div>










    </section>




    <section id="postUser" class="section msssgu-2">




    </section>



    <section id="postOthers" class="section msssgu-3">


    <div class="container containerAge">
        <div class="inputs-wrapper">
            <h4 class="text-center text-info">Calculate Your Age</h4>
            <input type="date" name="date" id="date-input">
            <button onclick="ageCalculate()">Age</button>
        </div>
        <div class="output">
            <div>
                <span id="year">-</span>
                <p>Year</p>
            </div>
            <div>
                <span id="month">-</span>
                <p>Month</p>
            </div>
            <div>
                <span id="day">-</span>
                <p>Day</p>
            </div>
        </div>
    </div>


    </section>
    <section id="signUp" class="section msssgu-4">


    <?php

        @$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
        @$http_forwarded_ip = $_SERVER['HTTP_FORWARDED_FOR'];

        if(!empty($http_client_ip)){
            $ipaddress = $http_client_ip;
        }else if(!empty($http_forwarded_ip)){
            $ipaddress = $http_forwarded_ip;
        }else {
            $remote_addr = $_SERVER['REMOTE_ADDR'];
            // $remote_addr = "103.158.159.57";
            $ipaddress = $remote_addr;
        }



        $data_ip = file_get_contents("http://ip-api.com/json/{$ipaddress}?fields=status,message,country,countryCode,region,regionName,city,district,zip,lat,lon,timezone,currency,isp,org,as,mobile,query");
        $json = json_decode($data_ip, true);
    ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Assalamualaikum!</strong> আপনার আইপি দেখে নিন-ঠিকানা সহ...
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    <div class="container">

                        <div class="row">

                        <div class="col-md-6">

                        <h3>Ip Finding</h3>
                        <div style="border-radius:6px; border: 2px solid white;" class="container shadow-lg border border-light">
                            <img src="https://cache.ip-api.com/<?=$json['lon']?>,<?=$json['lat']?>,10" class="w-100" alt="ipLocation">
                        </div>


                        </div>

                        <div class="col-md-6">

                                <div class="content form-control bg-dark">


                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['query'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['country'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['countryCode'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['region'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['regionName'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['city'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['district'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['zip'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['lat'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['lon'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['timezone'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['currency'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['isp'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['org'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['as'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?= $json['mobile'] ?>"> <label for="" class="text-light">#</label> </div>
                                    <div class="form-floating mb-1 bg-secondary"><input type="text" class="form-control form-floating text-light bg-dark" value="<?php  ?>"> <label for="" class="text-light">#</label> </div>

                                </div>


                        </div>


                        </div>

                    </div>



            </div>




    </section>
    <section id="logIn" class="section  msssgu-5">Login


    </section>

</div>


<?php
    $agentUser = $_SERVER['HTTP_USER_AGENT'];
?>
 <!-- <section>
     <form action="" method="POST" id="form-visitor" enctype="multipart/form-data">
            <input type="hidden" name="lat" value="<?= $json['lat'] ?>">
            <input type="hidden" name="lon" value="<?= $json['lon'] ?>">
            <input type="hidden" name="agentIp" value="<?=$ipaddress?>">
            <input type="hidden" name="agent" value="<?=$agentUser?>">
            <div class="browser" ><input type="hidden" name="browser" id="browser"></div>
            <div class="version" ><input type="hidden" name="version" id="version"></div>
            <div class="layout" ><input type="hidden" name="layout" id="layout"></div>
            <div class="os" ><input type="hidden" name="os" id="os"></div>
            <div class="description" ><input type="hidden" name="description" id="description"></div>

     </form>
 <section> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.6/platform.min.js"></script>

    <script>
     document.getElementById('browser').value = platform.name;
     document.getElementById('version').value = platform.version;
     document.getElementById('layout').value = platform.layout;
     document.getElementById('os').value = platform.os;
     document.getElementById('description').value = platform.description;
    </script>
<script>
  $(document).ready(function(){
    $(document).on('click','.sub_add_btn1', function(){

      var post_id = $(this).attr('id');

      var msg = $('#subject_name'+post_id).val();
      var marks = $('#marks'+post_id).val();
      var mcq = $('#mcq'+post_id).val();
      var fivel = $('#5l'+post_id).val();
      var fiveh = $('#5h'+post_id).val();
      var fourl = $('#4l'+post_id).val();
      var fourh = $('#4h'+post_id).val();
      var threehalfl = $('#3_5l'+post_id).val();
      var threehalfh = $('#3_5h'+post_id).val();
      var threel = $('#3l'+post_id).val();
      var threeh = $('#3h'+post_id).val();
      var twol = $('#2l'+post_id).val();
      var twoh = $('#2h'+post_id).val();
      var onel = $('#1l'+post_id).val();
      var oneh = $('#1h'+post_id).val();
      var ex_id = $('#ex_id'+post_id).val();
      var ex_code = $('#ex_code'+post_id).val();


      if($.trim(msg).length == 0){
        error_msg = "অনুগ্রহ করে বিষয়ের নাম দিন!";
        $('#status_sub_add'+post_id).text(error_msg);
      }else{
        error_msg = "";
        $('#status_sub_add'+post_id).text(error_msg);
      }
      if(error_msg != ''){
        return false;
      }else{
        $.ajax({
              url:'getexam.php',
              type:'post',
              data: {
                subjectName: msg,
                post_id: post_id,
                marks:marks,
                mcq:mcq,
                fivel:fivel,
                fiveh:fiveh,
                fourl:fourl,
                fourh:fourh,
                threehalfl:threehalfl,
                threehalfh:threehalfh,
                threel:threel,
                threeh:threeh,
                twol:twol,
                twoh:twoh,
                onel:onel,
                oneh:oneh,
                ex_id:ex_id,
                ex_code:ex_code,
                postaexam: true,
              },
              success: function(response){
                $('#status_sub_add'+post_id).html(response);
                // alert(response);

              }
            });
      }

    });
  });
</script>

<!-- subject update -->
<script>
  $(document).ready(function(){
    $(document).on('click','.subject_marks_update_btn', function(){

      var postt_id = $(this).attr('id');


      var marks = $('#marks_'+postt_id).val();
      var mcq = $('#mcq_'+postt_id).val();
      var fivel = $('#5l_'+postt_id).val();
      var fiveh = $('#5h_'+postt_id).val();
      var fourl = $('#4l_'+postt_id).val();
      var fourh = $('#4h_'+postt_id).val();
      var threehalfl = $('#3_5l_'+postt_id).val();
      var threehalfh = $('#3_5h_'+postt_id).val();
      var threel = $('#3l_'+postt_id).val();
      var threeh = $('#3h_'+postt_id).val();
      var twol = $('#2l_'+postt_id).val();
      var twoh = $('#2h_'+postt_id).val();
      var onel = $('#1l_'+postt_id).val();
      var oneh = $('#1h_'+postt_id).val();
      var ex_id = $('#ex_id_'+postt_id).val();
      var ex_code = $('#ex_code_'+postt_id).val();


        $.ajax({
              url:'getexam.php',
              type:'post',
              data: {
                postt_id: postt_id,
                marks:marks,
                mcq:mcq,
                fivel:fivel,
                fiveh:fiveh,
                fourl:fourl,
                fourh:fourh,
                threehalfl:threehalfl,
                threehalfh:threehalfh,
                threel:threel,
                threeh:threeh,
                twol:twol,
                twoh:twoh,
                onel:onel,
                oneh:oneh,
                ex_id:ex_id,
                ex_code:ex_code,
                update_sub: true,
              },
              success: function(response){
                $('#status_sub_update_'+postt_id).html(response);
                // alert(response);

              }
            });


    });
  });
</script>
<!-- subject delete -->



<script>
  $(document).ready(function(){
    $(document).on('click','.subject_marks_delete_btn', function(){

      var posttt_id = $(this).attr('id');

      var ex_id = $('#ex_id_'+posttt_id).val();
      var ex_code = $('#ex_code_'+posttt_id).val();


        $.ajax({
              url:'getexam.php',
              type:'post',
              data: {
                posttt_id: posttt_id,
                ex_id:ex_id,
                ex_code:ex_code,
                delete_sub: true,
              },
              success: function(response){
                $('#status_sub_delete_'+posttt_id).html(response);
                // alert(response);

              }
            });


    });
  });
</script>


<script>
  $(document).ready(function(){
    $(document).on('click','.subject_marksheet_details_btn', function(){

      var sub_id = $(this).attr('id');


        $.ajax({
              url:'get_marks.php',
              type:'post',
              data: {
                sub_id: sub_id,
                marks_sub_details: true,
              },
              success: function(response){
                $('#marksheet_details'+sub_id).html(response);
                // alert(response);

              }
            });


    });
  });
</script>


<script>
  $(document).ready(function(){
    // $('#getdisplaydata1').click(function(){
      getInsertvisitor();
      function getInsertvisitor(){

        var visitor = new FormData($('#form-visito')[0]);

      $.ajax({
        url:'get.php',
        type:'post',
        data: visitor,
        async: false,
        cache: false,
        contentType: false,
        enctype: 'multipart/form-data',
        processData: false,
        success:function(responsedata){
          $('#noticee').html(responsedata);
        }
      });
    }
    // });
  });
</script>


<!-- <script type="text/javascript" src="asset/custom.js"></script>   -->
<script type='text/javascript'>

$(document).ready(function(){

    // $('#load_videos').load('getexam.php');
    $('#load_videos').ready(function(){

        $.ajax({
              url:'getexam.php',
              type:'post',
              data: {
                ex_p: true
              },
              success: function(response){
                $('#load_videos').html(response);



              }
            });


    });

});

$(document).ready(function(){

// $('#load_videos').load('getexam.php');
$('#all_student').ready(function(){

    $.ajax({
          url:'get_std_class.php',
          type:'post',
          data: {
            all_students: true
          },
          success: function(response){
            $('#all_student').html(response);
            $('.all_std_tablee').DataTable(response);
          }
        });


});

});

$(document).ready(function(){
    $(document).on('click','.student_btn_all', function(){

        $.ajax({
              url:'get_std_class.php',
              type:'post',
              data: {
                all_students: true
              },
              success: function(result){
                $('#all_student').html(result);

              }
            });

    });
  });

  $(document).ready(function(){
    $(document).on('click','.section_btn_all', function(){

        $.ajax({
              url:'get_std_class.php',
              type:'post',
              data: {
                all_sections: true
              },
              success: function(response){
                $('#section_classes').html(response);

              }
            });

    });
  });



  function del_std(id){

      jQuery.ajax({
        url:'get_std_class.php',
        type:'post',
        data:'type=delStd&std_id='+id,
        success:function(response){
          alert(response);
          $('#status_std_update').html(response);
          $('#all_student_btn').trigger('click');

        }
      })
    }


function act_std(id){

 jQuery.ajax({
   url:'get_std_class.php',
   type:'post',
   data:'type=upStd&std_id='+id,
   success:function(response){
     alert(response);
     $('#status_std_update').html(response);
     $('#all_student_btn').trigger('click');

   }
 })
}


function add_sub(id){

      jQuery.ajax({
        url:'getexam.php',
        type:'post',
        data:'type=addSub&ex_id='+id,
        success:function(response){
            $('#addsubject1'+id).html(response);

        }
      })
    }




    function std_result_marksheet(id){

      jQuery.ajax({
        url:'get_std_class2.php',
        type:'post',
        data:'typeMarks=subMarks&ex_id='+id,
        success:function(response){
            $('#exam_marksheet_main'+id).html(response);

        }
      })
    }




    function like_updatee(id){

     jQuery.ajax({
       url:'update_love_upost.php',
       type:'post',
       data:'type=like&id='+id,
       success:function(result){
         var cur_count=jQuery('#like_loope_'+id).html();
         cur_count++;
         jQuery('#like_loope_'+id).html(cur_count);
         $('#load_videos').load('getdata7.php');
       }
     })
   }


   function dislike_updatee(id){

     jQuery.ajax({
       url:'update_love_upost.php',
       type:'post',
       data:'type=dislike&id='+id,
       success:function(result){
         var cur_count=jQuery('#dislike_loope_'+id).html();
         cur_count++;
         jQuery('#dislike_loope_'+id).html(cur_count);
         $('#load_videos').load('getdata7.php');
       }
     })
   }





  function love_update_com(id){

      jQuery.ajax({
        url:'update_love_upost2.php',
        type:'post',
        data:'type=love&id='+id,
        success:function(result){
          var cur_count=jQuery('#love_loop_com_'+id).html();
          cur_count++;
          jQuery('#love_loop_com_'+id).html(cur_count);
        }
      })
    }

    function like_update_com(id){

     jQuery.ajax({
       url:'update_love_upost2.php',
       type:'post',
       data:'type=like&id='+id,
       success:function(result){
         var cur_count=jQuery('#like_loop_com_'+id).html();
         cur_count++;
         jQuery('#like_loop_com_'+id).html(cur_count);
       }
     })
   }


   function dislike_update_com(id){

     jQuery.ajax({
       url:'update_love_upost2.php',
       type:'post',
       data:'type=dislike&id='+id,
       success:function(result){
         var cur_count=jQuery('#dislike_loop_com_'+id).html();
         cur_count++;
         jQuery('#dislike_loop_com_'+id).html(cur_count);
       }
     })
   }


</script>

<script type="text/javascript">

    $(document).ready(function(){
        $('.all_student_btn').click(function(){
            $('.classroom_student').css('display','block');
            // $('.msssgu-3').css('display','none');
            // $('.msssgu-4').css('display','none');
            // $('.msssgu-5').css('display','none');
            $('.classroom_section').css('display','none');
        });
    });
</script>

<script type="text/javascript">

    $(document).ready(function(){
        $('.all_class_section_btn').click(function(){
            $('.classroom_student').css('display','none');
            // $('.msssgu-3').css('display','none');
            // $('.msssgu-4').css('display','none');
            // $('.msssgu-5').css('display','none');
            $('.classroom_section').css('display','block');
        });
    });
</script>
<script type="text/javascript">

    $(document).ready(function(){
        $('.btttnu-1').click(function(){
            $('.msssgu-2').css('display','none');
            $('.msssgu-3').css('display','none');
            $('.msssgu-4').css('display','none');
            $('.msssgu-5').css('display','none');
            $('.msssgu-1').css('display','block');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.btttnu-2').click(function(){
            $('.msssgu-1').css('display','none');
            $('.msssgu-3').css('display','none');
            $('.msssgu-4').css('display','none');
            $('.msssgu-5').css('display','none');
            $('.msssgu-2').css('display','block');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.btttnu-3').click(function(){
            $('.msssgu-1').css('display','none');
            $('.msssgu-2').css('display','none');
            $('.msssgu-4').css('display','none');
            $('.msssgu-5').css('display','none');
            $('.msssgu-3').css('display','block');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.btttnu-4').click(function(){
            $('.msssgu-2').css('display','none');
            $('.msssgu-3').css('display','none');
            $('.msssgu-1').css('display','none');
            $('.msssgu-5').css('display','none');
            $('.msssgu-4').css('display','block');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.btttnu-5').click(function(){
            $('.msssgu-1').css('display','none');
            $('.msssgu-2').css('display','none');
            $('.msssgu-3').css('display','none');
            $('.msssgu-4').css('display','none');
            $('.msssgu-5').css('display','block');
        });
    });
</script>



<!-- swap -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>



<script type="text/javascript" src="asset/custom.js"></script>
<!-- <script type="text/javascript" src="user.js"></script> -->
<!-- swap -->
<script>
    //   setInterval(function(){

    //     load_comment();

    // },1000)

    const months = [31,28,31,30,31,30,31,31,30,31,30,31];

function ageCalculate() {
    let today = new Date();
    let inputDate = new Date(document.getElementById('date-input').value);
    let birthYear, birthMonth, birthDay;
    let birthDetails = {
        year: inputDate.getFullYear(),
        month: inputDate.getMonth()+1,
        date: inputDate.getDate(),
    }

    let currentYear = today.getFullYear();
    let currentMonth = today.getMonth()+1;
    let currentDate = today.getDate();

    leapChecker(currentYear);

    if (birthDetails.year > currentYear ||
        (birthDetails.month > currentMonth && birthDetails.year == currentYear) ||
        (birthDetails.date > currentDate && birthDetails.month == currentMonth && birthDetails.year == currentYear))
    {
        alert('Not Born yet');
        displayResult("-","-","-");
        return;
    }

    birthYear = currentYear - birthDetails.year;

    if (currentMonth >= birthDetails.month) {
        birthMonth = currentMonth - birthDetails.month;
    }else{
        birthYear--;
        birthMonth = 12 + currentMonth - birthDetails.month;
    }


    if (currentDate >= birthDetails.date) {
        birthDay = currentDate - birthDetails.date;
    }else{
        birthMonth--;
        let Day = months[currentMonth - 2];
        birthDay = Day + currentDate - birthDetails.date;
        if (birthMonth < 0) {
            birthMonth = 11;
            birthYear--;
        }
    }

    displayResult(birthYear, birthMonth, birthDay);


    function displayResult(bYear, bMonth, bDay) {
        document.getElementById('year').textContent = bYear;
        document.getElementById('month').textContent = bMonth;
        document.getElementById('day').textContent = bDay;
    }

}
function leapChecker(year) {
    if(year % 4 == 0 || (year % 100 == 0 && year % 400 == 0)){
        months[1] = 29;
    }else{
        months[1] = 28;
    }
}




</script>

<script src="jsnav/bootstrap.bundle.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready( function () {
		// $('.all_std_tablee').DataTable();
  });
  </script>


<script>
  $(document).ready( function () {



  });
  </script>







<script>
  $(document).ready(function(){
    $(document).on('click','.add_std_in_class_btn', function(){

      var class_id = $(this).attr('id');

        $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                class_id: class_id,
                students_for_class: true,
              },
              success: function(response){
                $('#students_all_for_class_'+class_id).html(response);
                $('.all_std_tableee_class_students_'+class_id).DataTable(response);
              }
            });


    });
  });
</script>

<script>
  $(document).ready(function(){
    $(document).on('click','.students_of_classes_btn', function(){

      var class_id = $(this).attr('id');

        $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                class_id: class_id,
                students_of_class: true,
              },
              success: function(response){
                $('#students_all_of_class_'+class_id).html(response);
                $('.all_std_tableeee_class_students_'+class_id).DataTable(response);
              }
            });


    });
  });
</script>
<script>
  $(document).ready(function(){
    $(document).on('click','.attendence_classes_btn', function(){
      // alert("hi");

      var class_id = $(this).attr('id');
      var today_date1 = $('#attendence_today_date1'+class_id).val();

        $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                C_id: class_id,
                today_date: today_date1,
                students_attendence_class: true,
              },
              success: function(response){
                $('#class_attendence_sheet_all_std'+class_id).html(response);
                // alert(response);
              }
            });


    });
  });
</script>


<script>
  $(document).ready(function(){
    $(document).on('click','.get_attn_sheet_btn', function(){
      // alert("hi");

      var class_id = $(this).attr('id');
      var today_date1 = $('#attendence_today_date2'+class_id).val();

        $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                C_id: class_id,
                today_date: today_date1,
                students_attendence_class: true,
              },
              success: function(response){
                $('#class_attendence_sheet_all_std'+class_id).html(response);
                // alert(response);
              }
            });


    });
  });
</script>


<script>
  $(document).ready(function(){
    $(document).on('click','.present_btn', function(){
      // alert("hi");

      var id = $(this).attr('id');
      var today = $('#today_date_id'+id).val();
      var classCode = $('#class_code_att_'+id).val();
      var stdName = $('#std_name_att_'+id).val();
      // $(this).css('display','none');

      $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                id: id,
                date: today,
                classCode: classCode,
                stdName: stdName,
                students_attendence_p: true,
              },
              success: function(response){
                $('#present_status_std'+id).html(response);

                $('.present_bttn_'+id).css('display','none');
                $('.absent_bttn_'+id).css('display','none');
                $('.late2_bttn_'+id).css('display','inline');

              }
            });





    });
    $(document).on('click','.absent_btn', function(){
      // alert("hi");

      var id = $(this).attr('id');

      var today = $('#today_date_id'+id).val();
      var classCode = $('#class_code_att_'+id).val();
      var stdName = $('#std_name_att_'+id).val();

      // $(this).css('display','none');

      $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                id: id,
                date: today,
                classCode: classCode,
                stdName: stdName,
                students_attendence_a: true,
              },
              success: function(response){
                $('#present_status_std'+id).html(response);

                $('.absent_bttn_'+id).css('display','none');
                $('.present_bttn_'+id).css('display','none');
                $('.late_bttn_'+id).css('display','inline');

              }
            });



    });
    $(document).on('click','.late_btn', function(){
      // alert("hi");

      var id = $(this).attr('id');

      var today = $('#today_date_id'+id).val();
      var classCode = $('#class_code_att_'+id).val();
      var stdName = $('#std_name_att_'+id).val();

      // $(this).css('display','none');

      $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                id: id,
                date: today,
                classCode: classCode,
                stdName: stdName,
                students_attendence_late: true,
              },
              success: function(response){
                $('#present_status_std'+id).html(response);

                $('.late_bttn_'+id).css('display','none');
                $('.late2_bttn_'+id).css('display','inline');

              }
            });



    });
    $(document).on('click','.late2_btn', function(){
      // alert("hi");

      var id = $(this).attr('id');

      var today = $('#today_date_id'+id).val();
      var classCode = $('#class_code_att_'+id).val();
      var stdName = $('#std_name_att_'+id).val();

      // $(this).css('display','none');

      $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                id: id,
                date: today,
                classCode: classCode,
                stdName: stdName,
                students_attendence_late2: true,
              },
              success: function(response){
                $('#present_status_std'+id).html(response);

                $('.late2_bttn_'+id).css('display','none');
                $('.late_bttn_'+id).css('display','inline');

              }
            });



    });
    $(document).on('click','.absent_up_btn', function(){
      // alert("hi");

      var id = $(this).attr('id');

      var today = $('#today_date_id'+id).val();
      var classCode = $('#class_code_att_'+id).val();
      var stdName = $('#std_name_att_'+id).val();

      // $(this).css('display','none');

      $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                id: id,
                date: today,
                classCode: classCode,
                stdName: stdName,
                students_attendence_a_up: true,
              },
              success: function(response){
                $('#present_status_std'+id).html(response);

                $('.absent_up_bttn_'+id).css('display','none');
                $('.a_to_p_up_bttn_'+id).css('display','inline');


              }
            });



    });
    $(document).on('click','.a_to_p_up_btn', function(){
      // alert("hi");

      var id = $(this).attr('id');

      var today = $('#today_date_id'+id).val();
      var classCode = $('#class_code_att_'+id).val();
      var stdName = $('#std_name_att_'+id).val();

      // $(this).css('display','none');

      $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                id: id,
                date: today,
                classCode: classCode,
                stdName: stdName,
                students_attendence_a_p_up: true,
              },
              success: function(response){
                $('#present_status_std'+id).html(response);

                $('.a_to_p_up_bttn_'+id).css('display','none');
                $('.absent_up_bttn_'+id).css('display','inline');


              }
            });


    });
    $(document).on('click','.present_up_btn', function(){
      // alert("hi");

      var id = $(this).attr('id');

      var today = $('#today_date_id'+id).val();
      var classCode = $('#class_code_att_'+id).val();
      var stdName = $('#std_name_att_'+id).val();

      // $(this).css('display','none');

      $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                id: id,
                date: today,
                classCode: classCode,
                stdName: stdName,
                students_attendence_p_up: true,
              },
              success: function(response){
                $('#present_status_std'+id).html(response);

                $('.present_up_bttn_'+id).css('display','none');
                $('.p_to_a_up_bttn_'+id).css('display','inline');


              }
            });



    });
    $(document).on('click','.p_to_a_up_btn', function(){
      // alert("hi");

      var id = $(this).attr('id');

      var today = $('#today_date_id'+id).val();
      var classCode = $('#class_code_att_'+id).val();
      var stdName = $('#std_name_att_'+id).val();

      // $(this).css('display','none');

      $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                id: id,
                date: today,
                classCode: classCode,
                stdName: stdName,
                students_attendence_p_a_up: true,
              },
              success: function(response){
                $('#present_status_std'+id).html(response);

                $('.p_to_a_up_bttn_'+id).css('display','none');
                $('.present_up_bttn_'+id).css('display','inline');


              }
            });



    });
  });
</script>


<script>
  $(document).ready(function(){
    $(document).on('click','.students_of_this_exam_btn', function(){
      // alert("hi");

      var exam_id = $(this).attr('id');

        $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                exam_id: exam_id,
                select_exam_students: true,
              },
              success: function(response){
                $('#all_students_of_this_exam'+exam_id).html(response);
                $('.all_students_of_this_exam_'+exam_id).DataTable(response);
              }
            });


    });
  });
</script>


</body>

</html>






 <script>


</script>






<script>


</script>



<script>
$(document).ready(function(){



    $(document).on('click', '.std_check_box', function(){
        var html = '';
        if(this.checked)
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-main="'+$(this).data('main')+'" data-idd="'+$(this).data('idd')+'" data-std_name="'+$(this).data('std_name')+'" data-class="'+$(this).data('class')+'" data-roll="'+$(this).data('roll')+'" data-phone="'+$(this).data('phone')+'" class="st_check_box" checked /></td>';
            html += '<td>'+$(this).data("idd")+'</td>';
            html += '<td>S.ID</td>';
            html += '<td><input type="text" name="std_name[]" class="form-control" value="'+$(this).data("std_name")+'" /></td>';
            html += '<td><input type="text" name="class[]" class="form-control" value="'+$(this).data("class")+'" /></td>';
            html += '<td><input type="text" name="sec[]" class="form-control" value="'+$(this).data("sec")+'" /></td>';
            html += '<td><input type="text" name="roll[]" class="form-control" value="'+$(this).data("roll")+'" /></td>';
            html += '<td><input type="text" name="phone[]" class="form-control" value="'+$(this).data("phone")+'" /><input type="hidden" name="hidden_id[]" value="'+$(this).attr('id')+'" /></td>';
            html += '<td class="del_std_data" id="'+$(this).data("main")+'"><button type="button" class="badge btn btn-warning" >Delete</button></td>';
            html += '<td class="up_std_data" id="'+$(this).data("main")+'"><button type="button" class="badge btn btn-warning" >Update</button></td>';

        }
        else
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-idd="'+$(this).data('idd')+'" data-std_name="'+$(this).data('std_name')+'" data-class="'+$(this).data('class')+'" data-sec="'+$(this).data('sec')+'" data-roll="'+$(this).data('roll')+'" data-phone="'+$(this).data('phone')+'" class="check_box" /></td>';
            html += '<td>'+$(this).data('idd')+'</td>';
            html += '<td>'+$(this).data('std_name')+'</td>';
            html += '<td>'+$(this).data('class')+'</td>';
            html += '<td>'+$(this).data('sec')+'</td>';
            html += '<td>'+$(this).data('roll')+'</td>';
            html += '<td>'+$(this).data('phone')+'</td>';
            html += '<td></td>';
            html += '<td></td>';
        }
        $(this).closest('tr').html(html);
        // $('#gender_'+$(this).attr('id')+'').val($(this).data('gender'));
    });







    $('#update_std_form').on('submit', function(event){
        event.preventDefault();
        // alert('hi');
        if($('.st_check_box:checked').length > 0)
        {
            $.ajax({
                url:"getexam.php",
                method:"POST",
                data:$(this).serialize(),
                success:function(result)
                {
                    alert("UPDATED!!!");
                    $('#status_std_update').html(result);
                    $('#all_student_btn').trigger('click');

                }
            })
        }
    });

});
</script>


<script>

    $(document).ready(function(){
    $(document).on('click','.out_student_from_class', function(){
      // alert('hi');


      var std_id = $(this).attr('id');


      var class_code = $('#class_out_code__'+std_id).val();



        $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                std_id: std_id,
                class_code:class_code,
                out_student_from_class: true,
              },
              success: function(response){
                $('#out_std_from_class_update_'+class_code).html(response);
                // alert(response);

              }
            });


    });
  });


</script>

<script>

    $(document).ready(function(){
    $(document).on('click','.add_student_in_class', function(){


      var std_id = $(this).attr('id');


      var class_code = $('#class_code_'+std_id).val();



        $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                std_id: std_id,
                class_code:class_code,
                add_student_in_class: true,
              },
              success: function(response){
                $('#add_std_in_class_update_'+class_code).html(response);
                // alert(response);

              }
            });


    });
  });


</script>


<script>

    $(document).ready(function(){
    $(document).on('click','.exam_class_code_update_btn', function(){
          // alert('hi');

      var class_id = $(this).attr('id');


      var class_code = $('#exam_class_code_updated_'+class_id).val();



        $.ajax({
              url:'get_std_class2.php',
              type:'post',
              data: {
                class_id: class_id,
                class:class_code,
                updated_class_code: true,
              },
              success: function(response){
                $('#status_class_update_'+class_id).html(response);
                // alert(response);

              }
            });


    });
  });


</script>





<script>

    $(document).ready(function(){
    $(document).on('click','.add_student_in_marksheet_btn', function(){

      var std_id = $(this).attr('id');

      var class_code = $('#exam_class_code_'+std_id).val();
      var student_id = $('#examm_student_id_'+std_id).val();
      var exam_code = $('#examm_code_'+std_id).val();
      var exam_id = $('#exam_ID_'+std_id).val();
      // alert(exam_code);

      $.ajax({
              url:'get_marks.php',
              type:'post',
              data: {
                std_id:std_id,
                class_code:class_code,
                exam_code:exam_code,
                exam_id:exam_id,
                student_id:student_id,
                add_marks:true,
              },
              success: function(response){
                $('#student_status_marksheet_'+exam_code).html(response);
                // alert(response);

              }
            });


    });
  });


</script>



<script>

    $(document).ready(function(){
    $(document).on('click','.student_in_marksheet_btn', function(){

      var std_id = $(this).attr('id');

      var class_code = $('#exam_class_code_'+std_id).val();
      var student_id = $('#examm_student_id_'+std_id).val();
      var exam_code = $('#examm_code_'+std_id).val();
      var exam_id = $('#exam_ID_'+std_id).val();
      // alert(exam_code);

      $.ajax({
              url:'get_marks.php',
              type:'post',
              data: {
                std_id:std_id,
                class_code:class_code,
                exam_code:exam_code,
                exam_id:exam_id,
                student_id:student_id,
                show_marks:true,
              },
              success: function(response){
                $('#marks_subject_'+std_id).html(response);
                // alert(response);

              }
            });


    });
  });


</script>


<script>

    $(document).ready(function(){
    $(document).on('click','.marks_sub_update_btn_', function(){

      var std_id = $(this).attr('id');

      var sub_code = $('#marks_sub_code_'+std_id).val();
      var student_id = $('#marks_std_id_'+std_id).val();
      var exam_code = $('#marks_ex_code_'+std_id).val();
      var cq = $('#written_sub_marks_'+std_id).val();
      var mcq = $('#mcq_sub_marks_'+std_id).val();


      $.ajax({
              url:'get_marks.php',
              type:'post',
              data: {
                this_id:std_id,
                sub_code:sub_code,
                exam_code:exam_code,
                student_id:student_id,
                cq:cq,
                mcq:mcq,
                update_marks_1:true,
              },
              success: function(response){
                $('#status_exam_sub_marks_up_'+exam_code).html(response);
                // alert(response);

              }
            });


    });
  });


</script>



<script>

    $(document).ready(function(){
    $(document).on('click','.marks_details_up_all_btn', function(){

      var std_id = $(this).attr('id');

      var sub_code = $('#marks_sub_code_all_'+std_id).val();
      var student_id = $('#marks_std_id_all_'+std_id).val();
      var exam_code = $('#marks_ex_code_all_'+std_id).val();

      var cq = $('#written_sub_marks_all_'+std_id).val();
      var mcq = $('#mcq_sub_marks_all_'+std_id).val();


      $.ajax({
              url:'get_marks.php',
              type:'post',
              data: {
                this_id:std_id,
                sub_code:sub_code,
                exam_code:exam_code,
                student_id:student_id,
                cq:cq,
                mcq:mcq,
                update_marks_1:true,
              },
              success: function(response){
                $('#status_exam_sub_marks_up_all_'+sub_code).html(response);
                // $('.sub_marks_another'+sub_code).trigger('click');
                // alert(response);

              }
            });


    });
  });


</script>

<script>
    $(document).ready(function(){
	//bind enter key to click button
	$(document).keypress(function(e){
    	if (e.which == 13){
    		if($('#loginform').is(":visible")){
    			$("#loginbutton").click();
    		}
        	else if($('#signupform').is(":visible")){
        		$("#signupbutton").click();
        	}
    	}
	});

	$('#signup').click(function(){
		$('#loginform').slideUp();
		$('#signupform').slideDown();
		$('#myalert').slideUp();
		$('#signform')[0].reset();
	});

	$('#login').click(function(){
		$('#loginform').slideDown();
		$('#signupform').slideUp();
		$('#myalert').slideUp();
		$('#logform')[0].reset();
	});

	$(document).on('click', '#signupbutton', function(){
		if($('#susername').val()!='' && $('#spassword').val()!=''){
			$('#signtext').text('Signing up...');
			$('#myalert').slideUp();
			var signform = $('#signform').serialize();
			$.ajax({
				method: 'POST',
				url: '../proccess/class-proccess.php',
				data: signform,

				success:function(data){
					setTimeout(function(){
					$('#myalert').slideDown();
					$('#alerttext').html(data);
					$('#signtext').text('Sign up');
					$('#signform')[0].reset();
					}, 2000);
				}
			});
		}
		else{
			alert('Please input all fields to Sign Up');
		}
	});

	$(document).on('click', '#loginbutton', function(){
		if($('#username').val()!=''){
			$('#logtext').text('Logging in...');
			$('#myalert').slideUp();
			var logform = $('#logform').serialize();
			setTimeout(function(){
				$.ajax({
					method: 'POST',
					url: '../proccess/class-proccess.php',
					data: logform,
					success:function(data){
						if(data==1){
							$('#myalert').slideDown();
							$('#alerttext').text('Login Successful. User Verified!');
							$('#logtext').text('Thank You!');
							$('#logform')[0].reset();
							setTimeout(function(){
								location.reload();
							}, 2000);
						}
						else{
							$('#myalert').slideDown();
							$('#alerttext').html(data);
							$('#logtext').text('Try Again!');
							$('#logform')[0].reset();
						}
					}
				});
			}, 2000);
		}
		else{
			alert('Please input Phone fields to Login');
		}
	});
});
</script>
