<?php
include('../../db/db.php');
session_start();

if(isset($_SESSION['user'])){
   $_SESSION['visitor_id']=$_SESSION['user'];
   $_SESSION['unique_id']=$_SESSION['user'];

   if(!isset($_SESSION['role'])){
        header("location:../../login");
   }else{
        if($_SESSION['role']=='teacher'){
            header("location:../../school/faculty");
        }elseif($_SESSION['role']=='mess'){
            header("location:../mess");
        }elseif($_SESSION['role']=='user'){
            header("location:../../");
        }elseif($_SESSION['role']=='manager'){
            header("location:../../");
        }
   }

    if($_SESSION['school_id']==''){
        header("location:sign");
    }else{
        $s_id = $_SESSION['school_id'];
        $mess_id = $_SESSION['mess_id'];
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
        <link rel="stylesheet" href="../../css/table.css">


<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<!-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" /> -->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script> -->

<link rel="stylesheet" href="node_modules/tw-elements/dist/css/index.min.css" />
<!-- <script src="node_modules/tw-elements/dist/js/index.min.js"></script> -->
<script src="node_modules/flowbite/dist/flowbite.js"></script>


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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/select-menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


<style>

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
        .nav-tabs-scroll {
            display: flex;
            overflow-x: auto;
            white-space: nowrap;
        }

        .nav-link {
            min-width: 80px;
            text-align: center;
        }
        
/* start: Category */
.category-section {
    border-bottom: 1px solid var(--gray-300);
}
.category-wrapper {
    position: relative;
}
.category-arrow {
    position: absolute;
    top: 0;
    width: 48px;
    height: 100%;
    border: none;
    background-color: transparent;
    cursor: pointer;
}
.category-arrow.hidden {
    display: none;
}
.category-arrow.prev {
    left: 0;
    background-image: linear-gradient(90deg, var(--white) 60%, transparent);
}
.category-arrow.next {
    right: 0;
    background-image: linear-gradient(-90deg, var(--white) 60%, transparent);
}
.category-link {
    display: flex;
    align-items: center;
    overflow-x: auto;
    scrollbar-width: none;
    scroll-behavior: smooth;
    scroll-snap-type: x mandatory;
    scroll-padding: 48px;
}
.category-link::-webkit-scrollbar {
    display: none;
}
.category-link > a {
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    color: var(--black);
    white-space: nowrap;
    padding: 3px 0px;
    scroll-snap-align: start;
    transition: all .2s;
}
.category-link > a:hover {
    box-shadow: inset 0 -2px 0 0 var(--blue-500);
    color: var(--blue-600);
}
.category-link > a:not(:last-child) {
    margin-right: 15px;
}
/* end: Category */
    </style>
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
            <a href="#main" class="btttnu-1"  id="HtmlBtn"><i class="bi bi-house-fill"><span class="topname">SCHEDULE</span> <i class="bi bi-share"></i></i></a>
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
                                <li class="nav-item active schedule_btn">
                                    <a href="#" class="nav-link p-1 text-decoration-none text-black">SCHEDULE</a>
                                </li>
                                <li class="nav-item activee mess_btn">
                                    <a href="#" class="nav-link p-1 text-black">MESS</a>
                                </li>
                                <li class="nav-item routine_btn">
                                    <a href="#" class="nav-link p-1 text-black">ROUTINE</a>
                                </li>
                                <li class="nav-item note_btn">
                                    <a href="#" class="nav-link p-1 text-black">ADMISSION</a>
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
    <div id="myalert_l" style="display:none;">
            <div class="container col-md-offset-4">
            <div class="alert alert-info">
                <center><span id="alerttext_l"></span></center>
            </div>
            </div>
    </div>

    <div class="container-fluid routine_schedule_table" id="routine_schedule_table bg-blue-100">
    <div class="popup-routine_schedule text-center hidden">
        <div class="content-routine_schedule text-center border-pink-300 border-2 shadow-lg  rounded-lg bg-white-100 p-2">
                <div class="back"><button type="button" class="routine_schedule_back_btn float-end text-3xl font-medium ml-5 text-pink-600"><i class="bi bi-arrow-left-circle-fill"></i></button></div>
                <div class="main_routine_schedule_body pt-2">

                  <div class="containerr routine_schedule text-center pt-1" id="routine_schedule">
                      <div class="routine_schedule_dis">




<div class="rounded-lg form-control shadow-lg bg-white">

<div class="" id="routine_schedules_data">
<h5 class="text-center" >Please Wait to Load Routine Scheduls</h5>

<!-- <div class="container-fluid">

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

</div> -->

</div>

    <div id="myalert_routine_schedules" style="display:none;">
        <div class="container col-md-offset-4">
            <div class="alert alert-info">
                <center><span id="alerttext_routine_schedules"></span></center>
            </div>
        </div>
    </div>

</div>




                      </div>
                  </div>

                </div>
        </div>      
    </div>            
    </div>    

            <div class="schedule_container hiddenn" id="schedule_container">

            
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

            <div class="mess_container hidden" id="mess_container">
            
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
                                                <a href="#" class="inline-block text-decoration-none home_routine_btn w-full p-2 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">HOME</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block exam_routine_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">EXAM</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block class_routine_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">CLASS/SEMESTER</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block session_routine_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SESSION</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block room_routine_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">ROOM</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block column_routine_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">COLUMN</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block w-full text-decoration-none faculty_routine_btn p-2 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">FACULTY</a>
                                            </li>
                                            
                                        </ul>

                                        <div class="sm:hidden">
                                            <label for="routine_tabs" class="sr-only">Select any Routine option </label>
                                            <select id="routine_tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="home" class="">HOME</option>
                                                <option value="exam">EXAM</option>
                                                <option value="class">CLASS</option>
                                                <option value="session">SESSION</option>
                                                <option value="room">ROOM</option>
                                                <option value="column">COLUMN</option>
                                                <option value="faculty">FACULTY</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="tab-r">
                                        <button class="tab-r-btn m-auto my_routine_btn">
                                            <img src="../../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">MY ROUTINE</span>
                                        </button>
                                        <button class="tab-r-btn ms-3 m-auto edu_routine_btn">
                                            <img src="../../assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
                                            <span class="tab-r-btn-text">eDU ROUTINE</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="content-tab-body">

                                    <div class="home_routine_space">

                                    <div class="container-fluid">

<div class="row">
    <div class="text-center m-auto">
        <h5><center>Routine List(User)</center></h5>
    </div>
    <div class="row">
        <div class="col-6">
            <button class="btn btn-warning new_routin_download_btn" data-bs-toggle="modal" data-bs-target="#my_modal_routine_download" data-bs-whatever="@mdo">
                DOWNLOAD
            </button>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-warning new_routine_btn" data-bs-toggle="modal" data-bs-target="#my_modal_routine" data-bs-whatever="@mdo">
                New
            </button>
        </div>
    </div>
    <div class="col-md-8">
        <div class="accordion">
        <div class="accordion-item">
                <h2 style="font-size:15px" class="accordion-button" data-bs-target="#routines_table" data-bs-toggle="collapse">Routines</h2>
                <div class="others_fees_list_hhh"></div>
                <div id="routines_table" class="accordion-collapse collapse:visible visibility: visible show">
                    <div class="accordion-body">

                        <div class="lottery_candidate">
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
                                                Session
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Routine Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Routine Code
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Routine Number
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="routine_data_row">
                                        <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Apple MacBook Pro 17"
                                            </th>
                                            <td class="px-6 py-4">
                                                Silver
                                            </td>
                                            <td class="px-6 py-4">
                                                Laptop
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                $2999
                                            </td>
                                            <td class="flex items-center px-6 py-4">
                                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                            </td>
                                        </tr> -->

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
    <div class="col-md-4">
        
        <div class="row">
            <div class="accordion">
            <div class="accordion-item">
                    <h2 style="font-size:15px" class="accordion-button" data-bs-target="#lotery_system3" data-bs-toggle="collapse">System</h2>
                    
                    <div id="lotery_system3" class="accordion-collapse collapse:visible visibility: visible show">
                        <div class="accordion-body text-dark">
                        <form action="#" role="form" id="_form_data">
                            <div class="container-fluidd">
                            <div class="row" id="_session_selection2">
                                <div class="col-md-6">
                                    <div class="sm:hiddenn" id="_class_session_div2">
                                        <label for="_class_session_d2" class="sr-only">Select a Class</label>
                                        <select id="_class_session_d2" name="_class_session2" class="_class_session bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#class2" role="tabClass2">

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="sm:hiddenn" id="select_session_div2">
                                        <label for="_session_d2" class="sr-only">Select a Session</label>
                                            <select id="_session_d2" name="select_session2" class="select_session2 bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#session2" role="tabSession2">
                                            </select>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="form-floating pt-1">
                                <input type="number" class="input-1 form-control bg-info form-floating" placeholder="Please Enter Number Of Selection" name="selection_male" id="selection_male">
                                <label class="" for="">Selection Number of Male</label>
                            </div>
                            <div class="form-floating">
                                <input type="number" class="input-1 form-control bg-info form-floating" placeholder="Please Enter Number Of Selection" name="selection_female" id="selection_female">
                                <label class="" for="">Selection Number of Female</label>
                            </div>
                            <div class="form-floating">
                                <input type="number" class="input-1 form-control bg-warning form-floating" placeholder="Please Enter Number Of Selection" name="waiting_male" id="waiting_male">
                                <label class="" for="">Waiting Number of Male</label>
                            </div>
                            <div class="form-floating">
                                <input type="number" class="input-1 form-control bg-warning form-floating" placeholder="Please Enter Number Of Selection" id="waiting_female" name="waiting_female">
                                <label class="" for="">Witing Number of Female</label>
                            </div>
                            <div class="text-center m-auto">
                                <button
                                type="button"
                                class="inline-block _check_result_btn rounded-full border-2 border-info px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-info transition duration-150 ease-in-out hover:border-info-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-info-600 focus:border-info-600 focus:text-info-600 focus:outline-none focus:ring-0 active:border-info-700 active:text-info-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                data-te-ripple-init>
                                Check Result
                                </button>
                                <input type="hidden" name="lottery_submit_form_data">
                                <button
                                type="button"
                                class="inline-block lottery_submit_btn mt-1 m-auto rounded-full bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" id="_submit_btn">
                                Submit
                                </button>
                            </div>

                        </form>



                        </div>
                    </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="accordion">
            <div class="accordion-item">
                    <h2 style="font-size:15px" class="accordion-button" data-bs-target="#lotery_system22" data-bs-toggle="collapse">Remarks Key</h2>
                    
                    <div id="lotery_system22" class="accordion-collapse collapse:visible visibility: visible show">
                        <div class="accordion-body text-dark">
                        <form action="#" role="form" id="_form_data2">
                            <div class="container-fluidd">
                            <div class="row" id="class_">
                                <div class="col-md-6">
                                    <div class="sm:hiddenn" id="_session_div22">
                                        <label for="_session_d22" class="sr-only">Select a Class</label>
                                        <select id="_session_d22" name="select_class_session22" class="_session bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#class2" role="tabClass2">

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="sm:hiddenn" id="_session_div22">
                                        <label for="_session_d22" class="sr-only">Select a Session</label>
                                            <select id="_session_d22" name="select_session22" class="_session2 bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#session2" role="tabSession2">

                                                <option value="0" selected disabled>Select Remark Key</option>

                                            </select>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="form-floating pt-1">
                                <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" name="selection_remark" id="selection_remarkd">
                                <label class="" for="">Selection Number of Remark Key</label>
                            </div>
                            <div class="form-floating pt-1">
                                <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" name="selection_male" id="selection_male2">
                                <label class="" for="">Selection Number of Male</label>
                            </div>
                            <div class="form-floating">
                                <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" name="selection_female" id="selection_female2">
                                <label class="" for="">Selection Number of Female</label>
                            </div>
                            <div class="form-floating">
                                <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" name="waiting_male" id="waiting_male2">
                                <label class="" for="">Waiting Number of Male</label>
                            </div>
                            <div class="form-floating">
                                <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" id="waiting_female2" name="waiting_female">
                                <label class="" for="">Witing Number of Female</label>
                            </div>
                            <div class="text-center m-auto">
                                <button
                                type="button"
                                class="inline-block _check_result_btn2 rounded-full border-2 border-info px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-info transition duration-150 ease-in-out hover:border-info-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-info-600 focus:border-info-600 focus:text-info-600 focus:outline-none focus:ring-0 active:border-info-700 active:text-info-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                data-te-ripple-init>
                                Check Result
                                </button>
                                <input type="hidden" name="lottery_submit_form_data2">
                                <button
                                type="button"
                                class="inline-block _submit_btn2 mt-1 m-auto rounded-full bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" id="_submit_btn2">
                                Submit
                                </button>
                            </div>

                        </form>



                        </div>
                    </div>
            </div>
            </div>
        </div>

    </div>
</div>
<div class="row">

</div>

                                    </div>

                                    </div>
                                    <div class="home_edu_routine_space hidden">

                                    <div class="container-fluid">

                                    <div class="row">
                                    <div class="text-center m-auto">
                                    <h5><center>School Routine List(School)</center></h5>
                                    </div>
                                    <div class="row">
                                    <div class="col-6">
                                    <button class="btn btn-warning new_edu_routine_download_btn" data-bs-toggle="modal" data-bs-target="#my_modal_routine_download_edu" data-bs-whatever="@mdo">
                                        DOWNLOAD
                                    </button>                                    
                                    </div>
                                    <div class="col-6 text-end">
                                    <button class="btn btn-warning new_edu_routine_btn" data-bs-toggle="modal" data-bs-target="#my_modal_routine_edu" data-bs-whatever="@mdo">
                                    New
                                    </button>
                                    </div>
                                    </div>
                                    <div class="col-md-8">
                                    <div class="accordion">
                                    <div class="accordion-item">
                                    <h2 style="font-size:15px" class="accordion-button" data-bs-target="#routines_table_edu" data-bs-toggle="collapse">Routines</h2>
                                    <div class="others_fees_list_hhh"></div>
                                    <div id="routines_table_edu" class="accordion-collapse collapse:visible visibility: visible show">
                                    <div class="accordion-body">

                                    <div class="lottery_candidate_edu">
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
                                        Session
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Routine Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Routine Code
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Routine Number
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                    </tr>
                                    </thead>
                                    <tbody id="routine_edu_data_row">
                                    <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                    <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">
                                    Silver
                                    </td>
                                    <td class="px-6 py-4">
                                    Laptop
                                    </td>
                                    <td class="px-6 py-4">
                                    Yes
                                    </td>
                                    <td class="px-6 py-4">
                                    Yes
                                    </td>
                                    <td class="px-6 py-4">
                                    $2999
                                    </td>
                                    <td class="flex items-center px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                    </td>
                                    </tr> -->

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
                                    <div class="col-md-4">

                                    <div class="row">
                                    <div class="accordion">
                                    <div class="accordion-item">
                                    <h2 style="font-size:15px" class="accordion-button" data-bs-target="#lotery_system3edu" data-bs-toggle="collapse">System</h2>

                                    <div id="lotery_system3edu" class="accordion-collapse collapse:visible visibility: visible show">
                                    <div class="accordion-body text-dark">
                                    <form action="#" role="form" id="_form_data">
                                    <div class="container-fluidd">
                                    <div class="row" id="_session_selection2">
                                    <div class="col-md-6">
                                    <div class="sm:hiddenn" id="_class_session_div2">
                                    <label for="_class_session_d2" class="sr-only">Select a Class</label>
                                    <select id="_class_session_d2" name="_class_session2" class="_class_session bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#class2" role="tabClass2">

                                    </select>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="sm:hiddenn" id="select_session_div2">
                                    <label for="_session_d2" class="sr-only">Select a Session</label>
                                    <select id="_session_d2" name="select_session2" class="select_session2 bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#session2" role="tabSession2">
                                    </select>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="form-floating pt-1">
                                    <input type="number" class="input-1 form-control bg-info form-floating" placeholder="Please Enter Number Of Selection" name="selection_male" id="selection_male">
                                    <label class="" for="">Selection Number of Male</label>
                                    </div>
                                    <div class="form-floating">
                                    <input type="number" class="input-1 form-control bg-info form-floating" placeholder="Please Enter Number Of Selection" name="selection_female" id="selection_female">
                                    <label class="" for="">Selection Number of Female</label>
                                    </div>
                                    <div class="form-floating">
                                    <input type="number" class="input-1 form-control bg-warning form-floating" placeholder="Please Enter Number Of Selection" name="waiting_male" id="waiting_male">
                                    <label class="" for="">Waiting Number of Male</label>
                                    </div>
                                    <div class="form-floating">
                                    <input type="number" class="input-1 form-control bg-warning form-floating" placeholder="Please Enter Number Of Selection" id="waiting_female" name="waiting_female">
                                    <label class="" for="">Witing Number of Female</label>
                                    </div>
                                    <div class="text-center m-auto">
                                    <button
                                    type="button"
                                    class="inline-block _check_result_btn rounded-full border-2 border-info px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-info transition duration-150 ease-in-out hover:border-info-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-info-600 focus:border-info-600 focus:text-info-600 focus:outline-none focus:ring-0 active:border-info-700 active:text-info-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                    data-te-ripple-init>
                                    Check Result
                                    </button>
                                    <input type="hidden" name="lottery_submit_form_data">
                                    <button
                                    type="button"
                                    class="inline-block lottery_submit_btn mt-1 m-auto rounded-full bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" id="_submit_btn">
                                    Submit
                                    </button>
                                    </div>

                                    </form>



                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="accordion">
                                    <div class="accordion-item">
                                    <h2 style="font-size:15px" class="accordion-button" data-bs-target="#lotery_system22edu" data-bs-toggle="collapse">Remarks Key</h2>

                                    <div id="lotery_system22edu" class="accordion-collapse collapse:visible visibility: visible show">
                                    <div class="accordion-body text-dark">
                                    <form action="#" role="form" id="_form_data2">
                                    <div class="container-fluidd">
                                    <div class="row" id="class_">
                                    <div class="col-md-6">
                                    <div class="sm:hiddenn" id="_session_div22">
                                    <label for="_session_d22" class="sr-only">Select a Class</label>
                                    <select id="_session_d22" name="select_class_session22" class="_session bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#class2" role="tabClass2">

                                    </select>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="sm:hiddenn" id="_session_div22">
                                    <label for="_session_d22" class="sr-only">Select a Session</label>
                                    <select id="_session_d22" name="select_session22" class="_session2 bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#session2" role="tabSession2">

                                    <option value="0" selected disabled>Select Remark Key</option>

                                    </select>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="form-floating pt-1">
                                    <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" name="selection_remark" id="selection_remarkd">
                                    <label class="" for="">Selection Number of Remark Key</label>
                                    </div>
                                    <div class="form-floating pt-1">
                                    <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" name="selection_male" id="selection_male2">
                                    <label class="" for="">Selection Number of Male</label>
                                    </div>
                                    <div class="form-floating">
                                    <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" name="selection_female" id="selection_female2">
                                    <label class="" for="">Selection Number of Female</label>
                                    </div>
                                    <div class="form-floating">
                                    <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" name="waiting_male" id="waiting_male2">
                                    <label class="" for="">Waiting Number of Male</label>
                                    </div>
                                    <div class="form-floating">
                                    <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" id="waiting_female2" name="waiting_female">
                                    <label class="" for="">Witing Number of Female</label>
                                    </div>
                                    <div class="text-center m-auto">
                                    <button
                                    type="button"
                                    class="inline-block _check_result_btn2 rounded-full border-2 border-info px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-info transition duration-150 ease-in-out hover:border-info-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-info-600 focus:border-info-600 focus:text-info-600 focus:outline-none focus:ring-0 active:border-info-700 active:text-info-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                    data-te-ripple-init>
                                    Check Result
                                    </button>
                                    <input type="hidden" name="lottery_submit_form_data2">
                                    <button
                                    type="button"
                                    class="inline-block _submit_btn2 mt-1 m-auto rounded-full bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" id="_submit_btn2">
                                    Submit
                                    </button>
                                    </div>

                                    </form>



                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>

                                    </div>
                                    </div>
                                    <div class="row">

                                    </div>

                                    </div>

                                    </div>
                                    <div class="exam_routine_space hidden">

                                    <div class="container-fluid">

<div class="row">
    <div class="text-center m-auto">
        <h5><center>Routine List(Exam)</center></h5>
    </div>
    <div class="row">
        <div class="col-6">
            <button class="btn btn-warning new_exam_routin_download_btn" data-bs-toggle="modal" data-bs-target="#my_modal_exam_routine_download" data-bs-whatever="@mdo">
                DOWNLOAD
            </button>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-warning new_exam_routine_btn" data-bs-toggle="modal" data-bs-target="#my_modal_exam_routine" data-bs-whatever="@mdo">
                New
            </button>
        </div>
    </div>
    <div class="col-md-8">
        <div class="accordion">
        <div class="accordion-item">
                <h2 style="font-size:15px" class="accordion-button" data-bs-target="#routines_tablee" data-bs-toggle="collapse">Routines</h2>
                <div class="others_fees_list_hhh"></div>
                <div id="routines_tablee" class="accordion-collapse collapse:visible visibility: visible show">
                    <div class="accordion-body">

                        <div class="lottery_candidate">
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
                                                Session
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Routine Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Routine Code
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Routine Number
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="exam_routine_data_row">
                                        <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Apple MacBook Pro 17"
                                            </th>
                                            <td class="px-6 py-4">
                                                Silver
                                            </td>
                                            <td class="px-6 py-4">
                                                Laptop
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                $2999
                                            </td>
                                            <td class="flex items-center px-6 py-4">
                                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                            </td>
                                        </tr> -->

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
    <div class="col-md-4">
        
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
<div class="row">

</div>

                                    </div>

                                    </div>
                                    <div class="class_routine_space hidden">

                                    <div class="container-fluid">

<div class="row">
    <div class="text-center m-auto">
        <h5><center>Routine List(Template)</center></h5>
    </div>
    <div class="row">
        <div class="col-6">
            <button class="btn btn-warning new_routin_download_btn" data-bs-toggle="modal" data-bs-target="#my_modal" data-bs-whatever="@mdo">
                DOWNLOAD
            </button>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-warning new_routine_btn" data-bs-toggle="modal" data-bs-target="#my_modal" data-bs-whatever="@mdo">
                New
            </button>
        </div>
    </div>
    <div class="col-md-8">
        <div class="accordion">
        <div class="accordion-item">
                <h2 style="font-size:15px" class="accordion-button" data-bs-target="#routines_tablee" data-bs-toggle="collapse">Routines</h2>
                <div class="others_fees_list_hhh"></div>
                <div id="routines_tablee" class="accordion-collapse collapse:visible visibility: visible show">
                    <div class="accordion-body">

                        <div class="lottery_candidate">
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
                                                Class Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Day|Evening
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Programme
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Class Code
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Sections
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="classes_data_row_routine">
                                        <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Apple MacBook Pro 17"
                                            </th>
                                            <td class="px-6 py-4">
                                                Silver
                                            </td>
                                            <td class="px-6 py-4">
                                                Laptop
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                $2999
                                            </td>
                                            <td class="flex items-center px-6 py-4">
                                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                            </td>
                                        </tr> -->

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
    <div class="col-md-4">
        
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
<div class="row">

</div>

                                    </div>

                                    </div>
                                    <div class="session_routine_space hidden">

                                    <div class="container-fluid">

<div class="row">
    <div class="text-center m-auto">
        <h5><center>Routine List(Template)</center></h5>
    </div>
    <div class="row">
        <div class="col-6">
            <button class="btn btn-warning new_routin_download_btn" data-bs-toggle="modal" data-bs-target="#my_modal" data-bs-whatever="@mdo">
                DOWNLOAD
            </button>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-warning new_routine_btn" data-bs-toggle="modal" data-bs-target="#my_modal" data-bs-whatever="@mdo">
                New
            </button>
        </div>
    </div>
    <div class="col-md-8">
        <div class="accordion">
        <div class="accordion-item">
                <h2 style="font-size:15px" class="accordion-button" data-bs-target="#routines_tablee" data-bs-toggle="collapse">Routines</h2>
                <div class="others_fees_list_hhh"></div>
                <div id="routines_tablee" class="accordion-collapse collapse:visible visibility: visible show">
                    <div class="accordion-body">

                        <div class="lottery_candidate">
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
                                                Session
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                From
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                End
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="session_data_row_routine">
                                        <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Apple MacBook Pro 17"
                                            </th>
                                            <td class="px-6 py-4">
                                                Silver
                                            </td>
                                            <td class="px-6 py-4">
                                                Laptop
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                $2999
                                            </td>
                                            <td class="flex items-center px-6 py-4">
                                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                            </td>
                                        </tr> -->

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
    <div class="col-md-4">
        
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
<div class="row">

</div>

                                    </div>

                                    </div>
                                    <div class="room_routine_space hidden">

                                    <div class="container-fluid">

<div class="row">
    <div class="text-center m-auto">
        <h5><center>Room List</center></h5>
    </div>
    <div class="row">
        <div class="col-6">
            <button class="btn btn-warning new_routin_download_btn" data-bs-toggle="modal" data-bs-target="#my_modal_room" data-bs-whatever="@mdo">
                DOWNLOAD
            </button>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-warning new_room_btn" data-bs-toggle="modal" data-bs-target="#my_modal_room" data-bs-whatever="@mdo">
                New
            </button>
        </div>
    </div>
    <div class="col-md-8">
        <div class="accordion">
        <div class="accordion-item">
                <h2 style="font-size:15px" class="accordion-button" data-bs-target="#routines_tablee" data-bs-toggle="collapse">Room</h2>
                <div class="others_fees_list_hhh"></div>
                <div id="routines_tablee" class="accordion-collapse collapse:visible visibility: visible show">
                    <div class="accordion-body">

                        <div class="lottery_candidate">
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
                                                Room Code
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Campus
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Invisilator
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="room_data_row">
                                        <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Apple MacBook Pro 17"
                                            </th>
                                            <td class="px-6 py-4">
                                                Silver
                                            </td>
                                            <td class="px-6 py-4">
                                                Laptop
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                $2999
                                            </td>
                                            <td class="flex items-center px-6 py-4">
                                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                            </td>
                                        </tr> -->

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
    <div class="col-md-4">
        
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
<div class="row">

</div>

                                    </div>

                                    </div>
                                    <div class="column_routine_space hidden">

                                    <div class="container-fluid">

<div class="row">
    <div class="text-center m-auto">
        <h5><center>Routine List(Template)</center></h5>
    </div>
    <div class="row">
        <div class="col-6">
            <button class="btn btn-warning new_routin_download_btn" data-bs-toggle="modal" data-bs-target="#my_modal" data-bs-whatever="@mdo">
                DOWNLOAD
            </button>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-warning new_routine_btn" data-bs-toggle="modal" data-bs-target="#my_modal" data-bs-whatever="@mdo">
                New
            </button>
        </div>
    </div>
    <div class="col-md-8">
        <div class="accordion">
        <div class="accordion-item">
                <h2 style="font-size:15px" class="accordion-button" data-bs-target="#routines_tablee" data-bs-toggle="collapse">Routines</h2>
                <div class="others_fees_list_hhh"></div>
                <div id="routines_tablee" class="accordion-collapse collapse:visible visibility: visible show">
                    <div class="accordion-body">

                        <div class="lottery_candidate">
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
                                        <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Apple MacBook Pro 17"
                                            </th>
                                            <td class="px-6 py-4">
                                                Silver
                                            </td>
                                            <td class="px-6 py-4">
                                                Laptop
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                $2999
                                            </td>
                                            <td class="flex items-center px-6 py-4">
                                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                            </td>
                                        </tr> -->

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
    <div class="col-md-4">
        
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
<div class="row">

</div>

                                    </div>

                                    </div>
                                    <div class="faculty_routine_space hidden">

                                    <div class="container-fluid">

<div class="row">
    <div class="text-center m-auto">
        <h5><center>Routine List(Template)</center></h5>
    </div>
    <div class="row">
        <div class="col-6">
            <button class="btn btn-warning new_routin_download_btn" data-bs-toggle="modal" data-bs-target="#my_modal" data-bs-whatever="@mdo">
                DOWNLOAD
            </button>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-warning new_routine_btn" data-bs-toggle="modal" data-bs-target="#my_modal" data-bs-whatever="@mdo">
                New
            </button>
        </div>
    </div>
    <div class="col-md-8">
        <div class="accordion">
        <div class="accordion-item">
                <h2 style="font-size:15px" class="accordion-button" data-bs-target="#routines_tablee" data-bs-toggle="collapse">Routines</h2>
                <div class="others_fees_list_hhh"></div>
                <div id="routines_tablee" class="accordion-collapse collapse:visible visibility: visible show">
                    <div class="accordion-body">

                        <div class="lottery_candidate">
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
                                        <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Apple MacBook Pro 17"
                                            </th>
                                            <td class="px-6 py-4">
                                                Silver
                                            </td>
                                            <td class="px-6 py-4">
                                                Laptop
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                Yes
                                            </td>
                                            <td class="px-6 py-4">
                                                $2999
                                            </td>
                                            <td class="flex items-center px-6 py-4">
                                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                            </td>
                                        </tr> -->

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
    <div class="col-md-4">
        
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
<div class="row">

</div>

                                    </div>

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
                                                <a href="#" class="inline-block text-decoration-none home_admission_btn w-full p-2 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">HOME</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block candidate_admission_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">CANDIDATE</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block fee_admission_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">FEE</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block class_admission_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">CLASS</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block session_admission_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SESSION</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block selected_admission_btn text-decoration-none w-full p-2 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SELECTED</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" class="inline-block w-full text-decoration-none setting_admission_btn p-2 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">SETTINGS</a>
                                            </li>
                                            
                                        </ul>

                                        <div class="sm:hidden">
                                            <label for="admission_tabs" class="sr-only">Select any setting option </label>
                                            <select id="admission_tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="home" class="">HOME</option>
                                                <option value="candidate">CANDIDATE</option>
                                                <option value="fee">FEE</option>
                                                <option value="class">CLASS</option>
                                                <option value="session">SESSION</option>
                                                <option value="selected">SELECTED</option>
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

                                    <div class="home_adm_space hiddenn p-1">

<div class="container-fluid">

    <div class="row">
        <div class="text-center m-auto">
            <h5><center>Admission System(Lottery)</center></h5>
        </div>
        <div class="col-md-4">
            
            <div class="row">
                <div class="accordion">
                <div class="accordion-item">
                        <h2 style="font-size:15px" class="accordion-button" data-bs-target="#lotery_system" data-bs-toggle="collapse">Lottery System</h2>
                        
                        <div id="lotery_system" class="accordion-collapse collapse:visible visibility: visible show">
                            <div class="accordion-body text-dark">
                            <form action="#" role="form" id="lottery_form_data">
                                <div class="container-fluidd">
                                <div class="row" id="class_session_selection2">
                                    <div class="col-md-6">
                                        <div class="sm:hiddenn" id="select_class_session_div2">
                                            <label for="select_class_session_d2" class="sr-only">Select a Class</label>
                                            <select id="select_class_session_d2" name="select_class_session2" class="select_class_session bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#class2" role="tabClass2">

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="sm:hiddenn" id="select_session_div2">
                                            <label for="select_session_d2" class="sr-only">Select a Session</label>
                                                <select id="select_session_d2" name="select_session2" class="select_session2 bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#session2" role="tabSession2">
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="form-floating pt-1">
                                    <input type="number" class="input-1 form-control bg-info form-floating" placeholder="Please Enter Number Of Selection" name="selection_male" id="selection_male">
                                    <label class="" for="">Selection Number of Male</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" class="input-1 form-control bg-info form-floating" placeholder="Please Enter Number Of Selection" name="selection_female" id="selection_female">
                                    <label class="" for="">Selection Number of Female</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" class="input-1 form-control bg-warning form-floating" placeholder="Please Enter Number Of Selection" name="waiting_male" id="waiting_male">
                                    <label class="" for="">Waiting Number of Male</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" class="input-1 form-control bg-warning form-floating" placeholder="Please Enter Number Of Selection" id="waiting_female" name="waiting_female">
                                    <label class="" for="">Witing Number of Female</label>
                                </div>
                                <div class="text-center m-auto">
                                    <button
                                    type="button"
                                    class="inline-block lottery_check_result_btn rounded-full border-2 border-info px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-info transition duration-150 ease-in-out hover:border-info-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-info-600 focus:border-info-600 focus:text-info-600 focus:outline-none focus:ring-0 active:border-info-700 active:text-info-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                    data-te-ripple-init>
                                    Check Result
                                    </button>
                                    <input type="hidden" name="lottery_submit_form_data">
                                    <button
                                    type="button"
                                    class="inline-block lottery_submit_btn mt-1 m-auto rounded-full bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" id="lottery_submit_btn">
                                    Submit
                                    </button>
                                </div>

                            </form>



                            </div>
                        </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="accordion">
                <div class="accordion-item">
                        <h2 style="font-size:15px" class="accordion-button" data-bs-target="#lotery_system2" data-bs-toggle="collapse">Lottery System With Remarks Key</h2>
                        
                        <div id="lotery_system2" class="accordion-collapse collapse:visible visibility: visible show">
                            <div class="accordion-body text-dark">
                            <form action="#" role="form" id="lottery_form_data2">
                                <div class="container-fluidd">
                                <div class="row" id="class_session_selection22">
                                    <div class="col-md-6">
                                        <div class="sm:hiddenn" id="select_class_session_div22">
                                            <label for="select_class_session_d22" class="sr-only">Select a Class</label>
                                            <select id="select_class_session_d22" name="select_class_session22" class="select_class_session bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#class2" role="tabClass2">

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="sm:hiddenn" id="select_session_div22">
                                            <label for="select_session_d22" class="sr-only">Select a Session</label>
                                                <select id="select_session_d22" name="select_session22" class="select_session2 bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#session2" role="tabSession2">

                                                    <option value="0" selected disabled>Select Remark Key</option>

                                                </select>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="form-floating pt-1">
                                    <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" name="selection_remark" id="selection_remarkd">
                                    <label class="" for="">Selection Number of Remark Key</label>
                                </div>
                                <div class="form-floating pt-1">
                                    <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" name="selection_male" id="selection_male2">
                                    <label class="" for="">Selection Number of Male</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" name="selection_female" id="selection_female2">
                                    <label class="" for="">Selection Number of Female</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" name="waiting_male" id="waiting_male2">
                                    <label class="" for="">Waiting Number of Male</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" class="input-1 form-control form-floating" placeholder="Please Enter Number Of Selection" id="waiting_female2" name="waiting_female">
                                    <label class="" for="">Witing Number of Female</label>
                                </div>
                                <div class="text-center m-auto">
                                    <button
                                    type="button"
                                    class="inline-block lottery_check_result_btn2 rounded-full border-2 border-info px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-info transition duration-150 ease-in-out hover:border-info-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-info-600 focus:border-info-600 focus:text-info-600 focus:outline-none focus:ring-0 active:border-info-700 active:text-info-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                    data-te-ripple-init>
                                    Check Result
                                    </button>
                                    <input type="hidden" name="lottery_submit_form_data2">
                                    <button
                                    type="button"
                                    class="inline-block lottery_submit_btn2 mt-1 m-auto rounded-full bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" id="lottery_submit_btn2">
                                    Submit
                                    </button>
                                </div>

                            </form>



                            </div>
                        </div>
                </div>
                </div>
            </div>

        </div>
        <div class="col-md-8">
            <div class="accordion">
            <div class="accordion-item">
                    <h2 style="font-size:15px" class="accordion-button" data-bs-target="#candidate_table" data-bs-toggle="collapse">Candidate Table(Selected|Waiting)</h2>
                    <div class="others_fees_list_hh"></div>
                    <div id="candidate_table" class="accordion-collapse collapse:visible visibility: visible show">
                        <div class="accordion-body">

                            <div class="lottery_candidate">
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
                                        <tbody id="lottery_candidates_data_row">
                                            <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <td class="w-4 p-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                    </div>
                                                </td>
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Apple MacBook Pro 17"
                                                </th>
                                                <td class="px-6 py-4">
                                                    Silver
                                                </td>
                                                <td class="px-6 py-4">
                                                    Laptop
                                                </td>
                                                <td class="px-6 py-4">
                                                    Yes
                                                </td>
                                                <td class="px-6 py-4">
                                                    Yes
                                                </td>
                                                <td class="px-6 py-4">
                                                    $2999
                                                </td>
                                                <td class="flex items-center px-6 py-4">
                                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                                </td>
                                            </tr> -->

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

    </div>

</div>

                                    </div>
                                    <div class="candidate_adm_space hidden w-full text-centerr">

<div class="w-full m-auto pt-1">
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="table-title">CANDIDATEs</h1>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-warning new_candidate_btn" data-bs-toggle="modal" data-bs-target="#my_modal" data-bs-whatever="@mdo">
                New
            </button>
        </div>
    </div>
    <div class="row" id="class_session_selection">
        <div class="col-md-6">
            <div class="sm:hiddenn" id="select_class_session_div">
                <label for="select_class_session_d" class="sr-only">Select a Class</label>
                <select id="select_class_session_d" name="select_class_session" class="select_class_session bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#class" role="tabClass">

                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="sm:hiddenn" id="select_session_div">
                <label for="select_session_d" class="sr-only">Select a Session</label>
                    <select id="select_session_d" name="select_session" class="select_session bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#session" role="tabSession">
                    </select>
            </div>
        </div>
    </div>
    <div class="candidates_data" id="candidates_data">



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
                    Programme
                </th>
                <th scope="col" class="px-6 py-3">
                    Class
                </th>
                <th scope="col" class="px-6 py-3">
                    Serial Code
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody id="candidates_data_row">
            <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    Yes
                </td>
                <td class="px-6 py-4">
                    Yes
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="flex items-center px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                </td>
            </tr> -->

        </tbody>
    </table>
    <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
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
                                    <div class="class_adm_space hidden">
<div class="table-section w-full">
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="table-title">Classes</h1>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-warning new_class_btn" data-bs-toggle="modal" data-bs-target="#my_modal" data-bs-whatever="@mdo">
                New
            </button>
        </div>
    </div>
    <div class="classes_data" id="classes_data">



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
                    Class Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Day|Evening
                </th>
                <th scope="col" class="px-6 py-3">
                    Programme
                </th>
                <th scope="col" class="px-6 py-3">
                    Class Code
                </th>
                <th scope="col" class="px-6 py-3">
                    Sections
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody id="classes_data_row">
            <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    Yes
                </td>
                <td class="px-6 py-4">
                    Yes
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="flex items-center px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                </td>
            </tr> -->

        </tbody>
    </table>
    <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
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
                                    <div class="session_adm_space hidden">
<div class="table-section w-full m-auto">
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="table-title">SESSIONs</h1>
        </div> 
        <div class="col-6 text-end">
            <button class="btn btn-warning new_session_btn" data-bs-toggle="modal" data-bs-target="#my_modal" data-bs-whatever="@mdo">
                New
            </button>
        </div>
    </div>
    <div id="myalert_mmmm" style="display:none;">
            <div class="container col-md-offset-4">
            <div class="alert alert-info">
                <center><span id="alerttext_mmmm"></span></center>
            </div>
            </div>
    </div>
    <div class="table-wrapper" id="session_data">

    </div>
  </div>
</div>
                                    </div>
                                    <div class="fee_adm_space hidden">

                                    </div>
                                    <div class="selected_adm_space hidden">
<div class="table-section w-full m-auto">
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="table-title">SELECTED</h1>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-secondary candidate_search" data-bs-toggle="modal" data-bs-target="#my_modal" data-bs-whatever="@mdo">
                Search
            </button>
        </div>
    </div>

    <div class="table-wrapper">
      <table class="table tablec">
        <thead>
          <tr>
            <th style="width: 140px;">Client ID</th>
            <th style="width: 140px;">Client Name</th>
            <th style="width: 140px;">Email Address</th>
            <th style="width: 140px;">Phone Number</th>
            <th style="width: 140px;">Project Name</th>
            <th style="width: 140px;">Project Budget</th>
            <th style="width: 140px;">Estimate Time</th>
            <th style="width: 140px;">Status</th>
            <th style="width: 140px;">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="width: 140px;">FS-34856</td>
            <td style="width: 140px;">John Doe</td>
            <td style="width: 140px;">johndoe@gmail.com</td>
            <td style="width: 140px;">+348758464</td>
            <td style="width: 140px;">Ecommerce Website</td>
            <td style="width: 140px;">&dollar;1,568</td>
            <td style="width: 140px;">5 days</td>
            <td style="width: 140px;">Pending</td>
            <td style="width: 140px;">
              <a href="#" class="table-link">View Details</a>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>
                                    </div>
                                    <div class="setting_adm_space hidden">

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

<div class="container modal_part">
<div class="modal fade" id="my_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticmy_modal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centeredd">
    <div class="modal-content">
      <div class="modal-header">
      <div id="myalert" style="display:none;">
        <div class="container col-md-offset-4">
          <div class="alert alert-info">
            <center><span id="alerttext"></span></center>
          </div>
        </div>
      </div> 

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal_data" id="modal_data">


        <!-- <form action="" id="manage-course">
    <input type="hidden" name="id" value="<?php echo isset($unique_id) ? $unique_id : '' ?>">
    <div class="row">
    <div id="bazar_msg" class="form-group"></div>
    
    <div class="col">
        <div class="row">

<div class=" justify-center">
<div>
<div class="form-floating mb-1 md:w-100 xl:w-100">
  <input type="text" class="form-control
  block
  w-full
  px-3
  py-1.5
  text-base
  font-normal
  text-gray-700
  bg-white bg-clip-padding
  border border-solid border-gray-300
  rounded
  transition
  ease-in-out
  m-0
  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="ft" placeholder="name@example.com">
  <label for="ft" class="text-gray-700">Fee Type</label>
</div>
<div class="form-floating mb-3 xl:w-100">
  <input type="number" class="form-control
  block
  w-full
  px-3
  py-1.5
  text-base
  font-normal
  text-gray-700
  bg-white bg-clip-padding
  border border-solid border-gray-300
  rounded
  transition
  ease-in-out
  m-0
  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" step="any" min="0" id="amount" placeholder="Amount">
  <label for="floatingPassword" class="text-gray-700">Amount</label>
</div>
</div>
</div>

             <div class="form-group">

  <button type="button" id="add_fee" class="
  w-full
  px-6
  py-2.5
  bg-blue-600
  text-white
  font-medium
  text-xs
  leading-tight
  uppercase
  rounded
  shadow-md
  hover:bg-blue-700 hover:shadow-lg
  focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
  active:bg-blue-800 active:shadow-lg
  transition
  duration-150
  ease-in-out">Add to List</button>

                
            </div>

        </div>
        <hr>
        <table class="table table-condensed" id="fee-list">
            <thead>
                <tr>
                    <th width="5%"></th>
                    <th width="50%">Type</th>
                    <th width="45%">Amount</th>
                </tr>
            </thead>
            <tbody>


            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2" class="text-center">Total</th>
                    <th class="text-right">
                        <input type="hidden" name="total_amount" value="<?php  ?>">
                        <span class="tamount"><?php  ?></span>
                    </th>
                </tr>
            </tfoot>
        </table>
        
  <button type="submit" id="add_bazar" class="
  mt-1
  w-full
  px-6
  py-2.5
  bg-danger
  text-white
  font-medium
  text-xs
  leading-tight
  uppercase
  rounded
  shadow-md
  hover:bg-blue-700 hover:shadow-lg
  focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
  active:bg-blue-800 active:shadow-lg
  transition
  duration-150
  ease-in-out">Submit Bazar List</button>
    </div>
    </div>
        </form> -->


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="my_modal_room" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticmy_modal_room" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centeredd">
    <div class="modal-content">
      <div class="modal-header">
      <div id="myalert_room_add" style="display:none;">
        <div class="container col-md-offset-4">
          <div class="alert alert-info _room_add">
            <center><span id="alerttext_room_add"></span></center>
          </div>
        </div>
      </div> 

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal_data_room" id="modal_data_room">


        <div class="container text-center classes_container_data" id="classes_container_data">
                              

                              <div class="p-1 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                  <form class="space-y-2 room_form_data" id="room_form_data" action="#" role="form">
                                    <div class="form-floating">
                                    <input type="text" class="input-1 form-control form-floating" placeholder="Please enter Room name" name="room_name" id="room_name">
                                    <label class="" for="room_name">Enter New Room Name</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="room_code" id="room_code" class="form-control form-floating bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Room Code" required="">
                                        <label for="room_code" class="sr-onlyy">Enter Room Code</label>

                                    </div>
                                    <div class="form-floating">
                                    <input type="text" class="input-1 form-control form-floating" placeholder="Please enter campus name" name="campus_name" id="campus_name" value='main campus'>
                                    <label class="" for="campus_name">Campus</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="invigilator" id="invigilator" class="form-control form-floating bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Invigilator|Faculty Name" required="">
                                        <label for="invigilator" class="sr-onlyy">Enter a Invigilator</label>

                                    </div>
                                  <div class="sm:hiddenn" id="class_programme">
                                        <label for="sel_room_column" class="sr-only">Select no of Column</label>
                                            <select id="sel_room_column" name="room_column" class="sel_room_column bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#user_all_contentt" role="tablistt">
                                            <option id="about-tab" value="4" data-tabs-target="#about"   aria-controls="about" aria-selected="false">Select no of Column</option>
                                                <option id="" value="1" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">1</option>
                                                <option id="" value="2" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">2</option>
                                                <option id="" value="3" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">3</option>
                                                <option id="" value="4" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">4</option>
                                                <option id="" value="5" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">5</option>
                                                <option id="" value="6" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">6</option>
                                                <option id="" value="7" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">7</option>
                                                <option id="" value="8" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">8</option>


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
                                      <input type="hidden" name="room_data">
                                      </div>
                                      <button type="button" class="btn-primary w-full room_add_btn text-dark hover:text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="room_add_btn">Save Room</button>
                                  </form>
                              </div>
                              
                              
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="my_modal_routine" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticmy_modal_routine" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centeredd">
    <div class="modal-content">
      <div class="modal-header">
      <div id="myalert_routine_add" style="display:none;">
        <div class="container col-md-offset-4">
          <div class="alert alert-info _routine_add">
            <center><span id="alerttext_routine_add"></span></center>
          </div>
        </div>
      </div> 

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal_data_routine" id="modal_data_routine">


      <div class="p-1 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                  <form class="space-y-2 routine_form_data" id="routine_form_data" action="#" role="form">
                                    <div class="form-floating">
                                    <input type="text" class="input-1 form-control form-floating" placeholder="Please enter Routine name" name="routine_name" id="routine_name">
                                    <label class="" for="routine_name">Enter New Routine Name</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="routine_details" id="routine_details" class="form-control form-floating bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Routine Details" required="">
                                        <label for="routine_details" class="sr-onlyy">Enter Routine Details</label>

                                    </div>

                                  <div class="sm:hiddenn" id="class_code">
                                        <label for="select_session_for_routine" class="sr-only">Select Session</label>
                                            <select id="select_session_for_routine" name="select_session_for_routine" class="select_session_for_routine bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#user_all_contentt" role="tablistt">
                                            <option id="about-tab" value="0" data-tabs-target="#about"   aria-controls="about" aria-selected="false">Select Session</option>

                                            </select>
                                  </div>

                                      <!-- <div>
                                          <input type="number" name="number_phone" id="tk_pay" placeholder="Phone number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                      </div>
                                      <div>
                                          <input type="number" name="number_tk" id="tk_pay" placeholder="Amount at least 10/=" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                      </div> -->
                                      <div class="flex items-start">
                                      <input type="hidden" name="routine_data">
                                      </div>
                                      <button type="button" class="btn-primary w-full routine_add_btn text-dark hover:text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="routine_add_btn">Save Routine</button>
                                  </form>
                              </div>
                              
                              
                        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="my_modal_routine_edu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticmy_modal_routine_edu" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centeredd">
    <div class="modal-content">
      <div class="modal-header">
      <div id="myalert_routine_edu_add" style="display:none;">
        <div class="container col-md-offset-4">
          <div class="alert alert-info _routine_edu_add">
            <center><span id="alerttext_routine_edu_add"></span></center>
          </div>
        </div>
      </div> 

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal_data_routine" id="modal_data_routine">


      <div class="p-1 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                  <form class="space-y-2 routine_edu_form_data" id="routine_edu_form_data" action="#" role="form">
                                    <div class="form-floating">
                                    <input type="text" class="input-1 form-control form-floating" placeholder="Please enter Routine name" name="routine_edu_name" id="routine_edu_name">
                                    <label class="" for="routine_edu_name">Enter New Routine Name</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="routine_edu_details" id="routine_edu_details" class="form-control form-floating bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Routine Details" required="">
                                        <label for="routine_edu_details" class="sr-onlyy">Enter Routine Details</label>

                                    </div>

                                  <div class="sm:hiddenn" id="class_code">
                                        <label for="select_session_for_routine_edu" class="sr-only">Select Session</label>
                                            <select id="select_session_for_routine_edu" name="select_session_for_routine_edu" class="select_session_for_routine_edu bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#user_all_contentt" role="tablistt">
                                            <option id="about-tab" value="theory" data-tabs-target="#about"   aria-controls="about" aria-selected="false">Select Session</option>

                                                <option id="" value="lab" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Lab</option>
                                                <option id="" value="theory" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true">Theory</option>
                                            </select>
                                  </div>

                                      <!-- <div>
                                          <input type="number" name="number_phone" id="tk_pay" placeholder="Phone number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                      </div>
                                      <div>
                                          <input type="number" name="number_tk" id="tk_pay" placeholder="Amount at least 10/=" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                      </div> -->
                                      <div class="flex items-start">
                                      <input type="hidden" name="routine_edu_data">
                                      </div>
                                      <button type="button" class="btn-primary w-full routine_edu_add_btn text-dark hover:text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="routine_edu_add_btn">Save Routine</button>
                                  </form>
                              </div>
                              
                              
                        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="my_modal_exam_routine" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticmy_modal_exam_routine" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centeredd">
    <div class="modal-content">
      <div class="modal-header">
      <div id="myalert_exam_routine_add" style="display:none;">
        <div class="container col-md-offset-4">
          <div class="alert alert-info _exam_routine_add">
            <center><span id="alerttext_exam_routine_add"></span></center>
          </div>
        </div>
      </div> 

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal_data_routine" id="modal_data_routine">


      <div class="p-1 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                  <form class="space-y-2 exam_routine_form_data" id="exam_routine_form_data" action="#" role="form">
                                    <div class="form-floating">
                                    <input type="text" class="input-1 form-control form-floating" placeholder="Please enter Routine name" name="exam_routine_name" id="exam_routine_name">
                                    <label class="" for="exam_routine_name">Enter New Routine Name</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="exam_routine_details" id="exam_routine_details" class="form-control form-floating bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Routine Details" required="">
                                        <label for="exam_routine_details" class="sr-onlyy">Enter Routine Details</label>

                                    </div>

                                  <div class="sm:hiddenn" id="class_code">
                                        <label for="select_session_for_exam_routine" class="sr-only">Select Session</label>
                                            <select id="select_session_for_exam_routine" name="select_session_for_exam_routine" class="select_session_for_exam_routine bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#user_all_contentt" role="tablistt">
                                            <option id="about-tab" value="0" data-tabs-target="#about"   aria-controls="about" aria-selected="false">Select Session</option>

                                            </select>
                                  </div>

                                      <!-- <div>
                                          <input type="number" name="number_phone" id="tk_pay" placeholder="Phone number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                      </div>
                                      <div>
                                          <input type="number" name="number_tk" id="tk_pay" placeholder="Amount at least 10/=" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                      </div> -->
                                      <div class="flex items-start">
                                      <input type="hidden" name="exam_routine_data">
                                      </div>
                                      <button type="button" class="btn-primary w-full exam_routine_add_btn text-dark hover:text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="exam_routine_add_btn">Save Routine</button>
                                  </form>
                              </div>
                              
                              
                        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="my_modal_routine_schedule" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticmy_modal_routine_schedule" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centeredd">
    <div class="modal-content">
      <div class="modal-header">
      <div id="myalert_routine_schedule_add" style="display:none;">
        <div class="container col-md-offset-4">
          <div class="alert alert-info _routine_schedule_add">
            <center><span id="alerttext_routine_schedule_add"></span></center>
          </div>
        </div>
      </div> 

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal_data_routine_schedule" id="modal_data_routine_schedule">





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>

<div class="container bottom_menu m-auto">
    <?php
        // include('../../menu.php');
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
<script>
$(document).ready(function(){


    $(document).on('click', '#lottery_submit_btn', function(){
		if($('#select_class_session2').val()!='' && $('#waiting_female').val()!=''){
            var c = $('#select_class_session_d2').val();
            // alert($('#session_s_date').val());
			$('#lottery_submit_btn').val('Saving...');
			$('#myalert_l').slideUp();
			var session_form = $('#lottery_form_data').serialize();
			$.ajax({
				method: 'POST',
				url: './school_admin.php',
				data: session_form,

				success:function(data){
                    if(data==1){
                        Swal.fire({
                                type: 'success',
                                title: "Selection Successfully Completed!",
                                text: "THank you Admin! ",
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                            candidate_data(c);
                        setTimeout(function(){
                        $('#myalert_l').slideDown();
                        $('#alerttext_l').html("Selection Successfully Completed");
                        $('#lottery_submit_btn').val('Submit');
                        $('#lottery_form_data')[0].reset();
                        }, 2000);
                        setTimeout(function(){
                            $('#myalert_l').slideUp();
                        }, 3000);
                    }else{
                        Swal.fire({
                                type: 'warning',
                                title: "Please Try Again!",
                                text: "THank you Admin! "+data,
                                icon: "warning",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                            alert(data)
                            // candidate_data(c);
                        setTimeout(function(){
                        $('#myalert_l').slideDown();
                        $('#alerttext_l').html(data);
                        $('#lottery_submit_btn').val('Try Again Session');
                        $('#lottery_form_data')[0].reset();
                        }, 2000);
                        setTimeout(function(){
                            $('#myalert_l').slideUp();
                        }, 3000);
                    }
                   
				}
			});
		}
		else{
			alert('Please input all fields');
		}
	});





    function candidate_data(id){
        $('#lottery_candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');

            $.ajax({
                url:'./school_admin.php',
                type:'post',
                data: {
                    class_id : id,
                    select_class_session_candidate2: true
                },
                success: function(response){
                    $('#lottery_candidates_data_row').html(response);
                    // $('#lottery_candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');
                }
            });
    }


        $('#select_class_session_d2').click(function(){
            var c = $('#select_class_session_d2').val();
            // alert(""+c);
            if(c!='0'){
                // alert(c);
                $('#lottery_candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');
            $.ajax({
                url:'./school_admin.php',
                type:'post',
                data: {
                    class_id : c,
                    select_class_session_candidate2: true
                },
                success: function(response){
                    $('#lottery_candidates_data_row').html(response);
                    // $('#candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');
                }
            });
            }


        });
        $('#select_session_d2').click(function(){
            // alert("dsaf");
            var s = $('#select_session_d2').val();
            var c = $('#select_class_session_d2').val();

            if(c==null || c=='0'){
                $('#lottery_candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');
            $.ajax({
                url:'./school_admin.php',
                type:'post',
                data: {
                    s_id : s,
                    select_class_session_candidate2: true
                },
                success: function(response){
                    $('#lottery_candidates_data_row').html(response);
                    // $('#candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');
                }
            });
            }else{
                $('#lottery_candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');
            $.ajax({
                url:'./school_admin.php',
                type:'post',
                data: {
                    class_id : c,
                    s_id : s,
                    select_class_session_candidate2: true
                },
                success: function(response){
                    $('#lottery_candidates_data_row').html(response);
                    // $('#candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');
                }
            });
            }

        });


    $('#select_class_session_d').click(function(){
            var c = $('#select_class_session_d').val();
            // alert(""+c);
            if(c!='0'){
                // alert(c);
                $('#candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');
            $.ajax({
                url:'./school_admin.php',
                type:'post',
                data: {
                    class_id : c,
                    select_class_session_candidate: true
                },
                success: function(response){
                    $('#candidates_data_row').html(response);
                    // $('#candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');
                }
            });
            }


        });
        $('#select_session_d').click(function(){
            // alert("dsaf");
            var s = $('#select_session_d').val();
            var c = $('#select_class_session_d').val();

            if(c==null || c=='0'){
                $('#candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');
            $.ajax({
                url:'./school_admin.php',
                type:'post',
                data: {
                    s_id : s,
                    select_class_session_candidate: true
                },
                success: function(response){
                    $('#candidates_data_row').html(response);
                    // $('#candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');
                }
            });
            }else{
                $('#candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');
            $.ajax({
                url:'./school_admin.php',
                type:'post',
                data: {
                    class_id : c,
                    s_id : s,
                    select_class_session_candidate: true
                },
                success: function(response){
                    $('#candidates_data_row').html(response);
                    // $('#candidates_data_row').html('<div class="container text-center m-auto"><h3><span>Please Wait One Second</span></h3></div>');
                }
            });
            }

        });

    $(document).on('click','.set_class_session_next', function(){

        $('#press_btn_s').text('Requesting in...');
        $('#myalert_mmmm').slideUp();
        var session_id = $(this).attr('id');



      Swal.fire({
        title: 'Are you sure!?',
        text: 'Session & Class will be Updated!',
        type: 'warning',
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes! !',

      }).then((resultm) => {

          if(resultm.value){

            $.ajax({
            url:'./school_admin.php',
            type:'post',
            data: {
              session_id:session_id,
              session_update_2: true,
            },
            success: function(response){
              if(response==1){
                sessions();
                // $('#daily_meal_alert').html(response);
                $('#myalert_mmmm').slideDown();
                $('#alerttext_mmmm').text('Updated Successful!');
                $('#press_btn_s').text('Updated! Thank You!');
                setTimeout(() => {
                  $('#myalert_mmmm').slideUp();
                }, 3000);
              }else{
                // $('#daily_meal_alert').html(response);
                // alert(meal_id);

                $('#myalert_mmmm').slideDown();
                $('#alerttext_mmmm').text('Sorry! Try again. Session not Updated!');
                $('#press_btn_s').text('Try Again!');
                setTimeout(() => {
                  $('#myalert_mmmm').slideUp();
                }, 3000);
                Swal.fire({
                    type: 'info',
                    title: "Try again!",
                    text: "Something went wrong!",
                    icon: "info",
                    button: false,
                    dangerMode: true,
                    timer: 3000,

                });
              }


            }
            });
              
          }else{
            Swal.fire({
              type: 'info',
              title: "Try again!",
              text: "Something went wrong!",
              icon: "info",
              button: false,
              dangerMode: true,
              timer: 3000,

            })
          }

      })



    });


$('#classes_data_row').ready(function(){

$.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        class_data_f: true
      },
      success: function(response){
        $('#classes_data_row').html(response);
        $('#classes_data_row_routine').html(response);

      }
    });


});


function classes(){
    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        class_data_f: true
      },
      success: function(response){
        $('#classes_data_row').html(response);
        $('#classes_data_row_routine').html(response);

      }
    });
};

function rooms(){
    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        room_data_f: true
      },
      success: function(response){
        $('#room_data_row').html(response);
        // $('#classes_data_row_routine').html(response);

      }
    });
};

