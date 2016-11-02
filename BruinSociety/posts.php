<!Doctype html>
<?php include ("functions/functions.php");?>
<html>
	<head>
	</head>
	<style>
	</style>
	<body>
		<div class="container">
			<div id="head_wrap">
			</div>
			<div id="content">
				<form action="" method="post">
					<h2>Find a Society to display posts from</h2>
					<input type="text" name="soc_name" placeholder="Enter a the title of a society." require="required" />
					<button name="search">Search</button>
				</form>

				<?php 
				$id = SearchSocieties();
				PrintSocietyPosts($id);

				?>

			</div>
		</div>
		<br><br><p>Andrew Lin</p>
	</body>
</html>