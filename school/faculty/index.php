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
    <title>SecondHome</title>
    <link rel="stylesheet" href="../.././output/output.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lilita+One&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../../css/stylee.css">


<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>


<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="../../icon/bootstrap-icons.css">

        
        <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../jquery-3.4.1.js"></script>
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    <link rel="stylesheet" href="../../icon/bootstrap-icons.css">

    <!-- <script src="ck/ckeditor.js"></script> -->
    <!-- <script src="f/admin/ckeditor/ckeditor.js"></script> -->

    <!-- <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script> -->
    <script src="../../jquery-3.5.1.min.js"></script>
    <!-- swap -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- swap -->

    <link rel="stylesheet" href="../../bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <link rel="stylesheet" href="../../css/carousel_and_other.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/select-menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">


</head>
<body>



<!--  -->
<div id="navi-1" class="text-center hidden">
<div id="msg" class="msg" type="button" data-bs-toggle="modal" data-bs-target="#contactmsg">
    <div class="menu-main">
      <div class="menu-t"><i class="bi bi-house-fill bihousefill"></i></div>
      <li style="--i:0;" class="menuList0"> <a href="#"> <i id="moon" class="bi bi-moon"></i> </a> </li>
      <li style="--i:1;" class="menuList1"> <a href="#"> <i class="bi bi-calendar-event-fill"></i> </a> </li>
      <li style="--i:2;" class="menuList2" data-bs-toggle="modal" data-bs-target="#user_per_modal"> <a href="#"> <i class="bi bi-pencil-square"></i> </a> </li>
      <li style="--i:3;" class="menuList3"> <a href="#"> <i class="bi bi-person-lines-fill"></i> </a> </li>
      <li style="--i:4;" class="menuList4"> <a href="#"> <i class="bi bi-bag-plus-fill"></i> </a> </li>
      <li style="--i:5;" class="menuList5"> <a href="#"> <i class="bi bi-bag-check-fill"></i> </a> </li>
      <li style="--i:6;" class="menuList6"> <a href="#"> <i class="bi bi-cart4"></i> </a> </li>
    </div>
    <span id="notifications_counter" style="width:20px; height:30px; padding-left:1px; padding-top:2px; text-align: center" class="position-absolute top-0 text-center start-100 translate-middle badge rounded-circle bg-transparent"></span>
<span class="visually-hidden">U</span></span>
                            </div>
</div>

<div class="topheader fixed-bottom">
    <header class="tophead">
        <nav class="topnav">
            <a href="#main" class="btttnu-1"  id="HtmlBtn"><i class="bi bi-house-fill"><span class="topname">HOME</span> <i class="bi bi-share"></i></i></a>
            <a href="#user" class="btttnu-2"><i class="bi bi-activity"><span class="topname" >MESS</span></i></a>
            <a href="#others" class="btttnu-3"><i class="bi bi-three-dots"><span class="topname">ROUTINE</span></i></a>
            <a href="#signup" class="btttnu-4"><i class="bi bi-file-earmark-person-fill"><span class="topname">NOTE</span></i></a>
            <a href="#login" class="btttnu-5"><i class="bi bi-gear"><span class="topname">EDU </span> <i class="bi bi-person-circle"></i></i></a>

        </nav>
    </header>
</div>

