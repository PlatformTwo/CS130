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

                <h2>Current Societes (calling the listSocieties API)<br></h2>

                <?php
                    listSocieties();
                ?>

                <h2>Current Users (calling the listUsers API)<br></h2>

                <?php
                    listUsers();
                ?>

                <?php 
				    getSocietyMembers();
				?>

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

                <form action="" method="post">
					<h2>Join Society demo</h2>
                    <body> Just a demo to demonstrate the API functionality, Front-end will be using J-query to call this API <br></body>
					<input type="text" name="u_id" placeholder="Enter the user id" require="required" />
                    <input type="text" name="s_id" placeholder="Enter the society id" require="required" />
					<button name="join">Join</button>
				</form>
                <?php
                    joinSociety();
                ?>

                <form action="" method="post">
				    <h2>Quit Society demo</h2>
                    <body> Just a demo to demonstrate the API functionality, Front-end will be using J-query to call this API <br></body>
					<input type="text" name="u_id" placeholder="Enter the user id" require="required" />
                    <input type="text" name="s_id" placeholder="Enter the society id" require="required" />
					<button name="quit">Quit</button>
				</form>

                <?php
                    quitSociety();
                ?>

                <form action="" method="post">
                    <h2>Find the number of members in a society</h2>
                    <input type="text" name="s_id" placeholder="Enter the society id" require="required" />
					<button name="getNum">Go!</button>
				</form>

                <?php
                    printNum();
                ?>
			</div>
		</div>
	</body>
</html>

