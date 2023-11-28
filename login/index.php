<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:../');
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/tailwindcss-colors.css">
    <link rel="stylesheet" href="../css/stylep.css">
    <link rel="stylesheet" href="../css/tab_menu.css">
    <link rel="stylesheet" href="../output/./output.css">
    <title>Secondhome Login/SignUp/Registration</title>


    
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

    <!-- <link rel="stylesheet" href="../bootstrap.min.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->


    <style>
        #mess, #school, #teacher{
        display:none;
        }
    </style>
</head>
<body>
    
    <!-- start: Topbar -->
    <section class="topbar-section">
        <div class="container">
            <div class="topbar-wrapper">
                <div class="topbar-translate">
                    <button type="button" class="topbar-translate-toggle">
                        <img src="../img/mess2.jpg" alt="">
                    </button>
                    <div class="topbar-translate-dropdown">
                        <a href="#">Bangla</a>
                        <a href="#">English</a>
                    </div>
                </div>
                <div class="topbar-link">
                    <a href="#">Mess</a>
                    <a href="#">Class Organizer</a>
                    <a href="#">Register</a>
                    <a href="#">Login</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Topbar -->

    <!-- start: Navbar -->
    <nav>
        <div class="container">
            <div class="navbar-wrapper">
                <a href="#" class="navbar-logo"><i class="ri-graduation-cap-fill"></i></i></a>
                <form action="" class="navbar-form">
                    <div class="navbar-form-group">
                        <button type="button" class="navbar-form-close"><i class="ri-arrow-left-line"></i></button>
                        <input type="search" class="navbar-form-input" placeholder="What do you looking for?">
                    </div>
                    <button type="submit" class="navbar-form-submit text-blue-600">Search</button>
                </form>
                <div class="navbar-link">
                    <a href="#" class="navbar-link-sm"><i class="ri-whatsapp-line"></i></a>
                    <a href="#" class="navbar-link-sm"><i class="ri-instagram-line"></i></a>
                    <a href="#" class="navbar-link-sm"><i class="ri-phone-line"></i></a>
                    <div class="navbar-link-divider navbar-link-sm"></div>
                    <a href="#" class="navbar-link-cart"><i class="ri-graduation-cap-line"></i><span>8</span></a>
                    <a href="#" class="navbar-link-toggle"><i class="ri-menu-line"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="navbar-menu">
        <div class="navbar-menu-header">
            <div class="navbar-menu-header-title">Menu</div>
            <button type="button" class="navbar-menu-header-close">&times;</button>
        </div>
        <div class="navbar-menu-body">
            <div class="navbar-menu-buttons">
                <a href="#" class="btn btn-blue">Mess</a>
                <a href="#" class="btn btn-outline-blue">Class Organizer</a>
            </div>
            <div class="navbar-menu-link">
                <a href="#" class="user_btn"><i class="ri-shield-user-fill"></i> User</a>
                <a href="#" class="teacher_btn"><i class="ri-shield-user-line"></i> Teacher</a>
                <a href="#" class="mess_btn"><i class="ri-file-list-line"></i> Mess Admin</a>
                <a href="#" class="school_btn"><i class="ri-edit-box-line"></i> Class Organizer Admin</a>
            </div>
        </div>
    </div>
    <!-- end: Navbar -->

    <!-- start: Category -->
    <section class="category-section">
        <div class="container">
            <div class="category-wrapper">
                <button type="button" class="category-arrow prev hidden"><i class="ri-arrow-left-s-line"></i></button>
                <button type="button" class="category-arrow next"><i class="ri-arrow-right-s-line"></i></button>
                <div class="category-link">
                    <a href="#" class="user_btn">User|Student</a>
                    <a href="#" class="mess_btn">Mess Admin</a>
                    <a href="#" class="teacher_btn">Class Organizer Teacher</a>
                    <a href="#" class="school_btn">Class Organizer Admin</a>
                    <a href="#" class="notice_btn">Notice</a>
                    <a href="#"></a>
                    <!-- <a href="#">Pet Supplies</a>
                    <a href="#">Office & School Supplies</a>
                    <a href="#">Office & School Supplies</a>
                    <a href="#">Automotive</a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- end: Category -->



    

<div class="sm:hidden">
    <label for="tabs" class="sr-only">Login OR Sign Up with </label>
    <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="user" class="">User</option>
        <option value="mess">Mess Admin</option>
        <option value="school">Class Organizer Admin</option>
        <option value="teacher">Teacher</option>
    </select>
</div>
<ul class="hidden text-sm font-medium text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
    <li class="w-full">
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



