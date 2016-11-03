
//Author Sepideh Hashemzadeh 
<?php

 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include("includes/connection.php");
//$con=mysqli_connect("127.0.0.1","root","","social_network")  
if(isset($_POST['login'])){
//          

   
    $pass=mysqli_real_escape_string($con,$_POST['u_pass']);
    $email=mysqli_real_escape_string($con,$_POST['u_email']);
           
    $get_user="select * from users where user_email='$email' AND user_pass='$pass'";
    $run_user=mysqli_query($con,$get_user);
    $check=mysqli_num_rows($run_user);
    if($check==1){
        $_SESSION['user_email']=$email;
        //redirects to home page
        echo "<script>window.open('home.php','_self')</script>";
    }
        else{
            echo "<script>alert('Password or email is not correct!')</script>";
        }
    
}
?>

