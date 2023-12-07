<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

* {
	font-family: 'Poppins', sans-serif;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

:root {
	--dark: #131313;
	--semi-dark: #272727;
	--light: #f5f5f5;
}
li {
	list-style: none;
}
a {
	text-decoration: none;
}

.b_menu {
	height: 70px;
	padding: 0 20px;
	background: var(--dark);
	display: flex;
	align-items: center;
	border-radius: 8px;
	position: relative;
}
.b_menu li a {
	width: 50px;
	height: 50px;
	display: flex;
	justify-content: center;
	align-items: center;
	color: var(--light);
	font-size: 20px;
	border-radius: 50%;
	transition: all .3s ease;
	position: relative;
	z-index: 100;
	top: 0;
}
.b_menu li a.active {
	width: 60px;
	height: 60px;
	top: -35px;
}
.b_menu li a.active:hover {
	background: transparent;
}
.b_menu li a:hover {
	background: var(--semi-dark);
}
.b_menu .indicator {
	position: absolute;
	width: 60px;
	height: 60px;
	border-radius: 50%;
	border: 4px solid var(--light);
	background: var(--dark);
	left: 20px;
	top: -30px;
	transition: all .3s ease;
}
.b_menu li {
	position: relative;
}
.b_menu li span {
	position: absolute;
	top: 100%;
	left: 50%;
	transform: translateX(-50%);
	color: var(--light);
	font-size: 13px;
	font-weight: 500;
	transition: all .3s ease;
	opacity: 0;
	visibility: hidden;
	transition-delay: 0s;
}
.b_menu li a.active + span {
	transition-delay: .1s;
	top: 50%;
	opacity: 1;
	visibility: visible;
}
    </style>



</head>
<body>

	<ul class="b_menu m-auto align-items-center text-center">
		<li>
			<a href="#" class="active"><i class='bx bx-home-alt'></i></a>
			<span>Home</span>
		</li>
		<li>
			<a href="#"><i class='bx bx-category' ></i></a>
			<span>Category</span>
		</li>
		<li>
			<a href="#"><i class='bx bx-line-chart' ></i></a>
			<span>Chart</span>
		</li>
		<li>
			<a href="#"><i class='bx bx-message-square-dots' ></i></a>
			<span>Inbox</span>
		</li>
		<li>
			<a href="#"><i class='bx bx-cog' ></i></a>
			<span>Setting</span>
		</li>
		<li class="indicator"></li>
	</ul>

	<script src="dist/js/bottomMenu.js"></script>
</body>
</html>