<!-- 
    <div class="container containerr">
		<ul class="tab-menu">
			<li class="active" data-target="home"><i class='bx bx-home-alt'></i> User</li>

			<li data-target="contact"><i class='bx bx-phone' ></i> Mess</li>
			<li data-target="settings"><i class='bx bx-cog' ></i> Organizer</li>
            <li class="dropdown-toggle">
				<i class='bx bx-user-circle' ></i> Sign Up<i class='bx bx-chevron-down' ></i>
				<ul class="dropdown">
					<li data-target="action">Tacher</li>
					<li data-target="link">Mess</li>
					<li data-target="do-something">Class Organizer</li>
				</ul>
			</li>
			<span class="line"></span>
		</ul>
		<div class="contents">
			<div class="content active" id="home">
				<h2>User Login</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, debitis id. Aliquam minus ut, officiis nihil. Est adipisci necessitatibus, minima.</p>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error voluptate alias aliquam ratione corrupti suscipit possimus molestias illum, quia fugit voluptatibus nostrum voluptas voluptates natus! Voluptas, vitae ullam, quis molestias ad ipsa a perferendis impedit sint.</p>
			</div>
			<div class="content" id="contact">
				<h2>Mess Admin Login</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad praesentium, maxime tempore nisi esse beatae harum, perspiciatis obcaecati corporis ipsum cupiditate a aperiam vero. Voluptas, ut nihil suscipit!</p>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error voluptate alias aliquam ratione corrupti suscipit possimus molestias illum, quia fugit voluptatibus nostrum voluptas voluptates natus! Voluptas, vitae ullam, quis molestias ad ipsa a perferendis impedit sint.</p>
			</div>
			<div class="content" id="settings">
				<h2>Class Organizer Admin Login</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, debitis id. Aliquam minus ut, officiis nihil. Est adipisci necessitatibus, minima.</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, quisquam harum dolores accusantium temporibus, cumque maiores iusto tempore repellat dicta hic quidem illum ullam animi architecto eos ipsum tenetur sint.</p>
			</div>
            <div class="content" id="action">
				<h2>Teacher Register</h2>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit quos aspernatur numquam repudiandae non consectetur repellendus?</p>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error voluptate alias aliquam ratione corrupti suscipit possimus molestias illum, quia fugit voluptatibus nostrum voluptas voluptates natus! Voluptas, vitae ullam, quis molestias ad ipsa a perferendis impedit sint.</p>
			</div>
			<div class="content" id="link">
				<h2>Mess Admin Register</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, debitis id. Aliquam minus ut, officiis nihil. Est adipisci necessitatibus, minima.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde maxime ea quibusdam libero sed animi repellat magni sit explicabo tenetur saepe porro quis aut molestias numquam nulla illo illum iste sequi eos dolores, et. Cum nihil consequatur voluptatum maiores quae! At a maxime nostrum mollitia qui aperiam delectus.</p>
			</div>
			<div class="content" id="do-something">
				<h2>Class Organizer Admin Register</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, debitis id. Aliquam minus ut, officiis nihil. Est adipisci necessitatibus, minima.</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt necessitatibus ipsa animi rerum nostrum sapiente ducimus repudiandae aut minima voluptatibus.</p>
			</div>
		</div>
	</div> -->


