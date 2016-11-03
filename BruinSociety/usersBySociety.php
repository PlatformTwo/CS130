<!Doctype html>
<!-- This is a demo page to test the getSocietyMembers API-->
<?php include ("userSociety.php");?>
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
					<h2>Find members of a society given a society id</h2>
					<input type="text" name="s_id" placeholder="Enter the society id" require="required" />
					<button name="getMembers">Search</button>
				</form>

				<?php 
				    getSocietyMembers();
				?>

                <form action="" method="post">
					<h2>Find societies of a user given a user id</h2>
					<input type="text" name="u_id" placeholder="Enter the user id" require="required" />
					<button name="getSocieties">Search</button>
				</form>

        		<?php 
				    getSocieties();
				?>

                <?
                    getNumMembers(1);
                ?>
			</div>
		</div>
	</body>
</html>