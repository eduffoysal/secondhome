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

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lilita+One&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/stylee.css">

</head>
<body>

<div class="main-wrapper">
            <div class="page-top">
                <div class="container">
                    <!-- navbar -->
                    <div class="navbar">
                        <div class="navbar-l">
                            <a href="#" class="navbar-brand md:hidden">SH</a>
                            <a href="#" class="navbar-brand hidden md:block">SecondHome</a>
                            <ul class="nav-list -translate-x-full lg:translate-x-0 transition-default">
                                <button class="navbar-hide-btn" type="button">
                                    <img src="assets/icons/close-icon.svg" alt="">
                                </button>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Starts</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="#" class="nav-link">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Planning</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Teams</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Calendar</a>
                                </li>
                            </ul>
                            <div class="navbar-show-btn" type="button">
                                <img src="assets/icons/menu-icon.svg" alt="">
                            </div>
                        </div>

                        <div class="navbar-r">
                            <div class="nav-icon-btns">
                                <button class="nav-icon-btn">
                                    <img src="assets/icons/search-icon.svg" alt="">
                                </button>
                                <button class="nav-icon-btn">
                                    <img src="assets/icons/grid-icon.svg" alt="">
                                </button>
                                <button class="nav-icon-btn">
                                    <img src="assets/icons/plus-icon.svg" alt="">
                                </button>
                                <button class="nav-icon-btn">
                                    <img src="assets/icons/folder-icon.svg" alt="">
                                </button>
                                <button class="nav-icon-btn">
                                    <img src="assets/icons/bell-icon.svg" alt="">
                                </button>
                            </div>

                            <button class="nav-profile-btn">
                                <div class="profile-btn-img">
                                    <img src="assets/images/avatar.jpg" alt="">
                                </div>
                                <img src="assets/icons/chevron-down.svg" alt="" class="profile-btn-icon">
                            </button>
                        </div>
                    </div>
                    <!-- end of navbar -->
                </div>
            </div>

            <div class="page-content">
                <div class="container">
                    <div class="content-head">
                        <h3 class="content-head-title">Tasks Board</h3>
                        <button class="content-head-btn">Show Backlog</button>
                    </div>

                    <div class="content-tab">
                        <div class="content-tab-head">
                            <div class="tab-l">
                                <ul class="tab-btns">
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
                                </ul>
                            </div>

                            <div class="tab-r">
                                <button class="tab-r-btn">
                                    <img src="assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                    <span class="tab-r-btn-text">Full screens</span>
                                </button>
                                <button class="tab-r-btn ms-3">
                                    <img src="assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
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
                                        <img src="assets/icons/plus-icon-alt.svg" alt="" class="group-hover:invert">
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
                                                <img src="assets/icons/dots-icon.svg" alt="">
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
                                                    <img src="assets/images/person-1.jpg" alt="">
                                                    <img src="assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="assets/icons/comment-icon.svg" alt="">
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
                                                <img src="assets/icons/dots-icon.svg" alt="">
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
                                                    <img src="assets/images/person-1.jpg" alt="">
                                                    <img src="assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="assets/icons/comment-icon.svg" alt="">
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
                                                <img src="assets/icons/dots-icon.svg" alt="">
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
                                                    <img src="assets/images/person-1.jpg" alt="">
                                                    <img src="assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="assets/icons/comment-icon.svg" alt="">
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
                                        <img src="assets/icons/plus-icon-alt.svg" alt="" class="group-hover:invert">
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
                                                <img src="assets/icons/dots-icon.svg" alt="">
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
                                                    <img src="assets/images/person-1.jpg" alt="">
                                                    <img src="assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="assets/icons/comment-icon.svg" alt="">
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
                                                <img src="assets/icons/dots-icon.svg" alt="">
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
                                                    <img src="assets/images/person-1.jpg" alt="">
                                                    <img src="assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="assets/icons/comment-icon.svg" alt="">
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
                                                <img src="assets/icons/dots-icon.svg" alt="">
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
                                                    <img src="assets/images/person-1.jpg" alt="">
                                                    <img src="assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="assets/icons/comment-icon.svg" alt="">
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
                                        <img src="assets/icons/plus-icon-alt.svg" alt="" class="group-hover:invert">
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
                                                <img src="assets/icons/dots-icon.svg" alt="">
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
                                                    <img src="assets/images/person-1.jpg" alt="">
                                                    <img src="assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="assets/icons/comment-icon.svg" alt="">
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
                                                <img src="assets/icons/dots-icon.svg" alt="">
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
                                                    <img src="assets/images/person-1.jpg" alt="">
                                                    <img src="assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="assets/icons/comment-icon.svg" alt="">
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
                                                <img src="assets/icons/dots-icon.svg" alt="">
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
                                                    <img src="assets/images/person-1.jpg" alt="">
                                                    <img src="assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="assets/icons/comment-icon.svg" alt="">
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
                                        <img src="assets/icons/plus-icon-alt.svg" alt="" class="group-hover:invert">
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
                                                <img src="assets/icons/dots-icon.svg" alt="">
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
                                                    <img src="assets/images/person-1.jpg" alt="">
                                                    <img src="assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="assets/icons/comment-icon.svg" alt="">
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
                                                <img src="assets/icons/dots-icon.svg" alt="">
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
                                                    <img src="assets/images/person-1.jpg" alt="">
                                                    <img src="assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="assets/icons/comment-icon.svg" alt="">
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
                                                <img src="assets/icons/dots-icon.svg" alt="">
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
                                                    <img src="assets/images/person-1.jpg" alt="">
                                                    <img src="assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="assets/icons/comment-icon.svg" alt="">
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
        <script src="dist/js/scripta.js"></script>
</body>
</html>