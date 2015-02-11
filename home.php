<!DOCTYPE HTML>
<html>
	<head>
		<title>Customer Search</title>
		<style>
			body {
				font-family: Arial, Helvetica, sans-serif;
				font-size: .7em;
				background: gray;
				color: green;
				position: relative;

			}
			h1 {
				text-align: center;
				color: white;
			}
			.regButton {
				text-align: center;
				margin: 0 auto;
				display: block;
			}
			.formfill {
				margin: 0 auto;
				display: block;
				width: 50%;
				padding: 20px;
				border-radius: 20px;
				color: green;
				background: white;
			}
		</style>
	</head>

	<body>

		<h1>Search customer information by FIRST NAME</h1>
	
	<div class="formfill">
		<form action="home.php" method="POST">
			
			<h3>First Name</h3>
			<input type="text" name="first"/>
			<input type="submit" value="Search"/>
		</br></br>
		</form>

		<?php

			$sql_link = new mysqli("localhost", "manager", "adminadmin", "order_system"); 

			$query = "";

			if($_POST['first']) {
				$first_name = mysqli_escape_string($sql_link, $_POST['first']);

				$query = sprintf("SELECT * FROM customer_list WHERE first_name LIKE '%%%s%%'", $first_name);
			}

			else {
				
				//$query = "SELECT * FROM customer_list";

			}

			$result = mysqli_query($sql_link, $query);

		?>

		
		<?php foreach($result as $row):?>
			<h4>
				<?php 
					echo "Name: ", $row['first_name'],"\n";
					echo $row['last_name'], '<br />';
					echo "Phone number: ", $row['phone'], '<br />';
					echo "Email: ", $row['email'], '<br />';
					echo "Address: ", $row['address'], '<br />';
					echo "Subscriber: ", $row['subscriber'], '<br />';
				?>
			</h4>
		<?php endforeach;?>

		<form action="signupform.php" method="post" name="home" id="home">
				<input type="submit" name="Return Home" value="Return to Registration" class="regButton">
		</form>
	
	</div>


	</body>
</html>