<div class="main-wrapper">
            <div class="page-top">
                <div class="container-fluid">
                    <!-- navbar -->
                    <div class="navbar sticky-top">
                        <div class="navbar-l">
                            <a href="#" class="navbar-brand text-black md:hidden">SH</a>
                            <a href="#" class="navbar-brand text-black hidden md:block">SecondHome</a>
                            <ul class="nav-list text-black text-decoration-none m-auto -translate-x-full lg:translate-x-0 transition-default">
                                <button class="navbar-hide-btn" type="button">
                                    <img src="../../assets/icons/close-icon.svg" alt="">
                                </button>
                                <li class="nav-item schedule_btn">
                                    <a href="#" class="nav-link p-1 text-decoration-none text-black">SCHEDULE</a>
                                </li>
                                <li class="nav-item active mess_btn">
                                    <a href="#" class="nav-link p-1 text-black">MESS</a>
                                </li>
                                <li class="nav-item routine_btn">
                                    <a href="#" class="nav-link p-1 text-black">ROUTINE</a>
                                </li>
                                <li class="nav-item note_btn">
                                    <a href="#" class="nav-link p-1 text-black">NOTE</a>
                                </li>
                                <li class="nav-item edu_btn">
                                    <a href="#" class="nav-link p-1 text-black">EDU</a>
                                </li>
                            </ul>
                            <div class="navbar-show-btn" type="button">
                                <img src="../../assets/icons/menu-icon.svg" alt="">
                            </div>
                        </div>

                        <div class="navbar-r">
                            <div class="nav-icon-btns">
                                <button class="nav-icon-btn">
                                    <img src="../../assets/icons/search-icon.svg" alt="">
                                </button>
                                <button class="nav-icon-btn">
                                    <img src="../../assets/icons/grid-icon.svg" alt="">
                                </button>
                                <button class="nav-icon-btn">
                                    <img src="../../assets/icons/plus-icon.svg" alt="">
                                </button>
                                <button class="nav-icon-btn">
                                    <img src="../../assets/icons/folder-icon.svg" alt="">
                                </button>
                                <button class="nav-icon-btn">
                                    <img src="../../assets/icons/bell-icon.svg" alt="">
                                </button>
                            </div>

                            <button class="nav-profile-btn">
                                <div class="profile-btn-img">
                                    <img src="../../assets/images/avatar.jpg" alt="">
                                </div>
                                <img src="../../assets/icons/chevron-down.svg" alt="" class="profile-btn-icon">
                            </button>
                        </div>
                    </div>
                    <!-- end of navbar -->
                </div>
            </div>

            <div class="schedule_container hidden" id="schedule_container">

            
                <div class="schedule_home" id="schedule_home">
                        <div class="page-content">
                        <div class="container-fluid">

                            <div class="content-tab">
                                <div class="content-tab-head">
                                    <div class="tab-l">
                                        <!-- <ul class="tab-btns">
                                            <li class="tab-btn-item active">
                                                <button class="tab-btn-link" type="button">Overview</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Tasks</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Milestones</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Messages</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Files</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Time</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Comments</button>
                                            </li>
                                        </ul> -->

                                        <ul style="padding-left: 0;" class="hidden text-sm font-medium pl-0 mb-2 text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                                            <li class="w-full active:bg-amber-900">
                                                <a href="#" class="inline-block text-decoration-none user_btn w-full p-2 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">HOME</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block mess_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">BAZAR</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">FEE</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">MESS</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">PAYMENT</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">INBOX</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block w-full text-decoration-none teacher_btn p-2 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SETTINGS</a>
                                            </li>
                                            
                                        </ul>

                                        <div class="sm:hidden">
                                            <label for="tabs" class="sr-only">Select any setting option </label>
                                            <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="user" class="">HOME</option>
                                                <option value="mess">BAZAR</option>
                                                <option value="school">FEE</option>
                                                <option value="teacher">PAYMENT</option>
                                                <option value="teacher">MESS PROFILE</option>
                                                <option value="teacher">INBOX</option>
                                                <option value="teacher">SETTINGS</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="tab-r">
                                        <button class="tab-r-btn m-auto">
                                            <img src="../../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Full screens</span>
                                        </button>
                                        <button class="tab-r-btn ms-3 m-auto">
                                            <img src="../../assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Filters</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="content-tab-body">

                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="mess_container" id="mess_container">
            
                <div class="mess_home" id="mess_home">
                        <div class="page-content">
                        <div class="container-fluid">

                            <div class="content-tab">
                                <div class="content-tab-head">
                                    <div class="tab-l">
                                        <!-- <ul class="tab-btns">
                                            <li class="tab-btn-item active">
                                                <button class="tab-btn-link" type="button">Overview</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Tasks</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Milestones</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Messages</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Files</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Time</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Comments</button>
                                            </li>
                                        </ul> -->

                                        <ul style="padding-left: 0;" class="hidden text-sm font-medium pl-0 mb-2 text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                                            <li class="w-full active:bg-amber-900">
                                                <a href="#" class="inline-block text-decoration-none mess_home_btn w-full p-2 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">HOME</a>
                                            </li>
                                            <li class="w-full active">
                                                <a href="#" class="inline-block mess_bazar_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">BAZAR</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block mess_fee_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">FEE</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block mess_mess_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">MESS</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block mess_payment_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">PAYMENT</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block mess_inbox_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">INBOX</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block w-full text-decoration-none mess_setting_btn p-2 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SETTINGS</a>
                                            </li>
                                            
                                        </ul>

                                        <div class="sm:hidden">
                                            <label for="mess_tabs" class="sr-only">Select any setting option </label>
                                            <select id="mess_tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="home" class="">HOME</option>
                                                <option value="bazar">BAZAR</option>
                                                <option value="fee">FEE</option>
                                                <option value="payment">PAYMENT</option>
                                                <option value="mess">MESS PROFILE</option>
                                                <option value="inbox">INBOX</option>
                                                <option value="setting">SETTINGS</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="tab-r">
                                        <button class="tab-r-btn m-auto">
                                            <img src="../../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Full screens</span>
                                        </button>
                                        <button class="tab-r-btn ms-3 m-auto">
                                            <img src="../../assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Filters</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="content-tab-body">

                                    <div class="mess_home__space">

                                    </div>
                                    <div class="mess_fee_space">

                                    </div>
                                    <div class="mess_mess_space">

                                    </div>
                                    <div class="mess_inbox_space">

                                    </div>
                                    <div class="mess_bazar_space">

                                    </div>
                                    <div class="mess_payment_space">

                                    </div>
                                    <div class="mess_setting_space">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            
            <div class="routine_container hidden" id="routine_container">
            
                <div class="routine_home" id="routine_home">
                        <div class="page-content">
                        <div class="container-fluid">

                            <div class="content-tab">
                                <div class="content-tab-head">
                                    <div class="tab-l">
                                        <!-- <ul class="tab-btns">
                                            <li class="tab-btn-item active">
                                                <button class="tab-btn-link" type="button">Overview</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Tasks</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Milestones</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Messages</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Files</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Time</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Comments</button>
                                            </li>
                                        </ul> -->

                                        <ul style="padding-left: 0;" class="hidden text-sm font-medium pl-0 mb-2 text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                                            <li class="w-full active:bg-amber-900">
                                                <a href="#" class="inline-block text-decoration-none user_btn w-full p-2 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">HOME</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block mess_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">BAZAR</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">FEE</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">MESS</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">PAYMENT</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">INBOX</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block w-full text-decoration-none teacher_btn p-2 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SETTINGS</a>
                                            </li>
                                            
                                        </ul>

                                        <div class="sm:hidden">
                                            <label for="tabs" class="sr-only">Select any setting option </label>
                                            <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="user" class="">HOME</option>
                                                <option value="mess">BAZAR</option>
                                                <option value="school">FEE</option>
                                                <option value="teacher">PAYMENT</option>
                                                <option value="teacher">MESS PROFILE</option>
                                                <option value="teacher">INBOX</option>
                                                <option value="teacher">SETTINGS</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="tab-r">
                                        <button class="tab-r-btn m-auto">
                                            <img src="../../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Full screens</span>
                                        </button>
                                        <button class="tab-r-btn ms-3 m-auto">
                                            <img src="../../assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Filters</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="content-tab-body">

                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="note_container hidden" id="note_container">
               
            
                <div class="note_home" id="note_home">
                        <div class="page-content">
                        <div class="container-fluid">

                            <div class="content-tab">
                                <div class="content-tab-head">
                                    <div class="tab-l">
                                        <!-- <ul class="tab-btns">
                                            <li class="tab-btn-item active">
                                                <button class="tab-btn-link" type="button">Overview</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Tasks</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Milestones</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Messages</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Files</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Time</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Comments</button>
                                            </li>
                                        </ul> -->

                                        <ul style="padding-left: 0;" class="hidden text-sm font-medium pl-0 mb-2 text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                                            <li class="w-full active:bg-amber-900">
                                                <a href="#" class="inline-block text-decoration-none user_btn w-full p-2 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">HOME</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block mess_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">BAZAR</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">FEE</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">MESS</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">PAYMENT</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">INBOX</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block w-full text-decoration-none teacher_btn p-2 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SETTINGS</a>
                                            </li>
                                            
                                        </ul>

                                        <div class="sm:hidden">
                                            <label for="tabs" class="sr-only">Select any setting option </label>
                                            <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="user" class="">HOME</option>
                                                <option value="mess">BAZAR</option>
                                                <option value="school">FEE</option>
                                                <option value="teacher">PAYMENT</option>
                                                <option value="teacher">MESS PROFILE</option>
                                                <option value="teacher">INBOX</option>
                                                <option value="teacher">SETTINGS</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="tab-r">
                                        <button class="tab-r-btn m-auto">
                                            <img src="../../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Full screens</span>
                                        </button>
                                        <button class="tab-r-btn ms-3 m-auto">
                                            <img src="../../assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Filters</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="content-tab-body">

                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            
            </div>

            
            <div class="edu_container hidden" id="edu_container">

            
                <div class="edu_home" id="edu_home">
                        <div class="page-content">
                        <div class="container-fluid">

                            <div class="content-tab">
                                <div class="content-tab-head">
                                    <div class="tab-l">
                                        <!-- <ul class="tab-btns">
                                            <li class="tab-btn-item active">
                                                <button class="tab-btn-link" type="button">Overview</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Tasks</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Milestones</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Messages</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Files</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Time</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Comments</button>
                                            </li>
                                        </ul> -->

                                        <ul style="padding-left: 0;" class="hidden text-sm font-medium pl-0 mb-2 text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                                            <li class="w-full active:bg-amber-900">
                                                <a href="#" class="inline-block text-decoration-none user_btn w-full p-2 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">HOME</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block mess_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">BAZAR</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">FEE</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">MESS</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">PAYMENT</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">INBOX</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block w-full text-decoration-none teacher_btn p-2 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SETTINGS</a>
                                            </li>
                                            
                                        </ul>

                                        <div class="sm:hidden">
                                            <label for="tabs" class="sr-only">Select any setting option </label>
                                            <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="user" class="">HOME</option>
                                                <option value="mess">BAZAR</option>
                                                <option value="school">FEE</option>
                                                <option value="teacher">PAYMENT</option>
                                                <option value="teacher">MESS PROFILE</option>
                                                <option value="teacher">INBOX</option>
                                                <option value="teacher">SETTINGS</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="tab-r">
                                        <button class="tab-r-btn m-auto">
                                            <img src="../../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Full screens</span>
                                        </button>
                                        <button class="tab-r-btn ms-3 m-auto">
                                            <img src="../../assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Filters</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="content-tab-body">

                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="other_container hidden" id="other_container">
                
            
                <div class="other_home" id="other_home">
                        <div class="page-content">
                        <div class="container-fluid">

                            <div class="content-tab">
                                <div class="content-tab-head">
                                    <div class="tab-l">
                                        <!-- <ul class="tab-btns">
                                            <li class="tab-btn-item active">
                                                <button class="tab-btn-link" type="button">Overview</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Tasks</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Milestones</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Messages</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Files</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Time</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Comments</button>
                                            </li>
                                        </ul> -->

                                        <ul style="padding-left: 0;" class="hidden text-sm font-medium pl-0 mb-2 text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                                            <li class="w-full active:bg-amber-900">
                                                <a href="#" class="inline-block text-decoration-none user_btn w-full p-2 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">HOME</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block mess_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">BAZAR</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">FEE</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">MESS</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">PAYMENT</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">INBOX</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block w-full text-decoration-none teacher_btn p-2 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SETTINGS</a>
                                            </li>
                                            
                                        </ul>

                                        <div class="sm:hidden">
                                            <label for="tabs" class="sr-only">Select any setting option </label>
                                            <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="user" class="">HOME</option>
                                                <option value="mess">BAZAR</option>
                                                <option value="school">FEE</option>
                                                <option value="teacher">PAYMENT</option>
                                                <option value="teacher">MESS PROFILE</option>
                                                <option value="teacher">INBOX</option>
                                                <option value="teacher">SETTINGS</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="tab-r">
                                        <button class="tab-r-btn m-auto">
                                            <img src="../../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Full screens</span>
                                        </button>
                                        <button class="tab-r-btn ms-3 m-auto">
                                            <img src="../../assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Filters</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="content-tab-body">

                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="notice_container hidden" id="notice_container">
                
            
                <div class="notice_home" id="notice_home">
                        <div class="page-content">
                        <div class="container-fluid">

                            <div class="content-tab">
                                <div class="content-tab-head">
                                    <div class="tab-l">
                                        <!-- <ul class="tab-btns">
                                            <li class="tab-btn-item active">
                                                <button class="tab-btn-link" type="button">Overview</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Tasks</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Milestones</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Messages</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Files</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Time</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Comments</button>
                                            </li>
                                        </ul> -->

                                        <ul style="padding-left: 0;" class="hidden text-sm font-medium pl-0 mb-2 text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                                            <li class="w-full active:bg-amber-900">
                                                <a href="#" class="inline-block text-decoration-none user_btn w-full p-2 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">HOME</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block mess_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">BAZAR</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">FEE</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">MESS</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">PAYMENT</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">INBOX</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block w-full text-decoration-none teacher_btn p-2 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SETTINGS</a>
                                            </li>
                                            
                                        </ul>

                                        <div class="sm:hidden">
                                            <label for="tabs" class="sr-only">Select any setting option </label>
                                            <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="user" class="">HOME</option>
                                                <option value="mess">BAZAR</option>
                                                <option value="school">FEE</option>
                                                <option value="teacher">PAYMENT</option>
                                                <option value="teacher">MESS PROFILE</option>
                                                <option value="teacher">INBOX</option>
                                                <option value="teacher">SETTINGS</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="tab-r">
                                        <button class="tab-r-btn m-auto">
                                            <img src="../../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Full screens</span>
                                        </button>
                                        <button class="tab-r-btn ms-3 m-auto">
                                            <img src="../../assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Filters</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="content-tab-body">

                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="msg_container hidden" id="msg_container">
                
            
                <div class="msg_home" id="msg_home">
                        <div class="page-content">
                        <div class="container-fluid">

                            <div class="content-tab">
                                <div class="content-tab-head">
                                    <div class="tab-l">
                                        <!-- <ul class="tab-btns">
                                            <li class="tab-btn-item active">
                                                <button class="tab-btn-link" type="button">Overview</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Tasks</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Milestones</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Messages</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Files</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Time</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Comments</button>
                                            </li>
                                        </ul> -->

                                        <ul style="padding-left: 0;" class="hidden text-sm font-medium pl-0 mb-2 text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                                            <li class="w-full active:bg-amber-900">
                                                <a href="#" class="inline-block text-decoration-none user_btn w-full p-2 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">HOME</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block mess_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">BAZAR</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">FEE</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">MESS</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">PAYMENT</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">INBOX</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block w-full text-decoration-none teacher_btn p-2 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SETTINGS</a>
                                            </li>
                                            
                                        </ul>

                                        <div class="sm:hidden">
                                            <label for="tabs" class="sr-only">Select any setting option </label>
                                            <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="user" class="">HOME</option>
                                                <option value="mess">BAZAR</option>
                                                <option value="school">FEE</option>
                                                <option value="teacher">PAYMENT</option>
                                                <option value="teacher">MESS PROFILE</option>
                                                <option value="teacher">INBOX</option>
                                                <option value="teacher">SETTINGS</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="tab-r">
                                        <button class="tab-r-btn m-auto">
                                            <img src="../../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Full screens</span>
                                        </button>
                                        <button class="tab-r-btn ms-3 m-auto">
                                            <img src="../../assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Filters</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="content-tab-body">

                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
    
            <div class="workspace_container hidden" id="workspace_container">
                
            
                <div class="workspace_home" id="workspace_home">
                        <div class="page-content">
                        <div class="container-fluid">

                            <div class="content-tab">
                                <div class="content-tab-head">
                                    <div class="tab-l">
                                        <!-- <ul class="tab-btns">
                                            <li class="tab-btn-item active">
                                                <button class="tab-btn-link" type="button">Overview</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Tasks</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Milestones</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Messages</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Files</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Time</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Comments</button>
                                            </li>
                                        </ul> -->

                                        <ul style="padding-left: 0;" class="hidden text-sm font-medium pl-0 mb-2 text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                                            <li class="w-full active:bg-amber-900">
                                                <a href="#" class="inline-block text-decoration-none user_btn w-full p-2 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">HOME</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block mess_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">BAZAR</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">FEE</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">MESS</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">PAYMENT</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">INBOX</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block w-full text-decoration-none teacher_btn p-2 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SETTINGS</a>
                                            </li>
                                            
                                        </ul>

                                        <div class="sm:hidden">
                                            <label for="tabs" class="sr-only">Select any setting option </label>
                                            <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="user" class="">HOME</option>
                                                <option value="mess">BAZAR</option>
                                                <option value="school">FEE</option>
                                                <option value="teacher">PAYMENT</option>
                                                <option value="teacher">MESS PROFILE</option>
                                                <option value="teacher">INBOX</option>
                                                <option value="teacher">SETTINGS</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="tab-r">
                                        <button class="tab-r-btn m-auto">
                                            <img src="../../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Full screens</span>
                                        </button>
                                        <button class="tab-r-btn ms-3 m-auto">
                                            <img src="../../assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Filters</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="content-tab-body">

                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="task_container hidden" id="task_container">
                
            
                <div class="task_home" id="task_home">
                        <div class="page-content">
                        <div class="container-fluid">

                            <div class="content-tab">
                                <div class="content-tab-head">
                                    <div class="tab-l">
                                        <!-- <ul class="tab-btns">
                                            <li class="tab-btn-item active">
                                                <button class="tab-btn-link" type="button">Overview</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Tasks</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Milestones</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Messages</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Files</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Time</button>
                                            </li>
                                            <li class="tab-btn-item">
                                                <button class="tab-btn-link" type="button">Comments</button>
                                            </li>
                                        </ul> -->

                                        <ul style="padding-left: 0;" class="hidden text-sm font-medium pl-0 mb-2 text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                                            <li class="w-full active:bg-amber-900">
                                                <a href="#" class="inline-block text-decoration-none user_btn w-full p-2 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">HOME</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block mess_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">BAZAR</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">FEE</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">MESS</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">PAYMENT</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block school_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">INBOX</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block w-full text-decoration-none teacher_btn p-2 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SETTINGS</a>
                                            </li>
                                            
                                        </ul>

                                        <div class="sm:hidden">
                                            <label for="tabs" class="sr-only">Select any setting option </label>
                                            <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="user" class="">HOME</option>
                                                <option value="mess">BAZAR</option>
                                                <option value="school">FEE</option>
                                                <option value="teacher">PAYMENT</option>
                                                <option value="teacher">MESS PROFILE</option>
                                                <option value="teacher">INBOX</option>
                                                <option value="teacher">SETTINGS</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="tab-r">
                                        <button class="tab-r-btn m-auto">
                                            <img src="../../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Full screens</span>
                                        </button>
                                        <button class="tab-r-btn ms-3 m-auto">
                                            <img src="../../assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">Filters</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="content-tab-body">

                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>
                                    <div class="_space">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="page-content hidden">
                <div class="container-fluid">

                    <div class="content-tab">
                        <div class="content-tab-head">
                            <div class="tab-l">
                                <!-- <ul class="tab-btns">
                                    <li class="tab-btn-item active">
                                        <button class="tab-btn-link" type="button">Overview</button>
                                    </li>
                                    <li class="tab-btn-item">
                                        <button class="tab-btn-link" type="button">Tasks</button>
                                    </li>
                                    <li class="tab-btn-item">
                                        <button class="tab-btn-link" type="button">Milestones</button>
                                    </li>
                                    <li class="tab-btn-item">
                                        <button class="tab-btn-link" type="button">Messages</button>
                                    </li>
                                    <li class="tab-btn-item">
                                        <button class="tab-btn-link" type="button">Files</button>
                                    </li>
                                    <li class="tab-btn-item">
                                        <button class="tab-btn-link" type="button">Time</button>
                                    </li>
                                    <li class="tab-btn-item">
                                        <button class="tab-btn-link" type="button">Comments</button>
                                    </li>
                                </ul> -->

                                <ul class="hidden text-sm font-medium text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                                    <li class="w-full active:bg-amber-900">
                                        <a href="#" class="inline-block user_btn w-full p-4 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">User</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="#" class="inline-block mess_btn w-full p-4 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Mess</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="#" class="inline-block school_btn w-full p-4 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Organizer</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="#" class="inline-block w-full teacher_btn p-4 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Teacher</a>
                                    </li>
                                </ul>

                                <div class="sm:hidden">
                                    <label for="tabs" class="sr-only">Login OR Sign Up with </label>
                                    <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="user" class="">User</option>
                                        <option value="mess">Mess Admin</option>
                                        <option value="school">Class Organizer Admin</option>
                                        <option value="teacher">Teacher</option>
                                    </select>
                                </div>

                            </div>

                            <div class="tab-r">
                                <button class="tab-r-btn">
                                    <img src="../../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                    <span class="tab-r-btn-text">Full screens</span>
                                </button>
                                <button class="tab-r-btn ms-3">
                                    <img src="../../assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
                                    <span class="tab-r-btn-text">Filters</span>
                                </button>
                            </div>
                        </div>

                        <div class="content-tab-body">
                            <!-- ### tab block 1 ### -->
                            <div class="tab-body-block">
                                <div class="body-item-head">
                                    <h4 class="body-item-head-title">Research</h4>
                                    <button class="body-item-head-btn group">
                                        <img src="../../assets/icons/plus-icon-alt.svg" alt="" class="group-hover:invert">
                                    </button>
                                </div>
                                <!-- tab body list -->
                                <div class="tab-body-list">
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                </div>
                                <!-- end of tab body list -->
                            </div>
                            <!-- ### end of tab block 1 ### -->

                            <!-- ### tab block 2 ### -->
                            <div class="tab-body-block">
                                <div class="body-item-head">
                                    <h4 class="body-item-head-title">In Review</h4>
                                    <button class="body-item-head-btn group">
                                        <img src="../../assets/icons/plus-icon-alt.svg" alt="" class="group-hover:invert">
                                    </button>
                                </div>
                                <!-- tab body list -->
                                <div class="tab-body-list">
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                </div>
                                <!-- end of tab body list -->
                            </div>
                            <!-- ### end of tab block 2 ### -->

                            <!-- ### tab block 3 ### -->
                            <div class="tab-body-block">
                                <div class="body-item-head">
                                    <h4 class="body-item-head-title">Development</h4>
                                    <button class="body-item-head-btn group">
                                        <img src="../../assets/icons/plus-icon-alt.svg" alt="" class="group-hover:invert">
                                    </button>
                                </div>
                                <!-- tab body list -->
                                <div class="tab-body-list">
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                </div>
                                <!-- end of tab body list -->
                            </div>
                            <!-- ### end of tab block 3 ### -->

                            <!-- ### tab block 4 ### -->
                            <div class="tab-body-block">
                                <div class="body-item-head">
                                    <h4 class="body-item-head-title">Design</h4>
                                    <button class="body-item-head-btn group">
                                        <img src="../../assets/icons/plus-icon-alt.svg" alt="" class="group-hover:invert">
                                    </button>
                                </div>
                                <!-- tab body list -->
                                <div class="tab-body-list">
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                </div>
                                <!-- end of tab body list -->
                            </div>
                            <!-- ### end of tab block 4 ### -->
                        </div>
                    </div>
                </div>
            </div>