$(document).on('click','.room_routine_btn',function(){
    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        room_data_f: true
      },
      success: function(response){
        $('#room_data_row').html(response);
        // $('#classes_data_row_routine').html(response);

      }
    });
});


function routine(){
    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        routine_data_f: true
      },
      success: function(response){
        $('#routine_data_row').html(response);
        // $('#classes_data_row_routine').html(response);

      }
    });
};

$(document).on('click','.routine_btn',function(){
    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        routine_data_f: true
      },
      success: function(response){
        $('#routine_data_row').html(response);
        // $('#classes_data_row_routine').html(response);

      }
    });
});


function routine_edu(){
    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        routine_edu_data_f: true
      },
      success: function(response){
        $('#routine_edu_data_row').html(response);
        // $('#classes_data_row_routine').html(response);

      }
    });
};

$(document).on('click','.edu_routine_btn',function(){
    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        routine_edu_data_f: true
      },
      success: function(response){
        $('#routine_edu_data_row').html(response);
        // $('#classes_data_row_routine').html(response);

      }
    });
});


function exam_routine(){
    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        exam_routine_data_f: true
      },
      success: function(response){
        $('#exam_routine_data_row').html(response);
        // $('#classes_data_row_routine').html(response);

      }
    });
};

$(document).on('click','.exam_routine_btn',function(){
    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        exam_routine_data_f: true
      },
      success: function(response){
        $('#exam_routine_data_row').html(response);
        // $('#classes_data_row_routine').html(response);

      }
    });
});


    $(document).on('click', '#class_add_btn', function(){
		if($('#class_name').val()!='' && $('#class_section').val()!=''){
            // alert($('#session_s_date').val());
			$('#class_add_btn').val('Saving...');
			$('#myalert').slideUp();
			var class_form = $('#class_form_data').serialize();
			$.ajax({
				method: 'POST',
				url: './school_admin.php',
				data: class_form,

				success:function(data){
                    if(data==1){
                        Swal.fire({
                                type: 'success',
                                title: "Class Successfully Added!",
                                text: "THank you Admin! ",
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert').slideDown();
                        $('#alerttext').html("Class Successfully Added");
                        $('#class_add_btn').val('Save Class');
                        $('#class_form_data')[0].reset();
                        }, 2000);
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }else{
                        Swal.fire({
                                type: 'warning',
                                title: "Please Try Again!",
                                text: "THank you Admin! "+data,
                                icon: "warning",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert').slideDown();
                        $('#alerttext').html(data);
                        $('#class_add_btn').val('Try Again, Class');
                        $('#class_form_data')[0].reset();
                        }, 2000);
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }
                   
				}
			});
		}
		else{
			alert('Please input all fields');
		}
	});
    
    

    $(document).on('click', '#routine_add_btn', function(){
		if($('#routine_name').val()!='' && $('#routine_details').val()!=''){
            // alert($('#session_s_date').val());
			$('#routine_add_btn').val('Saving...');
			$('#myalert_routine_add').slideUp();
			var routine_form = $('#routine_form_data').serialize();
			$.ajax({
				method: 'POST',
				url: './school_admin.php',
				data: routine_form,

				success:function(data){
                    if(data==1){
                        Swal.fire({
                                type: 'success',
                                title: "Routine Successfully Added!",
                                text: "Thank you Admin! ",
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert_routine_add').slideDown();
                        $('#alerttext_routine_add').html("Routine Successfully Added");
                        $('#routine_add_btn').val('Save Routine');
                        $('#routine_form_data')[0].reset();
                        }, 2000);
                        routine();
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }else{
                        Swal.fire({
                                type: 'warning',
                                title: "Please Try Again!",
                                text: "Thank you Admin! "+data,
                                icon: "warning",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert_routine_add').slideDown();
                        $('#alerttext_routine_add').html(data);
                        $('#routine_add_btn').val('Try Again, Routine');
                        $('#routine_form_data')[0].reset();
                        }, 2000);
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }            
				}
			});
		}
		else{
			alert('Please input all fields');
		}
	});



    $(document).on('click', '#routine_edu_add_btn', function(){
		if($('#routine_edu_name').val()!='' && $('#routine_edu_details').val()!=''){
            // alert($('#session_s_date').val());
			$('#routine_edu_add_btn').val('Saving...');
			$('#myalert_routine_edu_add').slideUp();
			var routine_edu_form = $('#routine_edu_form_data').serialize();
			$.ajax({
				method: 'POST',
				url: './school_admin.php',
				data: routine_edu_form,

				success:function(data){
                    if(data==1){
                        Swal.fire({
                                type: 'success',
                                title: "Routine Successfully Added!",
                                text: "Thank you Admin! ",
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert_routine_edu_add').slideDown();
                        $('#alerttext_routine_edu_add').html("Routine Successfully Added");
                        $('#routine_edu_add_btn').val('Save Routine');
                        $('#routine_edu_form_data')[0].reset();
                        }, 2000);
                        routine_edu();
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }else{
                        Swal.fire({
                                type: 'warning',
                                title: "Please Try Again!",
                                text: "Thank you Admin! "+data,
                                icon: "warning",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert_routine_edu_add').slideDown();
                        $('#alerttext_routine_add').html(data);
                        $('#routine_edu_add_btn').val('Try Again, Routine');
                        $('#routine_edu_form_data')[0].reset();
                        }, 2000);
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }            
				}
			});
		}
		else{
			alert('Please input all fields');
		}
	});


    $(document).on('click', '#exam_routine_add_btn', function(){
		if($('#exam_routine_name').val()!='' && $('#exam_routine_details').val()!=''){
            // alert($('#session_s_date').val());
			$('#exam_routine_add_btn').val('Saving...');
			$('#myalert_exam_routine_add').slideUp();
			var exam_routine_form = $('#exam_routine_form_data').serialize();
			$.ajax({
				method: 'POST',
				url: './school_admin.php',
				data: exam_routine_form,

				success:function(data){
                    if(data==1){
                        Swal.fire({
                                type: 'success',
                                title: "Routine Successfully Added!",
                                text: "Thank you Admin! ",
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert_exam_routine_add').slideDown();
                        $('#alerttext_exam_routine_add').html("Routine Successfully Added");
                        $('#exam_routine_add_btn').val('Save Routine');
                        $('#exam_routine_form_data')[0].reset();
                        }, 2000);
                        exam_routine();
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }else{
                        Swal.fire({
                                type: 'warning',
                                title: "Please Try Again!",
                                text: "Thank you Admin! "+data,
                                icon: "warning",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert_exam_routine_add').slideDown();
                        $('#alerttext_exam_routine_add').html(data);
                        $('#exam_routine_add_btn').val('Try Again, Routine');
                        $('#exam_routine_form_data')[0].reset();
                        }, 2000);
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }            
				}
			});
		}
		else{
			alert('Please input all fields');
		}
	});




    $(document).on('click', '#schedule_add_btn', function(){
		if($('#sub_name').val()!='' && $('#sub_code').val()!=''){
            // alert($('#session_s_date').val());
			$('#schedule_add_btn').val('Saving...');
			$('#myalert_routine_schedules').slideUp();
			var schedule_form = $('#schedule_form_data').serialize();
			$.ajax({
				method: 'POST',
				url: './school_admin.php',
				data: schedule_form,

				success:function(data){
                    if(data==1){
                        Swal.fire({
                                type: 'success',
                                title: "Schedule Successfully Added!",
                                text: "Thank you Admin! ",
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert_routine_schedules').slideDown();
                        $('#alerttext_routine_schedules').html("Schedule Successfully Added");
                        $('#schedule_add_btn').val('Save Schedule');
                        $('#schedule_form_data')[0].reset();
                        }, 2000);
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }else{
                        Swal.fire({
                                type: 'warning',
                                title: "Please Try Again!",
                                text: "Thank you Admin! "+data,
                                icon: "warning",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert_routine_schedules').slideDown();
                        $('#alerttext_routine_schedules').html(data);
                        $('#schedule_form_data').val('Try Again, Schedule');
                        $('#schedule_form_data')[0].reset();
                        }, 2000);
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }            
				}
			});
		}
		else{
			alert('Please input all fields');
		}
	});    

    $(document).on('click', '#room_add_btn', function(){
		if($('#room_name').val()!='' && $('#room_code').val()!=''){
            // alert($('#session_s_date').val());
			$('#room_add_btn').val('Saving...');
			$('#myalert_room_add').slideUp();
			var room_form = $('#room_form_data').serialize();
			$.ajax({
				method: 'POST',
				url: './school_admin.php',
				data: room_form,

				success:function(data){
                    if(data==1){
                        Swal.fire({
                                type: 'success',
                                title: "Room Successfully Added!",
                                text: "Thank you Admin! ",
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert_room_add').slideDown();
                        $('#alerttext_room_add').html("Room Successfully Added");
                        $('#room_add_btn').val('Save Room');
                        $('#room_form_data')[0].reset();
                        }, 2000);
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }else{
                        Swal.fire({
                                type: 'warning',
                                title: "Please Try Again!",
                                text: "Thank you Admin! "+data,
                                icon: "warning",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert_room_add').slideDown();
                        $('#alerttext_room_add').html(data);
                        $('#room_add_btn').val('Try Again, Room');
                        $('#room_form_data')[0].reset();
                        }, 2000);
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }            
				}
			});
		}
		else{
			alert('Please input all fields');
		}
	});    

