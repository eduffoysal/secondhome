<?php
include('../db/db.php');
session_start();

$row;
if (isset($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $sId = "CO-".$id;

    $sql = "SELECT * FROM school WHERE sPhone='$id' OR (sId='$sId' AND unique_id='$id') ";
    $result = mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_array($result);
        $_SESSION['school_id'] = $row['unique_id'];

    }else{
        header("location:./");
    }

}

// if(isset($_SESSION['user'])){
//    $_SESSION['visitor_id']=$_SESSION['user'];
//    $_SESSION['unique_id']=$_SESSION['user'];

//    if(!isset($_SESSION['role'])){
//         header("location:../../../login");
//    }else{
//         if($_SESSION['role']=='teacher'){
//             header("location:../../../school/faculty");
//         }elseif($_SESSION['role']=='mess'){
//             header("location:../../mess");
//         }elseif($_SESSION['role']=='user'){
//             header("location:../../../");
//         }elseif($_SESSION['role']=='manager'){
//             header("location:../../../");
//         }
//    }

//     if($_SESSION['school_id']!=''){
//         header("location:../");
//     }


// }else{
//    header("location:../../../login");
// }


// if(!isset($_SESSION['user'])){
//    header('location:../../../login');
// }





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduBox Admission System, Registration Form</title>
     <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

     <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../jquery-3.4.1.js"></script>
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    <link rel="stylesheet" href="../icon/bootstrap-icons.css">

    <!-- <script src="ck/ckeditor.js"></script> -->
    <!-- <script src="f/admin/ckeditor/ckeditor.js"></script> -->

    <!-- <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script> -->
    <script src="../jquery-3.5.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- swap -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- swap -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="../output/./output.css">
    <link rel="stylesheet" href="../css/mess_sign.css">

    <script src="../bootstrap.min.js"></script>
    <script src="../bootstrap.bundle.min.js"></script>
</head>
<body>
    
<div class="container">
        <header>Candidate Registration Form</header>

        <form action="#" class="mess_signup" role="form" id="mess_signform" method="POST" enctype="multipart/form-data">
        <input class="form-control" placeholder="Phone/Student ID" name="candidate_application" id="candidate_application" type="hidden">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Candidate Registration Form</span>

                    <div class="fields">
                    <div class="input-field">
                            <label>Apply for Class:-</label>
                            <select id="select_class_session" name="select_class_session" class="select_class_session bg-gray-50 border-0 border-b border-gray-200 text-gray-900 sm:text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" data-tabs-toggle="#class" role="tabClass">

                            </select>
                        </div>
                        <div class="input-field">
                            <label>Applicant's Full Name</label>
                            <input type="text" name="mess_name" id="mess_name" placeholder="Enter Student name" required>
                        </div>
                        <div class="input-field">
                            <label>Applicant's Birth Registration/NID</label>
                            <input type="text" name="u_mess_name" id="mess_name" placeholder="Enter Student NID/Birth Regisration No" required>
                        </div>
                        <div class="input-field">
                            <label>Applicant's Birth Date</label>
                            <input type="date" name="date" id="date" placeholder="Enter birth date" >
                        </div>
                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" id="gender" required>
                                <option disabled selected>Select gender</option>
                                <option value='male'>Male</option>
                                <option value='female'>Female</option>
                                <option value='other'>Others</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Applicant's Email</label>
                            <input type="text" name="email" id="email" placeholder="Enter your email" >
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="phone" name="phone" id="phone" placeholder="Enter mobile number" >
                        </div>
                        <div class="input-field">
                            <label>Father's Name</label>
                            <input type="text" name="father_name" id="father_name" placeholder="Enter Father Name" >
                        </div>

                        <div class="input-field">
                            <label>Father's NID</label>
                            <input type="text" name="father_nid" id="father_nid" placeholder="Enter Father's NID No" ></input>
                        </div>

                        <div class="input-field">
                            <label>Mother's Name</label>
                            <input type="text" name="mother_name" id="mother_name" placeholder="Enter Mother's Name" >
                        </div>

                        <div class="input-field">
                            <label>Mother's NID</label>
                            <input type="text" name="mother_nid" id="mother_nid" placeholder="Enter MOther's NID No" ></input>
                        </div>
                        <div class="input-field">
                            <label>Guardian's Mobile Number</label>
                            <input type="phone" name="guardian_phone" id="phone" placeholder="Enter mobile number" >
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

                        <div class="input-field">
                            <label>Upload Applicant's Picture</label>
                            <span>Upload Picture</span>
                            <div class="field image form-control">
                                <button type="button" style="color:green" class="btn btn-outline-warning round shadow-lg"><label style="cursor:pointer" for="imgup22"><span class="bi bi-file-image"></span> Upload Picture-<span style="width:20px; height:20px" class="bi bi-cloud-plus-fill"></span></label></button>
                                <input style="display:none" type="file" onchange="getPicture(this.value)" name="updateimage" class="form-control" id="imgup22" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                                <div style="color:red" class="btn btn-outline-info" id="display-picture" data-bs-toggle="modal" data-bs-target="#drop2"></div>
                            </div>

                            <script>
                                    function getPicture(imagenameup){
                                        var newimgup = imagenameup.replace(/^.*\\/,"");
                                        $('#display-picture').html(newimgup);
                                    }
                            </script>

                        </div>

                        <div class="input-field">
                            <label>Please Write Some Words|Line About Yourself</label>
                            <textarea type="text" name="about" id="about" placeholder="Please Write Some Words|Line About Yourself" ></textarea>
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


