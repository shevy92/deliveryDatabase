<!DOCTYPE HTML>
<html>
	<head>
		<title>Customer Registration Form</title>
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
				margin-top: 10%;
			}
			.regButton {
				text-align: center;
				margin: 0 auto;
				display: block;
			}
		</style>
	</head>

	<body>

		<?php if($_POST):?>

		<?php

			$sql_link = new mysqli("localhost", "manager", "adminadmin", "order_system"); 

			$first_name = mysqli_escape_string($sql_link, $_POST['first']);
			$last_name = mysqli_escape_string($sql_link, $_POST['last']);
			$phone = mysqli_escape_string($sql_link, $_POST['phone']);
			$email = mysqli_escape_string($sql_link, $_POST['email']);
			$address = mysqli_escape_string($sql_link, $_POST['address']);

			$subscriber= mysqli_escape_string($sql_link, $_POST['subscriber']);
			
			$member_since = getdate();

			$query = sprintf("INSERT INTO customer_list (first_name, last_name, phone, email, address, subscriber) 
				VALUES ('%s', '%s', '%s', '%s', '%s','%s')", $first_name, $last_name, $phone, $email, $address, $subscriber);
			$result = mysqli_query($sql_link, $query);
		?>
			<h1>Congratulations <?php echo $_POST['first'];?>, you can now start shopping!</h1>
			</br>
			<form action="home.php" method="post" name="home" id="home">
				<input type="submit" name="Return Home" value="Return Home" class="regButton">
			</form>
		<?php else:?>
			<h1>No information provided.</h1>
		<?php endif;?>

	</body>
</html>