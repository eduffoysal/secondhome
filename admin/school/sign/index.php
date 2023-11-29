<?php
include('../../../db/db.php');
session_start();

if(isset($_SESSION['user'])){
   $_SESSION['visitor_id']=$_SESSION['user'];
   $_SESSION['unique_id']=$_SESSION['user'];

   if(!isset($_SESSION['role'])){
        header("location:../../../login");
   }else{
        if($_SESSION['role']=='teacher'){
            header("location:../../../school/faculty");
        }elseif($_SESSION['role']=='mess'){
            header("location:../../mess");
        }elseif($_SESSION['role']=='user'){
            header("location:../../../");
        }elseif($_SESSION['role']=='manager'){
            header("location:../../../");
        }
   }

    if($_SESSION['school_id']!=''){
        header("location:../");
    }


}else{
   header("location:../../../login");
}


if(!isset($_SESSION['user'])){
   header('location:../../../login');
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Organizer Profile Registration</title>
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../../../js/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="../../../output/./output.css">
    <link rel="stylesheet" href="../../../css/mess_sign.css">
</head>
<body>
    
<div class="container">
        <header>Class Organizer Registration</header>

        <form action="#" class="mess_signup" role="form" id="mess_signform">
        <input class="form-control" placeholder="Phone/Student ID" name="mess_application" id="mess_application" type="hidden">
            <div class="form first">
                <div class="details personal">
                    <span class="title">School|University Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>School Full Name</label>
                            <input type="text" name="mess_name" id="mess_name" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Application Date</label>
                            <input type="date" name="date" id="date" placeholder="Enter birth date" >
                        </div>

                        <div class="input-field">
                            <label>School Email</label>
                            <input type="text" name="email" id="email" placeholder="Enter your email" >
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="phone" name="phone" id="phone" placeholder="Enter mobile number" >
                        </div>
                        <div class="input-field">
                            <label>Location URL</label>
                            <input type="text" name="location" id="location" placeholder="Enter map Location URL" >
                        </div>

                        <div class="input-field">
                            <label>School Description</label>
                            <input type="text" name="about" id="about" placeholder="Enter map Location URL" >
                        </div>


                    </div>
                </div>

                <div class="details ID">

                    <button class="nextBtn" type="button" id="mess_nextbutton">
                        <span class="btnText" >Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        
                        <div class="input-field">
                            <label>Select Division</label>
                            <span>Division</span>
                            <select id="division" name="division" class="division-input">
                                <option value="" selected disabled>Select Your Division</option>
                            <?php
                                $queryd = mysqli_query($con,"SELECT * FROM divisions");
                                while($rowd=mysqli_fetch_array($queryd)){
                                    ?>
                                        <option value="<?php echo $rowd['id'] ?>"><?php echo $rowd['bn_name'] ?></option>
                                    <?php
                                }
                            ?>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <span>District</span>
                            <select  id="district" name="district" class="district-input">
                                <!-- <option value="year" selected disabled>year</option> -->
                                
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Upazila</label>
                            <span>Upazila</span>
                            <select  id="upazila" name="upazila" class="upazila-input">
                                <!-- <option value="year" selected disabled>year</option> -->
                                
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Union</label>
                            <span>Union</span>
                            <select  id="union" name="union" class="year-input">
                                <!-- <option value="year" selected disabled>year</option> -->
                                
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Ward Number</label>
                            <span>Ward</span>
                            <select  id="word" name="ward" class="word-input">
                            <option value="">Select Word</option>
                            <option value="w-1">Word-1</option>
                            <option value="w-2">Word-2</option>
                            <option value="w-3">Word-3</option>
                            <option value="w-4">Word-4</option>
                            <option value="w-5">Word-5</option>
                            <option value="w-6">Word-6</option>
                            <option value="w-7">Word-7</option>
                            <option value="w-8">Word-8</option>
                            <option value="w-9">Word-9</option>

                                
                            </select>
                        </div>
                    </div>
                </div>

                <div class="details family">

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="button" type="button" id="mess_signupbutton">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 

            </div>
        </form>
        <div id="myalert" style="display:none;">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="alert alert-info">
    			<center><span id="alerttext"></span></center>
    		</div>
   	 	</div>
    </div>
    </div>


    <script>
    $(document).ready(function(){
        $("#division").change(function(){
            var divisionId=$(this).val();
            $.ajax({
                method:"POST",
                url:"../../../action.php",
                data:{idd:divisionId},
                // dataType:"html",
                success:function(data){
                    $("#district").html(data);
                }
            });
        });
        $("#district").change(function(){
            var districtId=$(this).val();
            $.ajax({
                method:"POST",
                url:"../../../action.php",
                data:{iddi:districtId},
                // dataType:"html",
                success:function(data){
                    $("#upazila").html(data);
                }
            });
        });
        $("#upazila").change(function(){
            var upazila=$(this).val();
            $.ajax({
                method:"POST",
                url:"../../../action.php",
                data:{thana:upazila},
                // dataType:"html",
                success:function(data){
                    $("#union").html(data);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function(){

        $(document).on('click', '#mess_signupbutton', function(){
		if($('#mess_name').val()!=''){
            // alert("hi");
			$('#mess_signupbutton').val('Signing up...');
			$('#myalert').slideUp();
			var signform = $('#mess_signform').serialize();
			$.ajax({
				method: 'POST',
				url: './school_application.php',
				data: signform,

				success:function(data){
                    Swal.fire({
                                type: 'success',
                                title: "School Successfully Created !",
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
               alert(data);
					}, 2000);
                    setTimeout(function(){
                  location.reload();
                }, 3000);
				}
			});
		}
		else{
			alert('Please input all fields to Sign Up');
		}
	});

    });
</script>
<script src="../../../js/jquery-3.5.1.min.js"></script>

<script src="../../../dist/js/mess_sign.js"></script>
<script src="../../../js/sweetalert.min.js"></script>
<script src="../../../js/sweetalert2.all.min.js"></script>
</body>
</html>