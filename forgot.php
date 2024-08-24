


<?php

// Establish database connection
$conn = mysqli_connect('127.0.0.1:3306', 'u606446591_befitme', 'Sarthak@170823', 'u606446591_fitme');


// Step 1: Password recovery form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recover'])) {
    $email = $_POST['email'];

    // Step 2: Verify if the email exists in the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        $user_id = $user['id'];
        
        // Step 3: Generate a unique token or random password reset link
        $reset_token = generateResetToken(); // You can implement your own function to generate a token
        
        // Step 4: Store the token in the database
        $query = "INSERT INTO password_reset (user_id, reset_token) VALUES ('$user_id', '$reset_token')";
        mysqli_query($conn, $query);

        // Step 5: Send the password reset link via email
        $reset_link = 'https://befitme.site/forgot.php?token=' . $reset_token;
        $message = "Please click the following link to reset your password: $reset_link";
        $subject = 'Password Reset';
        $headers = 'From: noreply@befitme.site';
        mail($email, $subject, $message, $headers);
        
        // Notify the user that the password reset email has been sent
        echo "Password reset email has been sent to your email address.";
    } else {
        // Email doesn't exist in the database, show an error message
        echo "Email not found. Please check your email address.";
    }
}

// Step 6: Password reset form
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['token'])) {
    $reset_token = $_GET['token'];

    // Step 7: Verify the reset token
    $query = "SELECT * FROM password_reset WHERE reset_token = '$reset_token'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $reset_data = mysqli_fetch_assoc($result);
        $user_id = $reset_data['user_id'];

        // Display the password reset form
        ?>
        <form method="POST" action="reset_password.php">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" id="new_password" required>
            <input type="submit" name="reset" value="Reset Password">
        </form>
        <?php
    } else {
        // Invalid or expired reset token
        echo "Invalid or expired password reset token.";
    }
}

// Step 8: Reset password
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
    $user_id = $_POST['user_id'];
    $new_password = $_POST['new_password'];
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Update the user's password in the database
    $query = "UPDATE users SET password = '$hashed_password' WHERE id = '$user_id'";
    mysqli_query($conn, $query);

    // Delete the reset token from the database
    $query = "DELETE FROM password_reset WHERE user_id = '$user_id'";
    mysqli_query($conn, $query);

    // Notify the user that the password has been reset
    echo "Your password has been successfully reset.";
}

// Function to generate a unique token
function generateResetToken() {
    $token_length = 32;
    $token = bin2hex(random_bytes($token_length));
    return $token;
}

// Close the database connection
mysqli_close($conn);

?>








<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            font-weight: bold;
        }
        
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
        
        .success-message {
            color: green;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <input type="submit" name="recover" value="Recover Password" class="submit-btn">
            </div>
        </form>
        <?php if (!empty($error_message)) : ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php elseif (!empty($success_message)) : ?>
            <p class="success-message"><?php echo $success_message; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>