$('#class_session_selection22').ready(function(){

$.ajax({
  url:'./school_admin.php',
  type:'post',
  data: {
    select_class_session: true
  },
  success: function(response){
    $('#select_class_session_d2').html(response);
    $('#select_class_session_d22').html(response);

  }
});

$.ajax({
  url:'./school_admin.php',
  type:'post',
  data: {
    select_session: true
  },
  success: function(response){
    $('#select_session_d2').html(response);
    $('#select_session_for_routine').html(response);
    $('#select_session_for_routine_edu').html(response);
    $('#select_session_for_exam_routine').html(response);

  }
});


}); 
$('#class_session_selection').ready(function(){

    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        select_class_session: true
      },
      success: function(response){
        $('#select_class_session_d').html(response);
        $('#select_class_session_d2').html(response);
        $('#select_class_session_d2').html(response);
      }
    });

    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        select_session: true
      },
      success: function(response){
        $('#select_session_d').html(response);
        $('#select_session_d2').html(response);
        $('#select_session_for_routine').html(response);
    $('#select_session_for_routine_edu').html(response);
    $('#select_session_for_exam_routine').html(response);

      }
    });


});    

$('#session_data').ready(function(){

$.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        session_data_f: true
      },
      success: function(response){
        $('#session_data').html(response);

      }
    });


});