<div class="container-fluid mb-3">
    <div class="user" id="user">


            <div class="user_login_box">
                <main class="my-4 py-4 flex flex-col items-center justify-center bg-gray-50 space-y-10  px-1 sm:px-3 lg:px-4">
                <div>
                    <h1 class="mt-1 text-center text-xl font-extrabold text-gray-900">Sign in to User|Student account</h1>
                    <p class="mt-1 text-center text-sm text-gray-600">
                    Or
                    <a href="#" class="font-medium text-indigo-600 border-b border-indigo-600 user_c_btn"> register User|Student FREE account </a>
                    </p>
                </div>

                    <div class="max-w-md w-full mx-auto bg-white shadow rounded-lg p-4 space-y-6">
                        <form action="#" class="user_login"  role="form" id="user_logform">
                            <div class="flex flex-col">
                            <label class="text-sm font-bold text-gray-600 mb-1" for="email">Phone | User_Name</label>
                            <input class="border rounded-md bg-white px-3 py-2" type="text" name="username" id="user_username" placeholder="Enter your Phone | User_name" />
                            <input class="form-control" placeholder="Phone/User ID" name="user_melogin" id="user_melogin" type="hidden">

                            </div>
                            <div class="flex flex-col">
                            <label class="text-sm font-bold text-gray-600 mb-1" for="password">Password</label>
                            <input class="border rounded-md bg-white px-3 py-2" type="password" name="password" id="password" placeholder="Enter your Password" />
                            </div>
                            <div class="flex justify-between text-sm">
                            <div class="flex items-center space-x-2">
                                <input class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" type="checkbox" name="remember" id="remember" />
                                <label for="remember">Remember me</label>
                            </div>
                            <div>
                                <a class="text-indigo-600">Forgot your Password?</a>
                            </div>
                            </div>
                            <div>
                            <button type="button" id="user_loginbutton" class="w-full bg-indigo-600 text-white rounded-md p-2">Sign in</button>
                            </div>
                        </form>
                            <div class="relative pb-2">
                            <div class="absolute top-0 left-0 w-full border-b"></div>
                            <div class="absolute -top-3 left-0 w-full text-center">
                                <span class="bg-white px-3 text-sm">or continue via</span>
                            </div>
                            </div>
                            <div class="grid grid-cols-3 gap-3 text-xl">
                            <div class="border-2 rounded-md p-3 text-center cursor-pointer hover:border-gray-600">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="border-2 rounded-md p-3 text-center cursor-pointer hover:border-gray-600">
                                <i class="fab fa-facebook"></i>
                            </div>
                            <div class="border-2 rounded-md p-3 text-center cursor-pointer hover:border-gray-600">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            </div>

                    </div>            

                </main>
            </div>

            <div class="user_create_box hidden">
                
                <div class="my-4 py-8" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
                <div class="container-fluid mx-auto">
                    <div class="flex flex-col lg:flex-row w-11/12 lg:w-12/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
                    <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-2 bg-no-repeat bg-cover bg-center" style="background-image: url('../image/Register-Background.png');">
                    <h1 class="text-white text-3xl mb-3">Welcome</h1>
                    <div>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suspendisse aliquam varius rutrum purus maecenas ac <a href="#" class="text-purple-500 font-semibold border-2 border-rose-600 p-1 m-1 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500 rounded-full user_l_btn">Login Now</a></p>
                    </div>
                </div>
                    <div class="w-full lg:w-1/2 py-16 px-2">
                        <h2  class="text-3xl mb-4">Register User</h2>
                        <p class="mb-4">
                        Create User|Student account. It’s free and only take a minute
                        </p>
                    <form action="#" class="user_signup" role="form" id="user_signform">
                        <input class="form-control" placeholder="Phone/Student ID" name="user_mesignup" id="user_mesignup" type="hidden">

                        <div class="grid grid-cols-2 gap-5">
                            <input type="text" placeholder="Full Name"  name="fname" id="fname" class="border border-gray-400 py-1 px-2">
                            <input type="text" placeholder="User Name | Surname" name="susername" id="user_susername" class="border border-gray-400 py-1 px-2">
                        </div>
                        <div class="mt-5">
                            <input type="phone" placeholder="Phone"  name="phone" id="sphone" class="border  border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input type="text" placeholder="Email" name="semail" id="semail" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input name="spassword" id="spassword" type="number" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input type="password" placeholder="Confirm Password" name="scpassword" id="scpassword" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <button class="w-full bg-purple-500 py-3 text-center text-white" type="button" id="user_signupbutton">Register Now</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
                </div>
            
            </div>




    </div>
    <div class="mess" id="mess">
        
    
        <div class="mess_login_box">

            <div class="flex justify-center items-center my-4 py-4 bg-indigo-100">
                <div class="w-96 p-4 shadow-lg bg-white rounded-md">
                    <h1 class="text-3xl block text-center font-semibold"><i class="fa-solid fa-user"></i> Login Mess Admin</h1>
                    <p class="mt-1 text-center text-sm text-gray-600">
                Or
                <a href="#" class="font-medium text-indigo-600 border-b border-indigo-600 mess_c_btn"> register Mess Admin FREE account </a>
                </p>
                    <hr class="mt-1">
                    <form action="#"  class="mess_login"  role="form" id="mess_logform">
                        <div class="mt-1">
                            <input class="form-control" placeholder="Phone/User ID" name="mess_melogin" id="mess_melogin" type="hidden">

                            <label for="username" class="block text-base mb-2">Username</label>
                            <input name="username" id="mess_username" type="text" autofocus required class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Phone|Username..." />
                        </div>
                        <div class="mt-3">
                            <label for="password" class="block text-base mb-2">Password</label>
                            <input type="password" name="password" id="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Password..." />
                        </div>
                        <div class="mt-3 flex justify-between items-center">
                            <div>
                                <input type="checkbox">
                                <label>Remember Me</label>
                            </div>
                            <div>
                                <a href="#" class="text-indigo-800 font-semibold">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button type="button" id="mess_loginbutton" class="border-2 border-indigo-700 bg-indigo-700 text-white py-1 w-full rounded-md hover:bg-transparent hover:text-indigo-700 font-semibold"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;Login</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="mess_create_box hidden">
            
            <div class="my-4 py-8" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
            <div class="container-fluid mx-auto">
                <div class="flex flex-col lg:flex-row w-11/12 lg:w-12/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
                <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-2 bg-no-repeat bg-cover bg-center" style="background-image: url('../image/Register-Background.png');">
                    <h1 class="text-white text-3xl mb-3">Welcome</h1>
                    <div>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suspendisse aliquam varius rutrum purus maecenas ac <a href="#" class="text-purple-500 font-semibold border-2 border-rose-600 p-1 m-1 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500 rounded-full mess_l_btn">Login Now</a></p>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 py-16 px-2">
                    <h2  class="text-3xl mb-4">Register Mess</h2>
                    <p class="mb-4">
                    Create Mess Admin account. It’s free and only take a minute
                    </p>
                    <form action="#" class="mess_signup" role="form" id="mess_signform">
                        <input class="form-control" placeholder="Phone/Student ID" name="mess_mesignup" id="mess_mesignup" type="hidden">

                        <div class="grid grid-cols-2 gap-5">
                            <input type="text" placeholder="Full Name"  name="fname" id="fname" class="border border-gray-400 py-1 px-2">
                            <input type="text" placeholder="User Name | Surname" name="susername" id="mess_susername" class="border border-gray-400 py-1 px-2">
                        </div>
                        <div class="mt-5">
                            <input type="phone" placeholder="Phone"  name="phone" id="sphone" class="border  border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input type="text" placeholder="Email" name="semail" id="semail" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input name="spassword" id="spassword" type="number" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input type="password" placeholder="Confirm Password" name="scpassword" id="scpassword" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                    <div class="mt-5">
                        <button class="w-full bg-purple-500 py-3 text-center text-white" type="button" id="mess_signupbutton">Register Now</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        
        </div>

    </div>
    <div class="school" id="school">

            <div class="school_login_box">
                <main class="my-4 py-4 flex flex-col items-center justify-center bg-gray-50 space-y-10  px-1 sm:px-3 lg:px-4">
                <div>
                    <h1 class="mt-1 text-center text-xl font-extrabold text-gray-900">Sign in to Organizer Admin account</h1>
                    <p class="mt-1 text-center text-sm text-gray-600">
                    Or
                    <a href="#" class="font-medium text-indigo-600 border-b border-indigo-600 school_c_btn"> register Organizer Admin FREE account </a>
                    </p>
                </div>

                <div class="max-w-md w-full mx-auto bg-white shadow rounded-lg p-4 space-y-6">
                    <form action="#" class="school_login"  role="form" id="school_logform">
                        <div class="flex flex-col">
                        <label class="text-sm font-bold text-gray-600 mb-1" for="email">Phone | User_Name</label>
                        <input class="border rounded-md bg-white px-3 py-2" type="text" name="username" id="school_username" placeholder="Enter your Phone | User_name" />
                        <input class="form-control" placeholder="Phone/User ID" name="school_melogin" id="school_melogin" type="hidden">

                        </div>
                        <div class="flex flex-col">
                        <label class="text-sm font-bold text-gray-600 mb-1" for="password">Password</label>
                        <input class="border rounded-md bg-white px-3 py-2" type="password" name="password" id="password" placeholder="Enter your Password" />
                        </div>
                        <div class="flex justify-between text-sm">
                        <div class="flex items-center space-x-2">
                            <input class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" type="checkbox" name="remember" id="remember" />
                            <label for="remember">Remember me</label>
                        </div>
                        <div>
                            <a class="text-indigo-600">Forgot your Password?</a>
                        </div>
                        </div>
                        <div>
                        <button type="button" id="school_loginbutton" class="w-full bg-indigo-600 text-white rounded-md p-2">Sign in</button>
                        </div>
                    </form>
                        <div class="relative pb-2">
                        <div class="absolute top-0 left-0 w-full border-b"></div>
                        <div class="absolute -top-3 left-0 w-full text-center">
                            <span class="bg-white px-3 text-sm">or continue via</span>
                        </div>
                        </div>
                        <div class="grid grid-cols-3 gap-3 text-xl">
                        <div class="border-2 rounded-md p-3 text-center cursor-pointer hover:border-gray-600">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="border-2 rounded-md p-3 text-center cursor-pointer hover:border-gray-600">
                            <i class="fab fa-facebook"></i>
                        </div>
                        <div class="border-2 rounded-md p-3 text-center cursor-pointer hover:border-gray-600">
                            <i class="fab fa-linkedin"></i>
                        </div>
                        </div>
                    </div>            

                </main>
            </div>

            <div class="school_create_box hidden">
            
                <div class="my-4 py-8" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
                <div class="container-fluid mx-auto">
                    <div class="flex flex-col lg:flex-row w-11/12 lg:w-12/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
                    <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-2 bg-no-repeat bg-cover bg-center" style="background-image: url('../image/Register-Background.png');">
                        <h1 class="text-white text-3xl mb-3">Welcome</h1>
                        <div>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suspendisse aliquam varius rutrum purus maecenas ac <a href="#" class="text-purple-500 font-semibold border-2 border-rose-600 p-1 m-1 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500 rounded-full school_l_btn">Login Now</a></p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 py-16 px-2">
                        <h2  class="text-3xl mb-4">Register Organizer</h2>
                        <p class="mb-4">
                        Create Organizer Admin account. It’s free and only take a minute
                        </p>
                    <form action="#" class="school_signup" role="form" id="school_signform">
                        <input class="form-control" placeholder="Phone/Student ID" name="school_mesignup" id="school_mesignup" type="hidden">

                        <div class="grid grid-cols-2 gap-5">
                            <input type="text" placeholder="Full Name"  name="fname" id="fname" class="border border-gray-400 py-1 px-2">
                            <input type="text" placeholder="User Name | Surname" name="susername" id="school_susername" class="border border-gray-400 py-1 px-2">
                        </div>
                        <div class="mt-5">
                            <input type="phone" placeholder="Phone"  name="phone" id="sphone" class="border  border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input type="text" placeholder="Email" name="semail" id="semail" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input name="spassword" id="spassword" type="number" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input type="password" placeholder="Confirm Password" name="scpassword" id="scpassword" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <button class="w-full bg-purple-500 py-3 text-center text-white" type="button" id="school_signupbutton">Register Now</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
                </div>
            
            </div>

    </div>

    <div class="teacher" id="teacher">

        <div class="teacher_login_box">

            <div class="flex justify-center items-center my-4 py-4 bg-indigo-100">
                <div class="w-96 p-4 shadow-lg bg-white rounded-md">
                    <h1 class="text-3xl block text-center font-semibold"><i class="fa-solid fa-user"></i> Login Teacher Account</h1>
                    <p class="mt-1 text-center text-sm text-gray-600">
                Or
                <a href="#" class="font-medium text-indigo-600 border-b border-indigo-600 teacher_c_btn"> register your FREE account </a>
                </p>
                    <hr class="mt-1">
                    <form action="#"  class="teacher_login"  role="form" id="teacher_logform">
                        <div class="mt-1">
                            <input class="form-control" placeholder="Phone/User ID" name="teacher_melogin" id="teacher_melogin" type="hidden">

                            <label for="username" class="block text-base mb-2">Username</label>
                            <input name="teacher_username" id="username" type="text" autofocus required class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Phone|Username..." />
                        </div>
                        <div class="mt-3">
                            <label for="password" class="block text-base mb-2">Password</label>
                            <input type="password" name="password" id="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Password..." />
                        </div>
                        <div class="mt-3 flex justify-between items-center">
                            <div>
                                <input type="checkbox">
                                <label>Remember Me</label>
                            </div>
                            <div>
                                <a href="#" class="text-indigo-800 font-semibold">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button type="button" id="teacher_loginbutton" class="border-2 border-indigo-700 bg-indigo-700 text-white py-1 w-full rounded-md hover:bg-transparent hover:text-indigo-700 font-semibold"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;Login</button>
                        </div>
                    </form>

                </div>
            </div>


        </div>
        <div class="teacher_create_box hidden">
        
            <div class="my-4 py-8" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
            <div class="container-fluid mx-auto">
                <div class="flex flex-col lg:flex-row w-11/12 lg:w-12/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
                <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-2 bg-no-repeat bg-cover bg-center" style="background-image: url('../image/Register-Background.png');">
                    <h1 class="text-white text-3xl mb-3">Welcome</h1>
                    <div>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suspendisse aliquam varius rutrum purus maecenas ac <a href="#" class="text-purple-500 font-semibold border-2 border-rose-600 p-1 m-1 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500 rounded-full teacher_l_btn">Login Now</a></p>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 py-16 px-2">
                    <h2  class="text-3xl mb-4">Register</h2>
                    <p class="mb-4">
                    Create your account. It’s free and only take a minute
                    </p>
                    <form action="#" class="teacher_signup" role="form" id="teacher_signform">
                        <input class="form-control" placeholder="Phone/Student ID" name="teacher_mesignup" id="teacher_mesignup" type="hidden">

                        <div class="grid grid-cols-2 gap-5">
                            <input type="text" placeholder="Full Name"  name="fname" id="fname" class="border border-gray-400 py-1 px-2">
                            <input type="text" placeholder="User Name | Surname" name="susername" id="teacher_susername" class="border border-gray-400 py-1 px-2">
                        </div>
                        <div class="mt-5">
                            <input type="phone" placeholder="Phone"  name="phone" id="sphone" class="border  border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input type="text" placeholder="Email" name="semail" id="semail" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input name="spassword" id="spassword" type="number" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                        <div class="mt-5">
                            <input type="password" placeholder="Confirm Password" name="scpassword" id="scpassword" class="border border-gray-400 py-1 px-2 w-full">
                        </div>
                    <div class="mt-5">
                        <button class="w-full bg-purple-500 py-3 text-center text-white" type="button" id="teacher_signupbutton">Register Now</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        
        </div>

    </div>

    <div class="notice" id="notice">

    </div>

    <div id="myalert" style="display:none;">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="alert alert-info">
    			<center><span id="alerttext"></span></center>
    		</div>
   	 	</div>
    </div>


