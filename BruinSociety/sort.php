<!Doctype html>
<?php include ("functions/functions.php");?>
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

		<p>
		<form action="" method="post">
			<h3>Sort Posts</h3>
			<p>Options: AscDate for Ascending Date, DesDate for Descending Date, AscUN for Ascending Usernames, DesUN for Descending Usernames</p>
			<input type ="text" name="sortOpt" placeholder="Enter your desired sort option."/>
			<button name="sort">Sort</button>
		</form>

		</p>
	<?php
			$sortOpt=0;
			if(isset($_POST['sort']))
			{
				switch($_POST['sortOpt'])
				{
					case AscDate:
						$sortOpt = 2;
						break;
					case DesDate:
						$sortOpt = 1;
						break;
					case AscUN:
						$sortOpt = 3;
						break;
					case DesUN:
						$sortOpt = 4;
						break;
					default:
						break;
				}
				PrintSocietyPosts(1,$sortOpt);
			}
		?>


		<br><br><p>Andrew Lin</p>
	</body>
</html>

		