function sessions(){
    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        session_data_f: true
      },
      success: function(response){
        $('#session_data').html(response);

      }
    });
};

$('#session_data_row_routine').ready(function(){

$.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        session_data_ff: true
      },
      success: function(response){
        $('#session_data_row_routine').html(response);

      }
    });


});

function sessions_routine(){
    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        session_data_ff: true
      },
      success: function(response){
        $('#session_data_row_routine').html(response);

      }
    });
};

    $(document).on('click', '#session_add_btn', function(){
		if($('#session_s_date').val()!='' && $('#session_e_date').val()!=''){
            // alert($('#session_s_date').val());
			$('#session_add_btn').val('Saving...');
			$('#myalert').slideUp();
			var session_form = $('#session_form_data').serialize();
			$.ajax({
				method: 'POST',
				url: './school_admin.php',
				data: session_form,

				success:function(data){
                    if(data==1){
                        Swal.fire({
                                type: 'success',
                                title: "Session Successfully Added!",
                                text: "THank you Admin! ",
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert').slideDown();
                        $('#alerttext').html("Session Successfully Added");
                        $('#session_add_btn').val('Save Session');
                        $('#session_form_data')[0].reset();
                        }, 2000);
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }else{
                        Swal.fire({
                                type: 'warning',
                                title: "Please Try Again!",
                                text: "THank you Admin! "+data,
                                icon: "warning",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                        setTimeout(function(){
                        $('#myalert').slideDown();
                        $('#alerttext').html(data);
                        $('#session_add_btn').val('Try Again Session');
                        $('#session_form_data')[0].reset();
                        }, 2000);
                        setTimeout(function(){
                        // location.reload();
                        }, 3000);
                    }
                   
				}
			});
		}
		else{
			alert('Please input all fields');
		}
	});

    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.new_session_btn').click(function(){

            $('#modal_data').html("<div class='text-center'><center><span>Please Wait One Second</span></center></div>");

            $.ajax({
                url:'../../data/modal_data.php',
                type:'post',
                data: {
                    new_session: true
                },
                success: function(response){
                    $('#modal_data').html(response);

                }
                }); 

        });
        $('.new_candidate_btn').click(function(){

            $('#modal_data').html('<div class="container text-center"><h3><span>Please Wait One Second</span></h3></div>');
            $.ajax({
                url:'../../data/modal_data.php',
                type:'post',
                data: {
                    new_candidate: true
                },
                success: function(response){
                    // $('#modal_data').html(response);
                    $('#modal_data').html('<div class="container text-center"><h3><span>Please Wait One Second</span></h3></div>');
                }
                }); 

        });        
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.new_class_btn').click(function(){

            $('#modal_data').html("<div class='text-center'><center><span>Please Wait One Second</span></center></div>");

            $.ajax({
                url:'../../data/modal_data.php',
                type:'post',
                data: {
                    new_class: true
                },
                success: function(response){
                    $('#modal_data').html(response);

                }
                }); 

        });
        $('.new_candidate_btnn').click(function(){

            $('#modal_data').html('<div class="container text-center"><h3><span>Please Wait One Second</span></h3></div>');
            $.ajax({
                url:'../../data/modal_data.php',
                type:'post',
                data: {
                    new_candidate: true
                },
                success: function(response){
                    // $('#modal_data').html(response);
                    $('#modal_data').html('<div class="container text-center"><h3><span>Please Wait One Second</span></h3></div>');
                }
            }); 

        });        
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
<script type="text/javascript">
    $(document).ready(function(){
        $('.my_routine_btn').click(function(){
            $('.home_routine_space').removeClass('hidden');
            $('.home_edu_routine_space').addClass('hidden');
        });
        $('.edu_routine_btn').click(function(){
            $('.home_edu_routine_space').removeClass('hidden');
            $('.home_routine_space').addClass('hidden');
        });
        $(document).on('click','.routine_schedule_back_btn', function(){
          var btn_id = $(this).attr('id');
          $('.popup-routine_schedule').addClass('hidden');
          $('.routine_container').removeClass('hidden');
          // $('.popup-sett_fee').removeClass('hidden');
        //   schedule(btn_id);

        });
        $(document).on('click','.routine_wise_data_btn', function(){
          var btn_id = $(this).attr('id');
          $('.popup-routine_schedule').removeClass('hidden');
          $('.routine_container').addClass('hidden');
          schedule(btn_id);

        });
        $(document).on('click','.add_schedule_container_back_btn', function(){
          var btn_id = $(this).attr('id');
          $('.popup-add_schedule_container').addClass('hidden');
          $('.schedule_container_body').removeClass('hidden');

        });
        $(document).on('click','.new_schedule_btn', function(){
          var btn_id = $(this).attr('id');
          $('.popup-add_schedule_container').removeClass('hidden');
          $('.schedule_container_body').addClass('hidden');

        });

function schedule(id){
    $.ajax({
      url:'./school_admin.php',
      type:'post',
      data: {
        id:id,
        routine_schedule_data: true
      },
      success: function(response){
        $('#routine_schedules_data').html(response);
        // $('#classes_data_row_routine').html(response);

      }
    });
};

    });