</div>


<div class="container bottom_menu m-auto">
    <?php
        include('../../menu.php');
    ?>
</div>

        <script src="../../dist/js/scripta.js"></script>
</body>
</html>

<script>
  const nav = document.querySelector(".topheader");
  let lastScrollY = window.scrollY;

  window.addEventListener("scroll", () => {

    if(lastScrollY < window.scrollY){
      nav.classList.add("nav-hidden");
      // console.log("we are going down");

    }else{
      nav.classList.remove("nav-hidden");
      // console.log("we are going up");
    }

    lastScrollY = window.scrollY;
  });


</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.schedule_btn').click(function(){
            $('.schedule_container').removeClass('hidden');
            $('.mess_container').addClass('hidden');
            $('.routine_container').addClass('hidden');
            $('.note_container').addClass('hidden');
            $('.edu_container').addClass('hidden');
            $('.schedule_btn').addClass('active');
            $('.mess_btn, .routine_btn, .note_btn, .edu_btn').removeClass('active');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.mess_btn').click(function(){
            $('.mess_container').removeClass('hidden');
            $('.schedule_container').addClass('hidden');
            $('.routine_container').addClass('hidden');
            $('.note_container').addClass('hidden');
            $('.edu_container').addClass('hidden');
            $('.mess_btn').addClass('active');
            $('.schedule_btn, .routine_btn, .note_btn, .edu_btn').removeClass('active');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.routine_btn').click(function(){
            $('.routine_container').removeClass('hidden');
            $('.mess_container').addClass('hidden');
            $('.schedule_container').addClass('hidden');
            $('.note_container').addClass('hidden');
            $('.edu_container').addClass('hidden');

            $('.routine_btn').addClass('active');
            $('.mess_btn, .schedule_btn, .note_btn, .edu_btn').removeClass('active');

        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.note_btn').click(function(){
            $('.note_container').removeClass('hidden');
            $('.mess_container').addClass('hidden');
            $('.routine_container').addClass('hidden');
            $('.schedule_container').addClass('hidden');
            $('.edu_container').addClass('hidden');

            $('.note_btn').addClass('active');
            $('.mess_btn, .schedule_btn, .routine_btn, .edu_btn').removeClass('active');

        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.edu_btn').click(function(){
            $('.edu_container').removeClass('hidden');
            $('.mess_container').addClass('hidden');
            $('.routine_container').addClass('hidden');
            $('.note_container').addClass('hidden');
            $('.schedule_container').addClass('hidden');

            $('.edu_btn').addClass('active');
            $('.mess_btn, .schedule_btn, .note_btn, .routine_btn').removeClass('active');

        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.mess_home_btn').click(function(){
            $('.mess_home_space').removeClass('hidden');
            $('.fee_mess_space, .bazar_mess_space, .inbox_mess_space, .setting_mess_space, .payment_mess_space, .mess_mess_space').addClass('hidden');
        });

        $('.mess_fee_btn').click(function(){
            $('.mess_fee_space').removeClass('hidden');
            $('.home_mess_space, .bazar_mess_space, .inbox_mess_space, .setting_mess_space, .payment_mess_space, .mess_mess_space').addClass('hidden');
        });
        $('.mess_mess_btn').click(function(){
            $('.mess_mess_space').removeClass('hidden');
            $('.fee_mess_space, .bazar_mess_space, .inbox_mess_space, .setting_mess_space, .payment_mess_space, .home_mess_space').addClass('hidden');
        });
        $('.mess_bazar_btn').click(function(){
            $('.mess_bazar_space').removeClass('hidden');
            $('.fee_mess_space, .home_mess_space, .inbox_mess_space, .setting_mess_space, .payment_mess_space, .mess_mess_space').addClass('hidden');
        });
        $('.mess_payment_btn').click(function(){
            $('.mess_payment_space').removeClass('hidden');
            $('.fee_mess_space, .bazar_mess_space, .inbox_mess_space, .setting_mess_space, .home_mess_space, .mess_mess_space').addClass('hidden');
        });
        $('.mess_inbox_btn').click(function(){
            $('.mess_inbox_space').removeClass('hidden');
            $('.fee_mess_space, .bazar_mess_space, .home_mess_space, .setting_mess_space, .payment_mess_space, .mess_mess_space').addClass('hidden');
        });
        $('.mess_setting_btn').click(function(){
            $('.mess_setting_space').removeClass('hidden');
            $('.fee_mess_space, .bazar_mess_space, .inbox_mess_space, .home_mess_space, .payment_mess_space, .mess_mess_space').addClass('hidden');
        });

    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.user_l_btn').click(function(){
            $('.user_login_box').removeClass('hidden');
            $('.user_create_box').addClass('hidden');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.mess_c_btn').click(function(){
            $('.mess_create_box').removeClass('hidden');
            $('.mess_login_box').addClass('hidden');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.mess_l_btn').click(function(){
            $('.mess_login_box').removeClass('hidden');
            $('.mess_create_box').addClass('hidden');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.school_c_btn').click(function(){
            $('.school_create_box').removeClass('hidden');
            $('.school_login_box').addClass('hidden');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.school_l_btn').click(function(){
            $('.school_login_box').removeClass('hidden');
            $('.school_create_box').addClass('hidden');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.teacher_c_btn').click(function(){
            $('.teacher_create_box').removeClass('hidden');
            $('.teacher_login_box').addClass('hidden');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.teacher_l_btn').click(function(){
            $('.teacher_login_box').removeClass('hidden');
            $('.teacher_create_box').addClass('hidden');
        });
    });
