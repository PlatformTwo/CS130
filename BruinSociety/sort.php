<!Doctype html>
<?php include_once "functions/functions.php";?>
<?php include_once "PHLibrary.php"; ?>
<html>
	<head>
	</head>
	<style>
	</style>
	<body>
		<h1> Sorting Demo </h1>
		<p>This page is for unit testing the sorting capabilities.</p>
		<p>Enter a sorting option below and Mock Posts from the CS130 society will be displayed sorted according to the provided option.
		</p>

	
		<form action="" method="post">
			<h3>Sort Posts</h3>
			<p>Options: AscDate, DesDate, AscUN, DesUN, AscTitle, DesTitle</p>
			<input type ="text" name="sortOpt" placeholder="Enter your desired sort option."/>
			<button name="sort">Sort</button>
		</form>

		<br>
	<?php
			if(isset($_POST['sort']))
			{
				PrintSocietyPosts("CS130", $_POST['sortOpt']);
			}
		?>


		<br><br><p>Andrew Lin</p>
	</body>
</html>

		