</script>
<script>
        $(document).ready(function(){
            $('#admission_tabs').click(function(){
                var op = $('#admission_tabs').val();
                // alert('Selected Value: ' + op);
                if(op=='home'){
                    $('.home_adm_space').removeClass('hidden');
                    $('.fee_adm_space, .candidate_adm_space, .class_adm_space, .session_adm_space, .selected_adm_space, .setting_adm_space').addClass('hidden');

                }else if(op=='candidate'){
                    $('.candidate_adm_space').removeClass('hidden');
                    $('.home_adm_space, .fee_adm_space, .class_adm_space, .session_adm_space, .selected_adm_space, .setting_adm_space').addClass('hidden');
                }else if(op=='fee'){
                    $('.fee_adm_space').removeClass('hidden');
                    $('.home_adm_space, .candidate_adm_space, .class_adm_space, .session_adm_space, .selected_adm_space, .setting_adm_space').addClass('hidden');
                }else if(op=='class'){
                    $('.class_adm_space').removeClass('hidden');
                    $('.home_adm_space, .fee_adm_space, .candidate_adm_space, .session_adm_space, .selected_adm_space, .setting_adm_space').addClass('hidden');
                }else if(op=='session'){
                    $('.session_adm_space').removeClass('hidden');
                    $('.home_adm_space, .fee_adm_space, .candidate_adm_space, .class_adm_space, .selected_adm_space, .setting_adm_space').addClass('hidden');
                }else if(op=='selected'){
                    $('.selected_adm_space').removeClass('hidden');
                    $('.home_adm_space, .fee_adm_space, .candidate_adm_space, .class_adm_space, .session_adm_space, .setting_adm_space').addClass('hidden');
                }else if(op=='setting'){
                    $('.setting_adm_space').removeClass('hidden');
                    $('.home_adm_space, .fee_adm_space, .candidate_adm_space, .class_adm_space, .session_adm_space, .selected_adm_space').addClass('hidden');
                }

            });
        });
    </script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.home_admission_btn').click(function(){
            $('.home_adm_space').removeClass('hidden');
            $('.fee_adm_space, .candidate_adm_space, .class_adm_space, .session_adm_space, .selected_adm_space, .setting_adm_space').addClass('hidden');
        });

        $('.fee_admission_btn').click(function(){
            $('.fee_adm_space').removeClass('hidden');
            $('.home_adm_space, .candidate_adm_space, .class_adm_space, .session_adm_space, .selected_adm_space, .setting_adm_space').addClass('hidden');
        });
        $('.candidate_admission_btn').click(function(){
            $('.candidate_adm_space').removeClass('hidden');
            $('.home_adm_space, .fee_adm_space, .class_adm_space, .session_adm_space, .selected_adm_space, .setting_adm_space').addClass('hidden');
        });
        $('.class_admission_btn').click(function(){
            $('.class_adm_space').removeClass('hidden');
            $('.home_adm_space, .fee_adm_space, .candidate_adm_space, .session_adm_space, .selected_adm_space, .setting_adm_space').addClass('hidden');
        });
        $('.session_admission_btn').click(function(){
            $('.session_adm_space').removeClass('hidden');
            $('.home_adm_space, .fee_adm_space, .candidate_adm_space, .class_adm_space, .selected_adm_space, .setting_adm_space').addClass('hidden');



        });
        $('.selected_admission_btn').click(function(){
            $('.selected_adm_space').removeClass('hidden');
            $('.home_adm_space, .fee_adm_space, .candidate_adm_space, .class_adm_space, .session_adm_space, .setting_adm_space').addClass('hidden');
        });
        $('.setting_admission_btn').click(function(){
            $('.setting_adm_space').removeClass('hidden');
            $('.home_adm_space, .fee_adm_space, .candidate_adm_space, .class_adm_space, .session_adm_space, .selected_adm_space').addClass('hidden');
        });

    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.home_routine_btn').click(function(){
            $('.home_routine_space').removeClass('hidden');
                    $('.exam_routine_space, .class_routine_space, .session_routine_space, .room_routine_space, .column_routine_space, .faculty_routine_space').addClass('hidden');
        });

        $('.exam_routine_btn').click(function(){
            $('.exam_routine_space').removeClass('hidden');
                    $('.home_routine_space, .class_routine_space, .session_routine_space, .room_routine_space, .column_routine_space, .faculty_routine_space').addClass('hidden');
        });
        $('.class_routine_btn').click(function(){
            $('.class_routine_space').removeClass('hidden');
                    $('.exam_routine_space, .home_routine_space, .session_routine_space, .room_routine_space, .column_routine_space, .faculty_routine_space').addClass('hidden');
        });
        $('.session_routine_btn').click(function(){
            $('.session_routine_space').removeClass('hidden');
                    $('.exam_routine_space, .class_routine_space, .home_routine_space, .room_routine_space, .column_routine_space, .faculty_routine_space').addClass('hidden');
        });
        $('.room_routine_btn').click(function(){
            $('.room_routine_space').removeClass('hidden');
                    $('.exam_routine_space, .class_routine_space, .session_routine_space, .home_routine_space, .column_routine_space, .faculty_routine_space').addClass('hidden');
        });
        $('.column_routine_btn').click(function(){
            $('.column_routine_space').removeClass('hidden');
                    $('.exam_routine_space, .class_routine_space, .session_routine_space, .room_routine_space, .home_routine_space, .faculty_routine_space').addClass('hidden');
        });
        $('.faculty_routine_btn').click(function(){
            $('.faculty_routine_space').removeClass('hidden');
                    $('.exam_routine_space, .class_routine_space, .session_routine_space, .room_routine_space, .column_routine_space, .home_routine_space').addClass('hidden');
        });

    });
