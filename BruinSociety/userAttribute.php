<?php
    // This php file is responsible to set the attributes of the user for current session
    $con=mysqli_connect("127.0.0.1","root","","social_network") or die ("Connection was not established");

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    // TODO: create APIs for join/ quit a society

    /**
    * This function get the current user's name and print it
    */
    function getName() {
        global $con;
		$email = $_SESSION['user_email'];
        $query = "select user_name from users where user_email = '$email'";
        $result = mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($result);
		print_r ($row['user_name']);
    }
	
	/**
    * This function get the current user's join date and print it
    */
	function getJoinDate() {
		global $con;
		$email = $_SESSION['user_email'];
        $query = "select register_date from users where user_email = '$email'";
        $result = mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($result);
		print_r ($row['register_date']);
	}
	
	/**
    * This function get the current user's year and print it
    */
	function getUserYear() {
		global $con;
		$email = $_SESSION['user_email'];
        $query = "select user_year from users where user_email = '$email'";
        $result = mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($result);
		print_r ($row['user_year']);
	}
 ?>