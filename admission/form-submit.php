<?php
    include('../db/db.php');
    session_start();

    $school_id;
    if (isset($_SESSION['school_id'])) {
        $school_id = $_SESSION['school_id'];
    }

    $uniqueId= time().'-'.mt_rand();

    $unique = strtoupper(bin2hex(random_bytes(3)));
    $ran_id = rand(time(), 100000000);

    $unique.' - '.$uniqueId.' - '.$ran_id;


    if(isset($_POST["select_class_session_d"])){
        ?>
    
     
    
                    <option id="about-tab" value="0" data-tabs-target="#about"   aria-controls="about" aria-selected="false">Select a Class</option>
    
                        <?php
                            $sql = "SELECT c.*, s.*, c.id as c_id, s.id as s_id FROM class_data c, session s WHERE c.session_id=s.id AND c.sId='$school_id' AND c.status='1' GROUP BY c.id ";
                            $i = 0;
                            $result = mysqli_query($con, $sql);
                            if(mysqli_num_rows($result)> 0){
                                while($row = mysqli_fetch_array($result)){
                                    $id = $row["c_id"];
                                    $sdate = $row['start_d'];
                                    $edate = $row['end_d'];
    
                                    $dates = strtotime($sdate);
                                    $datee = strtotime($edate);
                            
                                    $month = date('m', $dates);
                                    $mo = date('F', $dates);
                                    $year= date('Y', $dates);
                                    
                                    $mon = date('m', $datee);
                                    $m = date('F', $datee);
                                    $yea= date('Y', $datee);
                            
                                    $s_date = $mo .', '. $year;
                                    $e_date = $m.', '.$yea;
    
    
                                    ?>
                                    <option id="<?=$row['c_id']?>" value="<?=$row['c_id']?>" data-tabs-target="#stats"  aria-controls="stats" aria-selected="true"><?=$row['class_name'].' -'.$row['day_eve'].'-'.$row['programme'].'-'.$s_date.'-'.$e_date?></option>
                                    <?php
                                }
                            }
    
    }


    if(isset($_POST['candidate_application'])){
        if($_POST['select_class_session'] != '' || $_POST['select_class_session']!='0'){

            if(isset($_POST['gender']) && $_POST['gender']!=''){
                if(isset($_POST['mess_name']) && $_POST['mess_name'] !=''){


                    if(isset($_POST['phone']) && $_POST['phone']!=''){
    
                        $a_class_id = $_POST['select_class_session'];
                        $a_name = $_POST['mess_name'];
                        $a_phone = $_POST['phone'];
                        $a_email = $_POST['email'];
                        $a_birth_id = $_POST['u_mess_name'];
                        $a_sex = $_POST['gender'];
                        $a_birthday = $_POST['date'];
                        $a_f_name = $_POST['father_name'];
                        $a_f_nid = $_POST['father_nid'];
                        $a_m_name = $_POST['mother_name'];
                        $a_m_nid = $_POST['mother_nid'];
    
                        $a_g_phone = $_POST['guardian_phone'];
    
                        $division =  $_POST['division'];
                        $district = $_POST['district'];
                        $thana = $_POST['upazila'];
    
                        $a_union = $_POST['union'];
                        $a_ward = $_POST['ward'];

                        $password = $a_phone;
                        $a_about = $_POST['about'];
    
                        $dv = "SELECT d.*, c.*, u.*, d.name as dname, c.name as cname, u.name as uname, d.bn_name as dbname, c.bn_name as cbname, u.bn_name as ubname FROM divisions d, districts c, upazilas u WHERE d.id='$division' AND c.id='$district' AND u.id='$thana' ";
    
                        $dquery = mysqli_query($con,$dv);
                        if(mysqli_num_rows($dquery)> 0){
                            $drow = mysqli_fetch_assoc($dquery);
                            $a_division = $drow['dbname'];
                            $a_district = $drow['cbname'];
                            $a_upazila = $drow['ubname'];

                            $address = $a_ward.', '.$a_union.', '.$a_upazila.', '.$a_district.', '.$a_division;

                            $a_unionword = $a_ward.', '.$a_union;

                            $query="SELECT * FROM users WHERE phone='$a_phone'";

                            $queryr=mysqli_query($con,$query);
                    
                            if (mysqli_num_rows($queryr)>0){
                                ?>
                                      <span>Username already exist.</span>
                                  <?php
                            }elseif (!preg_match("/^[a-zA-Z0-9_]*$/",$a_phone)){
                                ?>
                                      <span style="font-size:11px;">Invalid Phone. Space & Special Characters not allowed.</span>
                                  <?php
                            }
                            else{

                                $qry = "SELECT user_id FROM users order by user_id desc";
                                $rslt = mysqli_query($con,$qry);
                                $row = mysqli_fetch_array($rslt);
                        
                                    if(mysqli_num_rows($rslt)<1){
                                        $lastnumber='';
                                    }else {
                                        $lastnumber=$row['user_id'];
                                    }
                        
                                if(empty($lastnumber)){
                                    $number = "U-FF-0000001";
                                }else{
                                    $idd = str_replace("U-FF-","",$lastnumber);
                                            $im= (int)$idd + 1;
                                    $id = str_pad($im, 7,0, STR_PAD_LEFT);
                                    $number = 'U-FF-' .$id;
                                }

                                $ran_id = rand(time(), 100000000);
                                $referr = strtoupper(bin2hex(random_bytes(1)));
                    
                                //$std_id=$mentorId.''.$phone;
                    
                                $phoneId=$a_phone.''.$referr;
                                $unique_id= $number.'-'.$a_phone;
                                $user_type=0;
                    
                                $sql = "INSERT INTO users (u_name, phone, password, user_id, unique_id, u_type, phone_pass, email) values ('$a_name', '$a_phone', '$password', '$number', '$unique_id', '$user_type', '$phoneId', '$a_email')";
                    
                                if($con->query($sql)){
                    
                                    $p_sql = "INSERT INTO users_profile (name, phone, pass, u_id, unique_id, u_type, email) values ('$a_name', '$a_phone', '$password', '$number', '$unique_id', '$user_type', '$a_email')";
                    
                                    if($con->query($p_sql)){


                                        $user_sql = "INSERT INTO students (uniqueId,uId,sId,stdName,stdPhone,stdEmail,nidBirth,dob,address,UnionWord,fatherName,motherName,fNid,mNid,gPhone,stdPass,gender,addDate) values ('$uniqueId','$unique_id','$school_id','$a_name','$a_phone','$a_email','$a_birth_id','$a_birthday','$address','$a_unionword','$a_f_name','$a_m_name','$a_f_nid','$a_m_nid','$a_g_phone','$password','$a_sex','$today')";

                                        if($con->query($user_sql)){

                                            $referr = strtoupper(bin2hex(random_bytes(4)));

                                            $class = "SELECT * FROM class_data WHERE id='$a_class_id' ";
                                            $classq = mysqli_query($con,$class);
                                            if(mysqli_num_rows($classq)> 0){
                                                $crow = mysqli_fetch_assoc($classq);
                                                $a_session_id = $crow["session_id"];
    
                                                $c_sql = "INSERT INTO candidate (unique_id,user_id,sId,class_id,session_id,serial_code,gender,submitted_date,about) values ('$uniqueId','$unique_id','$school_id','$a_class_id','$a_session_id','$referr','$a_sex','$today','$a_about')";

                                                if($con->query($c_sql)){
                                                    
                                                    if(isset($_FILES['updateimage'])){
    
                                                        $img_name = $_FILES['updateimage']['name'];
                                                        $img_type = $_FILES['updateimage']['type'];
                                                        $tmp_name = $_FILES['updateimage']['tmp_name'];
                                                        
                                                        $img_explode = explode('.',$img_name);
                                                        $img_ext = end($img_explode);
                                            
                                                        $extensions = ["jpeg", "png", "jpg"];
                                                        if(in_array($img_ext, $extensions) === true){
                                                            $types = ["image/jpeg", "image/jpg", "image/png"];
                                                            if(in_array($img_type, $types) === true){
                                                                $time = time();
                                                                $new_img_name = $time.$img_name;
                                                                if(move_uploaded_file($tmp_name,"../image/".$new_img_name)){
                                            
                                                                    $con->query("UPDATE users_profile SET photo='$new_img_name' WHERE unique_id='$unique_id'");
                                            
                                                                    $con->query("UPDATE students SET proPic='$new_img_name' WHERE uId='$unique_id'");
                                            

                                                                    if(isset($_SESSION['img'])){
                                                                        $deletepic =$_SESSION['img'];
                                                                        unlink("../image/".$deletepic);
                                                                    }
                                            
                                                                    if(isset($_SESSION['role'])){
                                                                        if($_SESSION['role']=='student'){
                                                                            echo "ধন্যবাদ! আপনার নতুন একটি form  সংরক্ষণ করা হয়েছে...";
                                                                        }else if($_SESSION['role']=='admin'){
                                                                            echo "ধন্যবাদ! আপনার নতুন একটি form  সংরক্ষণ করা হয়েছে...";
                                                                        }else {
                                                                            echo "ধন্যবাদ! আপনার নতুন একটি form  সংরক্ষণ করা হয়েছে...";
                                                                        }
                                                
                                                                    }else{
                                                                        echo "Welcome, Your Registration Form Successfully Submitted";
                                                                    }
                                                                    
                                                                    
                                                                }else{

                                                                        echo "Hey 1";
                                                                    
                                                                    
                                                                }
                                                    
                                                            }else{

                                                                    echo "দুঃখিত! জেপিজি অথবা পিএনজি ফাইলের ছবি আপ্লোড করুন..";
                                                                
                                                            }
                                                                
                                                        }else{

                                                                echo "file format দুঃখিত! জেপিজি অথবা পিএনজি ফাইলের ছবি আপ্লোড করুন...";
                                                            
                                                        }
                                                            
                                            
                                            
                                                    }else{
                                                        
                                                            echo "Please uploade a Image";
                                                        
                                                        
                                                    }

                                                }

                                            }


                                        }else{

                                        }


                                    }else{
                                        echo 'Sign up Successful. But Profile Not Created'.$phoneId.' <br> <code>'.$referr.' এই নম্বরটি মনে রাখুন~ধন্যবাদ</code> <br>';
                                    
                                    }
                    
                                }else{
                                    echo $phoneId.' <br> <code>'.$referr.'Please, Try Again!</code> <br>';
                                }


                            }
                
    
    
                        }else{
                            echo "Please Select Address Selections";
                        }
    
    
                    }else{
                        echo 'Please Enter Contact Mobile No';
                    }
    
    
                }else{
                    echo 'Please Enter Full Name';
                }
            }else{
                echo 'Please Select Gender';
            }

        }else{
            echo 'Please Selct a Class First';
        }
    }

?>