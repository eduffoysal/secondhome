<?php
include('../../db/db.php');
session_start();





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUBoX Admission System</title>

    <link rel="stylesheet" href="../../output/./output.css">

         <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

         <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../jquery-3.4.1.js"></script>
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    <link rel="stylesheet" href="../../icon/bootstrap-icons.css">

    <!-- <script src="ck/ckeditor.js"></script> -->
    <!-- <script src="f/admin/ckeditor/ckeditor.js"></script> -->

    <!-- <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script> -->
    <script src="../../jquery-3.5.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- swap -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- swap -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../../js/jquery-3.5.1.min.js"></script>

    <script src="../../bootstrap.min.js"></script>
    <script src="../../bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
    

<div class="min-h-screen flex justify-center items-center bg-sea1 bg-fixed bg-no-repeat bg-cover bg-center">
    <h1 class="font-black text-6xl">Admission Result</h1>
</div>

<div class="p-10">
    <h2 class="font-bold text-4xl">Search & Select Your School</h2>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab numquam eveniet molestias veniam, inventore sint voluptates nam provident impedit laborum ipsa vel quos amet laboriosam dolorum suscipit! Nihil eos repellendus blanditiis repellat laboriosam veniam quod maxime ab! Ea eveniet doloremque, excepturi totam, et molestias dicta accusamus quibusdam quas sunt inventore!</p>



    <div class="row">
        <div class="col-md-6">
                <div class="bg-gray-50 relative flex min-h-screenn flex-col items-center justify-center overflow-hidden py-6 sm:py-12">

                    <!-- ✅ Form Starts Here 👇 -->
                    <div class="p-10 shadow-lg bg-white">

                    <h3 class="font-bold text-3xl mb-10">Select Your School</h3>

                    <form class="gap-10">
                        
                        <div class="select form-control form-floating">

                        <div class="form-floating pt-1 pb-2">
                            <input type="text" onInput="searchSchool()" class="input-1 form-control bg-info-300 form-floating" placeholder="Please Enter Number Of Selection" name="search_school" id="search_school_key">
                            <label class="" for="">Input School Name to Search</label>
                        </div>

                        <div class="input-field w-full">
                            <select name="school_sel" id="school_sel" required>
                                <option value='0' disabled selected>Select your School|Collage</option>
                                <!-- <option value='male'>Male</option>
                                <option value='female'>Female</option>
                                <option value='other'>Others</option> -->
                            </select>
                        </div>
                        </div>

                        <div class="text-center go_main_apply_container m-auto pt-4" id="go_main_apply_container">
                                    <button
                                    type="button" id="go_main_btn"
                                    class="inline-block go_main_btn rounded-full border-2 border-info px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-info transition duration-150 ease-in-out hover:border-info-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-info-600 focus:border-info-600 focus:text-info-600 focus:outline-none focus:ring-0 active:border-info-700 active:text-info-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                    data-te-ripple-init>
                                    Go->Main
                                    </button>
                                    <button
                                    type="button"
                                    class="inline-block apply_btn mt-1 m-auto rounded-full bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" id="apply_btn">
                                    Apply Here
                                    </button>
                        </div>

                    </form>
                    </div>

                    </div>
        </div>
        <div class="col-md-6">
                <div class="bg-gray-50 relative flex min-h-screenn flex-col items-center justify-center overflow-hidden py-6 sm:py-12">

        <!-- ✅ Form Starts Here 👇 -->
        <div class="p-10 shadow-lg bg-white">

        <h3 class="font-bold text-3xl mb-10">View the Result</h3>

        <form class="grid sm:grid-cols-2 gap-10">
            
            <input type="phone" name="phone" id="phone" class="border-b border-gray-300 py-2 pl-2" placeholder="Enter Your Phone" />
            <input type="text" name="lastName" id="lastName" class="border-b border-gray-300 py-2 pl-2" placeholder="Type Your Serial Code" />

            <button class="bg-teal-600 text-lg font-semibold text-white sm:col-span-2 sm:w-1/2 py-2 mt-2 hover:bg-teal-700">GO</button>
        </form>
        </div>

                </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-6">
                <p>farhad</p>
            </div>
            <div class="col-6">
                <p>foysal</p>
            </div>
        </div>
    </div>


</div>

<div class="bg-sea2 min-h-screen bg-center bg-no-repeat bg-cover bg-fixed"></div>

<div class="bg-sea3 min-h-screen bg-fixed bg-no-repeat bg-cover"></div>



</body>
</html>
<script>
        function searchSchool(){

            var key = $("#search_school_key").val();

            $.ajax({
                url:'../admission.php',
                type:'post',
                data: {
                    search_school: key,
                    search_scl:true
                },
                success: function(response){
                    $('#school_sel').html(response);

                }
            });
        }
    </script>
<script>
$(document).ready(function(){




$('#school_sel').ready(function(){

    $.ajax({
      url:'../admission.php',
      type:'post',
      data: {
        select_school: true
      },
      success: function(response){
        $('#school_sel').html(response);

      }
    });

});    

$(document).on('click','#school_sel', function(){

    var op = $('#school_sel').val();

    if(op!=null || op!= '0'){
        $.ajax({
        url:'../admission.php',
        type:'post',
        data: {
            s : op,
            go_apply_btn: true
        },
        success: function(response){
            $('#go_main_apply_container').html(response);

        }
        });
    }

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
<script src="../../js/jquery-3.5.1.min.js"></script>
<script src="../../js/sweetalert.min.js"></script>
<script src="../../js/sweetalert2.all.min.js"></script>