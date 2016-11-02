<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome User!</title>
    </head>

<body>
<!--<h1> Welcome </h1>-->
<h1> Welcome <?php echo $_SESSION['user_email'];?></h1>

<p>
	<a href="posts.php"> Show posts for a society. </a>



</p>
</body>
</html>