<div class="modal fade" id="drop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Update Your Profile Picture</h5>
        <h6 style="border-radius:6px; margin-left:5px" class="modal-title text-center text-warning bg-secondary border border-rounded " id="error_status_pic1"></h6>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>

    </div>
    </div>
</div>    

<script>
$(document).ready(function(){




$('#select_class_session').ready(function(){

    $.ajax({
      url:'./form-submit.php',
      type:'post',
      data: {
        select_class_session_d: true
      },
      success: function(response){
        $('#select_class_session').html(response);

      }
    });

});    



$(document).on('click','.uppicBtn1', function(){

    var u_id = $(this).attr('id');


    var po_textvcc1 = $('#imgup22').val();


    var po_formpic1 = new FormData($('#upformpic')[0]);


    if($.trim(po_textvcc1).length == 0){
    error_msgpic1 = "Please add a new image for update ";
    alert(error_msgpic1);
    $('#error_status_pic1').text(error_msgpic1);
    }else{
    error_msgpic1 = "";
    $('#error_status_pic1').text(error_msgpic1);
    }
    if(error_msgpic1 != ''){
    return false;
    }else{
    $.ajax({
            url:'po_action.php',
            type:'post',
            // data: $('#formdata').serialize(),
            data: po_formpic1,
            async: false,
            cache: false,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function(response){
            $('#error_status_pic1').html(response);
            alert(response); 

            }
        });
    }



});
});
</script>
    <script>
    $(document).ready(function(){
        $("#division").change(function(){
            var divisionId=$(this).val();
            $.ajax({
                method:"POST",
                url:"../action.php",
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
                url:"../action.php",
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
                url:"../action.php",
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
			$('#mess_signupbutton').val('Sending! Please Wait 1 Second...');
			$('#myalert').slideUp();
			var signform = $('#mess_signform').serialize();

            var po_textvcc1 = $('#imgup22').val();
            var po_formpic1 = new FormData($('#mess_signform')[0]);

            if($.trim(po_textvcc1).length == 0){
            error_msgpic1 = "Please add a new image for update ";
            alert(error_msgpic1);
            $('#error_status_pic1').text(error_msgpic1);
            }else{
            error_msgpic1 = "";
            $('#error_status_pic1').text(error_msgpic1);
            }
            if(error_msgpic1 != ''){
            return false;
            }else{
                $.ajax({
				method: 'POST',
				url: './form-submit.php',
				data: po_formpic1,
                async: false,
                cache: false,
                contentType: false,
                enctype: 'multipart/form-data',
                processData: false,
				success:function(data){
                    Swal.fire({
                                type: 'success',
                                title: "Apllicant's Form Submitted Result!",
                                text: "THank you! "+data,
                                icon: "success",
                                button: false,
                                dangerMode: true,
                                timer: 3000,
                            
                            });
                            alert(data);
					setTimeout(function(){
					$('#myalert').slideDown();
					$('#alerttext').html(data);
					$('#mess_signupbutton').val('Submit');
					$('#mess_signform')[0].reset();
                        
					}, 2000);
                    setTimeout(function(){
                        $('#myalert').slideUp();
                }, 3000);
				}
			});
            }

		}
		else{
			alert('Please input all fields to Sign Up');
		}
	});

    });
</script>
<script src="../js/jquery-3.5.1.min.js"></script>

<script src="../dist/js/mess_sign.js"></script>
<script src="../js/sweetalert.min.js"></script>
<script src="../js/sweetalert2.all.min.js"></script>
</body>
</html>