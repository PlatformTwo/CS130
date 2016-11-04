<?php
include("includes/connection.php");
if(isset($_POST['sign_up'])){
            $id=mysqli_real_escape_string($con,$_POST['u_id']);
            $name=mysqli_real_escape_string($con,$_POST['u_name']);
            $pass=mysqli_real_escape_string($con,$_POST['u_pass']);
            $email=mysqli_real_escape_string($con,$_POST['u_email']);
            $year=mysqli_real_escape_string($con,$_POST['u_year']);
          
            $status="unverified";
            $posts="No";
            $get_email="select * from users where user_email='$email'";
            $run_email=mysqli_query($con,$get_email);
            $check=mysqli_num_rows($run_email);
            
            if($check==1){
//                echo "<h2> This email is already registered!</h2>";
                echo "<script>alert('Email is already registered, please try another!')</script>";
                exit();
            }
            if(strlen($pass)<8){
                echo "<script>alert('Password should be at least 8 characters!')</script>";
                exit();
            }
            else{
                $insert="insert into users (user_id,user_name,user_pass,user_email,user_image,user_year,last_login,register_date,status,post) VALUES ('$id','$name','$pass','$email','default.jpg','$year',NOW(),NOW(),'$status','$posts')";
                $run_insert=mysqli_query($con,$insert);
            
            if($run_insert){
                $_SESSION['user_email']=$email;
                echo "<script>alert('Registration successful!')</script>";
                echo"<script>window.open('index2.php','_self')</script>";
            }
        }
    }
?>