</script>
<script>
        $(document).ready(function(){
            $('#mess_tabs').click(function(){
                var op = $('#tabs').val();
                // alert('Selected Value: ' + op);
                if(op=='home'){
                    $('.mess_home_space').removeClass('hidden');
                    $('.fee_mess_space, .bazar_mess_space, .inbox_mess_space, .setting_mess_space, .payment_mess_space, .mess_mess_space').addClass('hidden');

                }else if(op=='mess'){
                    $('.mess_mess_space').removeClass('hidden');
                    $('.fee_mess_space, .bazar_mess_space, .inbox_mess_space, .setting_mess_space, .payment_mess_space, .home_mess_space').addClass('hidden');
                }else if(op=='bazar'){
                    $('.mess_bazar_space').removeClass('hidden');
                    $('.fee_mess_space, .home_mess_space, .inbox_mess_space, .setting_mess_space, .payment_mess_space, .mess_mess_space').addClass('hidden');
                }else if(op=='fee'){
                    $('.mess_fee_space').removeClass('hidden');
                    $('.home_mess_space, .bazar_mess_space, .inbox_mess_space, .setting_mess_space, .payment_mess_space, .mess_mess_space').addClass('hidden');
                }else if(op=='inbox'){
                    $('.mess_inbox_space').removeClass('hidden');
                    $('.fee_mess_space, .bazar_mess_space, .home_mess_space, .setting_mess_space, .payment_mess_space, .mess_mess_space').addClass('hidden');
                }else if(op=='payment'){
                    $('.mess_payment_space').removeClass('hidden');
                    $('.fee_mess_space, .bazar_mess_space, .inbox_mess_space, .setting_mess_space, .home_mess_space, .mess_mess_space').addClass('hidden');
                }else if(op=='setting'){
                    $('.mess_setting_space').removeClass('hidden');
                    $('.fee_mess_space, .bazar_mess_space, .inbox_mess_space, .home_mess_space, .payment_mess_space, .mess_mess_space').addClass('hidden');
                }

            });
        });
    </script>