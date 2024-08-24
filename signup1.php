<!DOCTYPE html>
<html>
<head>
	<title>Signup Form</title>
<style>
body {
 //background-image: url("");
 background-color: cyan;
}
		form {
			margin: auto;
			width: 50%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			background-color: #f2f2f2;
		}

		input[type=text], input[type=password], input[type=email], input[type=number] {
			width: 100%;
			padding: 8px;
			margin: 5px 0;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		button:hover {
			background-color: #45a049;
		}

		.container {
			padding: 16px;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
			  	display: block;
			  	float: none;
			}
			.cancelbtn {
			  	width: 100%;
			}
		}
	</style>
</head>
<body>
   
	<div class="signup-form">
		<h2 align="center">FITME</h2>
		<form action="signup.php" method="post">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" required><br>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required><br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" required><br>
			<label for="gender">Gender:</label>
			<select name="gender" id="gender" required>
				<option value="">Select Gender</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
			</select><br><br>
			<label for="age">Age:</label>
			<input type="number" name="age" id="age" required>
			<label for="height">Height (in cm):</label>
			<input type="number" name="height" id="height" required>
			<label for="weight">Weight (in kg):</label>
			<input type="number" name="weight" id="weight" required>
			<input type="submit" name="submit" value="Signup">
		</form>
	</div>
</body>
</html>
