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
		<p>This page is for unit testing the filtering capabilities.</p>
		<p>Enter a filtering option and an optional filtering below and posts from the CS130 society, filtered accordingly, will show up, with default sorting.</p>

		<form action="" method="post">
			<h3>Sort Posts</h3>
			<p>Available options: username, curQtr</p>
			<p>Usage: If the filter option username is selected, you need to pass in the username whose posts you want to see as the filter argument. Only their posts will be shown.</p>
			<p>Usage: If the filter option curQtr is selected, no filter argument is needed. Only the posts from the most recent quarter will be shown.</p>
			<input type ="text" name="filterOpt" placeholder="Enter your desired filter option."/>
			<input type ="text" name="filterArg" placeholder="Enter your desired filter argument, if your filter option needs one."/>

			<button name="filter">Filter</button>
		</form>


		<br>
		<?php
			if(isset($_POST['filter']))
			{
				PrintSocietyPosts("CS130", "none", $_POST['filterOpt'], $_POST['filterArg']);
			}
		?>

	</body>
</html>	