</script>
<script>
    $(document).ready(function(){
        $('#routine_tabs').click(function(){
            var op = $('#routine_tabs').val();
                if(op=='home'){
                    $('.home_routine_space').removeClass('hidden');
                    $('.exam_routine_space, .class_routine_space, .session_routine_space, .room_routine_space, .column_routine_space, .faculty_routine_space').addClass('hidden');

                }else if(op=='exam'){
                    $('.exam_routine_space').removeClass('hidden');
                    $('.home_routine_space, .class_routine_space, .session_routine_space, .room_routine_space, .column_routine_space, .faculty_routine_space').addClass('hidden');
                }else if(op=='class'){
                    $('.class_routine_space').removeClass('hidden');
                    $('.exam_routine_space, .home_routine_space, .session_routine_space, .room_routine_space, .column_routine_space, .faculty_routine_space').addClass('hidden');
                }else if(op=='session'){
                    $('.session_routine_space').removeClass('hidden');
                    $('.exam_routine_space, .class_routine_space, .home_routine_space, .room_routine_space, .column_routine_space, .faculty_routine_space').addClass('hidden');
                }else if(op=='room'){
                    $('.room_routine_space').removeClass('hidden');
                    $('.exam_routine_space, .class_routine_space, .session_routine_space, .home_routine_space, .column_routine_space, .faculty_routine_space').addClass('hidden');
                }else if(op=='column'){
                    $('.column_routine_space').removeClass('hidden');
                    $('.exam_routine_space, .class_routine_space, .session_routine_space, .room_routine_space, .home_routine_space, .faculty_routine_space').addClass('hidden');
                }else if(op=='faculty'){
                    $('.faculty_routine_space').removeClass('hidden');
                    $('.exam_routine_space, .class_routine_space, .session_routine_space, .room_routine_space, .column_routine_space, .home_routine_space').addClass('hidden');
                }
        });
    });
</script>
<script>
        $(document).ready(function(){
            $('#mess_tabs').click(function(){
                var op = $('#mess_tabs').val();
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
    <script src="../../dist/js/table.js"></script>
    <script src="../../js/sweetalert.min.js"></script>
<script src="../../js/sweetalert2.all.min.js"></script>
<script>
    function openTab(evt, tabName) {

        var tabContents = document.getElementsByClassName("tab-content");
        for (var i = 0; i < tabContents.length; i++) {
            tabContents[i].classList.remove("active");
        }


        var tabLinks = document.getElementsByClassName("tablinks");
        for (var i = 0; i < tabLinks.length; i++) {
            tabLinks[i].classList.remove("active");
        }

        document.getElementById(tabName).classList.add("active");
        evt.currentTarget.classList.add("active");
    }
</script>
<script src="../../dist/js/scriptp.js"></script>