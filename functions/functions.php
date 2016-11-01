<?php
    $con=mysqli_connect("127.0.0.1","root","","social_network") or die ("Connection was not established");
    function InsertUser(){
        global $con;
        if(isset($_POST['sign_up'])){
//            
            $id=$_POST['u_id'];
            $name=$_POST['u_name'];
            $pass=$_POST['u_pass'];
            $email=$_POST['u_email'];
            $year=$_POST['u_year'];
            $date=date("m-d-y");
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
                $insert="insert into users (user_id,user_name,user_pass,user_email,user_image,user_year,last_login,register_date,status,post) VALUES ('$id','$name','$pass','$email','default.jpg','$year','$date','$date','$status','$posts')";
                $run_insert=mysqli_query($con,$insert);
            
            if($run_insert){
                echo "<script>alert('Registration successful!')</script>";
            }
        }
    }
    }
?>