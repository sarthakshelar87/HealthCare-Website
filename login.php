<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("login.jpg");
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            background-size: cover;
            
        }
        
        .header-patch {
            width: 100%;
            height: 15vh;
            background-color: gray;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .header-logo {
            width: 100px;
            height: auto;
        }
        
        .login-container {
    width: 300px;
    padding: 20px;
    background-color: transparent;
    border-radius: 5px;
    box-shadow: none;
    margin: 0 auto;
    margin-top: 20px;
    backdrop-filter: blur(0px);
    -webkit-backdrop-filter: blur(0px);
}
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .login-container input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        .login-container button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .login-container p {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header-patch">
        <img src="logo.png" alt="Logo" class="header-logo">
    </div>
<br>
<br>
<br>
<br>
    <div class="login-container">
        <h3 align="center">GREAT TO SEE YOU AGAIN!</h3>
        <h1 align="center">Login</h1>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="email">Email:</label>
                <br>
                <input type="email" name="email" id="email" required>
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password:</label>
                <br>
                <input type="password" name="password" id="password" required>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" value="Login" class="submit-btn" align="center">
            </div>
        </form>
    </div>
    <a href="forgot.php">forgot password</a>
<?php
// Establish database connection
$conn = mysqli_connect('127.0.0.1:3306', 'u606446591_befitme', 'Sarthak@170823', 'u606446591_fitme');

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Sanitize user inputs
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Retrieve user data from database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // User exists, verify password
        $user = mysqli_fetch_assoc($result);
        $hashed_password = $user['password'];
        
        if (password_verify($password, $hashed_password)) {
            // Password is correct, redirect to another page
            header('Location: login_successful.php');
            exit;
        } else {
            // Password is incorrect
            $login_err = "Invalid email or password.";
        }
    } else {
        // User does not exist
        $login_err = "Invalid email or password.";
    }

    if (!empty($login_err)) {
        header('Location: login_error.php');
        exit;
    }
}
// Close database connection
mysqli_close($conn);
?>
