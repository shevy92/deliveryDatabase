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
			.inputFields {
				border-radius: 10px;
				height: 20px;
				width: 150px;
			}
			.inputFields2 {
				border-radius: 10px;
				height: 20px;
				width: 240px;
			}
			.regButton {
				text-align: center;
				margin: 0 auto;
				display: block;
			}
		</style>
	</head>


	<body>
		<form action="signup.php" method="POST">
			<h1>Sign up and become a member today!</h1>

			<div class="formfill">
				<h3>First Name</h3>
				<input type="text" name="first" class="inputFields"/>
				<h3>Last Name</h3>
				<input type="text" name="last"class="inputFields"/>
				<h3>Your digits please...</h3>
				<input type="text" name="phone"class="inputFields"/>
				<h3>Email?</h3>
				<input type="text" name="email"class="inputFields"/>
				<h3>Where do you live?</h3>
				<input type="text" name="address"class="inputFields2"/>
				
				<h3>Want a subscription?</h3>
				<input type="radio" name="subscriber" value="Y" checked>Yes
				<input type="radio" name="subscriber" value="N">No
			</div>


			<br/><br/>
			<input type="submit" value="Register" class="regButton"/>
		</form>
	</br>
		<form action="home.php" method="post" name="home" id="home">
				<input type="submit" name="Return Home" value="Return Home" class="regButton">
		</form>
	</body>
</html>