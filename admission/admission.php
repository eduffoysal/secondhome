<?php
include('../db/db.php');
session_start();


if(isset($_POST['select_school'])){
    $sql = "SELECT * FROM school ORDER BY sName ASC";


    ?>
    <option value="0" disabled selected>Select your School|Collage</option>
    <?php

    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
            ?>
            <option value='<?=$row['id']?>' id="<?=$row['unique_id']?>"><?=$row['sName']?></option>
            <?php
        }

    }else{
        ?>
        <option value="0" disabled selected>Not Found School|Collage</option>
        <?php
    }
}


if(isset($_POST['search_scl'])){
    
        if(!empty($_POST['search_school'])){
            $key = $_POST["search_school"];
            // print_r($key);
            $query = "SELECT * FROM school WHERE s_s_name LIKE '%$key%' OR sName LIKE '%$key%' OR sPhone LIKE '%$key%' ORDER BY CASE WHEN s_s_name LIKE '%$key%' THEN 0 WHEN sName LIKE '%$key%' THEN 0 WHEN sPhone LIKE '%$key%' THEN 0 ELSE 1 END, sName ";
            $result2 = mysqli_query($con,$query);
            $count = mysqli_num_rows($result2);
            if($count > 0){
    
                while($row = mysqli_fetch_assoc($result2)){
                    ?>
                    <option value='<?=$row['id']?>' id="<?=$row['unique_id']?>"><?=$row['sName']?></option>
                    <?php
                }
    
            } else{
    
                $sql = "SELECT * FROM school ORDER BY sName ASC";
    
    
                ?>
                <option value="0" disabled selected>Select your School|Collage</option>
                <?php
            
                $result = mysqli_query($con, $sql);
                if(mysqli_num_rows($result)> 0){
            
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <option value='<?=$row['id']?>' id="<?=$row['unique_id']?>"><?=$row['sName']?></option>
                        <?php
                    }
            
                }else{
                    ?>
                    <option value="0" disabled selected>Not Found School|Collage</option>
                    <?php
                }
                
            }
        }else{
    
            $sql = "SELECT * FROM school ORDER BY sName ASC";


            ?>
            <option value="0" disabled selected>Select your School|Collage</option>
            <?php
        
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result)> 0){
        
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <option value='<?=$row['id']?>' id="<?=$row['unique_id']?>"><?=$row['sName']?></option>
                    <?php
                }
        
            }else{
                ?>
                <option value="0" disabled selected>Not Found School|Collage</option>
                <?php
            }
            
        }
    
}

if(isset($_POST['go_apply_btn'])){
    $sid = $_POST['s'];
    $sql = "SELECT * FROM school WHERE id='$sid' ";

    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);

        if($row["s_s_name"] != ""){
            $link = $row['s_s_name'];
        }else if($row['sPhone']!= ''){
            $link = $row['sPhone'];
        } else{
            $link = $row['sId'];
        }

        ?>

        <a href="../edu/<?=$link?>" class="decoration-none text-decoration-none">
            <button
            type="button" id="go_main_btn"
            class="inline-block go_main_btn rounded-full border-2 border-info px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-info transition duration-150 ease-in-out hover:border-info-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-info-600 focus:border-info-600 focus:text-info-600 focus:outline-none focus:ring-0 active:border-info-700 active:text-info-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
            data-te-ripple-init>
            Go->Main
            </button>
        </a>
        <a href="<?=$link?>" class="decoration-none text-decoration-none">
            <button
            type="button"
            class="inline-block apply_btn mt-1 m-auto rounded-full bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" id="apply_btn">
            Apply Here
            </button>
        </a>

        <a href="../candidate/result/<?=$link?>" class="decoration-none text-dercoration-none">
        <button type="button" class="btn btn-outline-info w-full bg-teal-600 text-lg font-semibold text-dark  py-2 mt-3 hover:bg-teal-700">Check Result</button>
        </a>

        <?php

    }else{
        ?>
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
                                    <a href="result" class="decoration-none text-dercoration-none">
                                    <button type="button" class="btn btn-outline-info w-full bg-teal-600 text-lg font-semibold text-dark  py-2 mt-3 hover:bg-teal-700">Check Result</button>
                                    </a>
        <?php
    }

}

?>