</div>


    <!-- start: Hero -->
    <header>
        <div class="container">
            <div class="hero-wrapper">
                <div data-aos="fade-up">
                    <img src="../img/mess2.jpg" alt="" class="hero-image active">
                    <img src="../img/mess.jpg" alt="" class="hero-image">
                    <img src="../img/mess2.jpg" alt="" class="hero-image">
                </div>
                <div class="hero-item-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <div class="hero-item active">
                        <div>
                            <div class="hero-item-title">Mess Management System</div>
                            <p class="hero-item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor dignissimos culpa mollitia magnam porro. Adipisci doloremque pariatur consequuntur odit!</p>
                            <a href="#" class="link-blue">View more <i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                    <div class="hero-item">
                        <div>
                            <div class="hero-item-title">Class Organizer</div>
                            <p class="hero-item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor dignissimos culpa mollitia magnam porro. Adipisci doloremque pariatur consequuntur odit!</p>
                            <a href="#" class="link-blue">View more <i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                    <div class="hero-item">
                        <div>
                            <div class="hero-item-title">Secondhome</div>
                            <p class="hero-item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor dignissimos culpa mollitia magnam porro. Adipisci doloremque pariatur consequuntur odit!</p>
                            <a href="#" class="link-blue">View more <i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end: Hero -->

    <!-- start: Features -->
    <section class="features-section">
        <div class="container">
            <div class="features-wrapper">
                <div data-aos="fade-up">
                    <div class="features-item-title">Farhad Foysal</div>
                    <p class="features-item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio laborum impedit assumenda odit accusantium natus, est, harum eos ducimus velit, quae quibusdam exercitationem maxime mollitia inventore.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="features-item-title">Farhad Foysal</div>
                    <p class="features-item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio laborum impedit assumenda odit accusantium natus, est, harum eos ducimus velit, quae quibusdam exercitationem maxime mollitia inventore.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="features-item-title">Farhad Foysal</div>
                    <p class="features-item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio laborum impedit assumenda odit accusantium natus, est, harum eos ducimus velit, quae quibusdam exercitationem maxime mollitia inventore.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Features -->


    <!-- start: Banner -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-box" data-aos="zoom-in-up">
                <h2 class="banner-title">Get 50% Off Your First Purchase!</h2>
                <p class="banner-description">Sign up for our newsletter and receive 10% off your first order, plus exclusive access to sales, promotions, and new products.</p>
                <a href="#" class="btn btn-white">Sign Up Now!</a>
            </div>
        </div>
    </section>
    <!-- end: Banner -->

    <!-- start: Footer -->
    <footer>
        <div class="container">
            <p class="footer-text">Made with ❤️ by <a href="#">Farhad Foysal</a>.</p>
        </div>
    </footer>
    <!-- end: Footer -->
    <script type="text/javascript">
    $(document).ready(function(){
        $('.school_btn').click(function(){
            $('.navbar-menu').removeClass('shown');
            $('#teacher').css('display','none');
            $('#user').css('display','none');
            $('#mess').css('display','none');
            $('#school').css('display','block');
            $('#notice').css('display','none');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.user_btn').click(function(){
            $('.navbar-menu').removeClass('shown');
            $('#teacher').css('display','none');
            $('#school').css('display','none');
            $('#mess').css('display','none');
            $('#user').css('display','block');
            $('#notice').css('display','none');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.teacher_btn').click(function(){
            $('.navbar-menu').removeClass('shown');
            $('#mess').css('display','none');
            $('#school').css('display','none');
            $('#user').css('display','none');
            $('#teacher').css('display','block');
            $('#notice').css('display','none');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.mess_btn').click(function(){
            $('.navbar-menu').removeClass('shown');
            $('#teacher').css('display','none');
            $('#school').css('display','none');
            $('#user').css('display','none');
            $('#mess').css('display','block');
            $('#notice').css('display','none');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.notice_btn').click(function(){
            $('.navbar-menu').removeClass('shown');
            $('#teacher').css('display','none');
            $('#school').css('display','none');
            $('#user').css('display','none');
            $('#mess').css('display','none');
            $('#notice').css('display','block');
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.user_c_btn').click(function(){
            $('.user_create_box').removeClass('hidden');
            $('.user_login_box').addClass('hidden');
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
            $('#tabs').click(function(){
                var op = $('#tabs').val();
                // alert('Selected Value: ' + op);
                if(op=='user'){
                    $('#teacher').css('display','none');
                    $('#school').css('display','none');
                    $('#mess').css('display','none');
                    $('#user').css('display','block');
                }else if(op=='mess'){
                    $('#teacher').css('display','none');
                    $('#school').css('display','none');
                    $('#user').css('display','none');
                    $('#mess').css('display','block');
                }else if(op=='school'){
                    $('#teacher').css('display','none');
                    $('#user').css('display','none');
                    $('#mess').css('display','none');
                    $('#school').css('display','block');
                }else if(op=='teacher'){
                    $('#mess').css('display','none');
                    $('#school').css('display','none');
                    $('#user').css('display','none');
                    $('#teacher').css('display','block');
                }

            });
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../dist/js/scriptp.js"></script>
    <script src="../dist/js/sign.js"></script>
</body>
</html>
<script>
    const allTabMenu = document.querySelectorAll('.tab-menu li');
const line = document.querySelector('.tab-menu .line');
const allContent = document.querySelectorAll('.content');

let width = allTabMenu[0].offsetWidth;
let left = allTabMenu[0].offsetLeft;
line.style.width = width + 'px';
line.style.left = left + 'px';

allTabMenu.forEach(item=> {
	if(!item.classList.contains('dropdown-toggle')) {
		item.addEventListener('click', function () {
			allTabMenu.forEach(i=> {
				i.classList.remove('active');
			})

			if(this.parentElement.classList.contains('dropdown')) {
				width = this.parentElement.parentElement.offsetWidth;
				left = this.parentElement.parentElement.offsetLeft;

				this.parentElement.parentElement.classList.add('active');
				this.classList.add('active');
			} else {
				width = this.offsetWidth;
				left = this.offsetLeft;

				this.classList.add('active');
			}

			line.style.width = width + 'px';
			line.style.left = left + 'px';

			allContent.forEach(content=> {
				if(this.dataset.target === content.id) {
					content.classList.add('active');
				} else {
					content.classList.remove('active');
				}
			})
		})
	}
})
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

	$(document).on('click', '#mess_signupbutton', function(){
		if($('#mess_susername').val()!='' && $('#mess_spassword').val()!=''){
			$('#mess_signupbutton').val('Signing up...');
			$('#myalert').slideUp();
			var signform = $('#mess_signform').serialize();
			$.ajax({
				method: 'POST',
				url: 'login.php',
				data: signform,

				success:function(data){
                    Swal.fire({
                                type: 'success',
                                title: "Mess Admin Successfully Signed Up!",
                                text: "THank you Admin! "+data,
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
					setTimeout(function(){
					$('#myalert').slideDown();
					$('#alerttext').html(data);
					$('#mess_signupbutton').val('Sign up');
					$('#mess_signform')[0].reset();
            //    alert(data);
					}, 2000);
				}
			});
		}
		else{
			alert('Please input all fields to Sign Up');
		}
	});

	$(document).on('click', '#mess_loginbutton', function(){
		if($('#mess_username').val()!=''){
			$('#mess_loginbutton').val('Logging in...');
			$('#myalert').slideUp();
			var logform = $('#mess_logform').serialize();
			setTimeout(function(){
				$.ajax({
					method: 'POST',
					url: './login.php',
					data: logform,
					success:function(data){
						if(data==1){

                            Swal.fire({
                                type: 'success',
                                title: "Mess Admin Successfully Logged In!",
                                text: "THank you Admin! "+data,
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });

							$('#myalert').slideDown();
							$('#alerttext').text('Login Successful. User Verified!');
							$('#mess_loginbutton').val('Thank You!');
							$('#mess_logform')[0].reset();
							setTimeout(function(){
								location.reload();
							}, 2000);
						}
						else{
                    //  alert(data);

                    Swal.fire({
                                type: 'warning',
                                title: "Mess Admin not Found!",
                                text: "Try again you, Admin! "+data,
                                icon: "warning",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });

							$('#myalert').slideDown();
							$('#alerttext').html(data);
							$('#mess_loginbutton').val('Try Again!');
							$('#mess_logform')[0].reset();
						}
					}
				});
			}, 2000);
		}
		else{
			alert('Please input Phone fields to Login');
		}
	});


    $(document).on('click', '#user_signupbutton', function(){
		if($('#user_susername').val()!='' && $('#user_spassword').val()!=''){
			$('#user_signupbutton').val('Signing up...');
			$('#myalert').slideUp();
			var signform = $('#user_signform').serialize();
			$.ajax({
				method: 'POST',
				url: 'login.php',
				data: signform,

				success:function(data){

                    Swal.fire({
                                type: 'success',
                                title: "User Successfully Signed Up!",
                                text: "THank you User! "+data,
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });

					setTimeout(function(){
					$('#myalert').slideDown();
					$('#alerttext').html(data);
					$('#user_signupbutton').val('Sign up');
					$('#user_signform')[0].reset();
            //    alert(data);
					}, 2000);
				}
			});
		}
		else{
			alert('Please input all fields to Sign Up');
		}
	});

	$(document).on('click', '#user_loginbutton', function(){
		if($('#user_username').val()!=''){
			$('#user_loginbutton').val('Logging in...');
			$('#myalert').slideUp();
			var logform = $('#user_logform').serialize();
			setTimeout(function(){
				$.ajax({
					method: 'POST',
					url: './login.php',
					data: logform,
					success:function(data){
						if(data==1){

                            Swal.fire({
                                type: 'success',
                                title: "User Successfully Logged In!",
                                text: "THank you User! "+data,
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });

							$('#myalert').slideDown();
							$('#alerttext').text('Login Successful. User Verified!');
							$('#user_loginbutton').val('Thank You!');
							$('#user_logform')[0].reset();
							setTimeout(function(){
								location.reload();
							}, 2000);
						}
						else{
                    //  alert(data);
                    Swal.fire({
                                type: 'warning',
                                title: "User not Found!",
                                text: "Try again you, User !"+data,
                                icon: "warning",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });

							$('#myalert').slideDown();
							$('#alerttext').html(data);
							$('#user_loginbutton').val('Try Again!');
							$('#user_logform')[0].reset();
						}
					}
				});
			}, 2000);
		}
		else{
			alert('Please input Phone fields to Login');
		}
	});


    $(document).on('click', '#school_signupbutton', function(){
		if($('#school_susername').val()!='' && $('#school_spassword').val()!=''){
			$('#school_signupbutton').val('Signing up...');
			$('#myalert').slideUp();
			var signform = $('#school_signform').serialize();
			$.ajax({
				method: 'POST',
				url: 'login.php',
				data: signform,

				success:function(data){

                    Swal.fire({
                                type: 'success',
                                title: "School Admin Successfully Signed Up!",
                                text: "THank you Admin, "+data,
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });

					setTimeout(function(){
					$('#myalert').slideDown();
					$('#alerttext').html(data);
					$('#school_signupbutton').val('Sign up');
					$('#school_signform')[0].reset();
            //    alert(data);
					}, 2000);
				}
			});
		}
		else{
			alert('Please input all fields to Sign Up');
		}
	});

	$(document).on('click', '#school_loginbutton', function(){
		if($('#school_username').val()!=''){
			$('#school_loginbutton').val('Logging in...');
			$('#myalert').slideUp();
			var logform = $('#school_logform').serialize();
			setTimeout(function(){
				$.ajax({
					method: 'POST',
					url: './login.php',
					data: logform,
					success:function(data){
						if(data==1){

                            Swal.fire({
                                type: 'success',
                                title: "Organizer Admin Successfully Logged In!",
                                text: "THank you Organizer! "+data,
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });

							$('#myalert').slideDown();
							$('#alerttext').text('Login Successful. User Verified!');
							$('#school_loginbutton').val('Thank You!');
							$('#school_logform')[0].reset();
							setTimeout(function(){
								location.reload();
							}, 2000);
						}
						else{

                            Swal.fire({
                                type: 'warning',
                                title: "School Admin not Found!",
                                text: "Try again you, Teacher! "+data,
                                icon: "warning",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });

                    //  alert(data);
							$('#myalert').slideDown();
							$('#alerttext').html(data);
							$('#school_loginbutton').val('Try Again!');
							$('#school_logform')[0].reset();
						}
					}
				});
			}, 2000);
		}
		else{
			alert('Please input Phone fields to Login');
		}
	});


    $(document).on('click', '#teacher_signupbutton', function(){
		if($('#teacher_susername').val()!='' && $('#teacher_spassword').val()!=''){
			$('#teacher_signupbutton').val('Signing up...');
			$('#myalert').slideUp();
			var signform = $('#teacher_signform').serialize();
			$.ajax({
				method: 'POST',
				url: 'login.php',
				data: signform,

				success:function(data){
                    Swal.fire({
                                type: 'success',
                                title: "Teacher Successfully Signed Up!",
                                text: "THank you Teacher! "+data,
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
					setTimeout(function(){
					$('#myalert').slideDown();
					$('#alerttext').html(data);
					$('#teacher_signupbutton').val('Sign up');
					$('#teacher_signform')[0].reset();
            //    alert(data);
					}, 2000);
				}
			});
		}
		else{
			alert('Please input all fields to Sign Up');
		}
	});

	$(document).on('click', '#teacher_loginbutton', function(){
		if($('#teacher_username').val()!=''){
			$('#teacher_loginbutton').val('Logging in...');
			$('#myalert').slideUp();
			var logform = $('#teacher_logform').serialize();
			setTimeout(function(){
				$.ajax({
					method: 'POST',
					url: './login.php',
					data: logform,
					success:function(data){
						if(data==1){
							$('#myalert').slideDown();
							$('#alerttext').text('Login Successful. User Verified!');
							$('#teacher_loginbutton').val('Thank You!');
							$('#teacher_logform')[0].reset();
                            Swal.fire({
                                type: 'success',
                                title: "Teacher Successfully Login!",
                                text: "THank you Teacher!"+data,
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
							setTimeout(function(){
								location.reload();
							}, 2000);
						}
						else{
                    //  alert(data);
                            Swal.fire({
                                type: 'warning',
                                title: "Teacher not Found!",
                                text: "Try again you, Teacher! "+data,
                                icon: "warning",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
							$('#myalert').slideDown();
							$('#alerttext').html(data);
							$('#teacher_loginbutton').val('Try Again!');
							$('#teacher_logform')[0].reset();
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
<script src="../js/sweetalert.min.js"></script>
<script src="../js/sweetalert2.all.min.js"></script>