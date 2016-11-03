<!Doctype html>
<?php 
include_once "functions/functions.php";
include_once "PHLibrary.php";

?>

<html>
	<head>
	</head>
	<style>
	</style>
	<body>
		<h1> Sorting Demo </h1>
		<p>This page is for component testing the post displaying capabilities.</p>
		<p>Enter the name of a society below and all posts from that society will be displayed.</p>
		</p>
		<form action="" method="post">
			<h2>Find a Society to display posts from</h2>
			<input type="text" name="soc_name" placeholder="Enter a the title of a society." require="required" />
					<button name="search">Search</button>
		</form>

		<?php 
		if(isset($_POST['search']))
		{
			PrintSocietyPosts($_POST['soc_name']);
		}

		?>

		<br><br><p>Andrew Lin</p>
	</body>
</html>