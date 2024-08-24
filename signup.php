<?php
// Establish database connection
$conn = mysqli_connect('127.0.0.1:3306', 'u606446591_befitme', 'Sarthak@170823', 'u606446591_fitme');

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Sanitize user inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $height = mysqli_real_escape_string($conn, $_POST['height']);
    $weight = mysqli_real_escape_string($conn, $_POST['weight']);

    // Check if the email already exists
    $check_sql = "SELECT id FROM users WHERE email = '$email'";
    $check_result = mysqli_query($conn, $check_sql);
    if (mysqli_num_rows($check_result) > 0) {
        // Email already exists, display error message
        $email_err = "This email is already registered.";
        if (!empty($email_err)) {
            header('Location: signup_error.php');
            exit;
        }
    } else {
        // Calculate BMI
        $height_m = $height / 100;
        $bmi = $weight / ($height_m * $height_m);

        // Insert user data into database
        $sql = "INSERT INTO users (name, email, password, gender, age, height, weight, bmi)
                VALUES ('$name', '$email', '$hashed_password', '$gender', '$age', '$height', '$weight', '$bmi')";
        if (mysqli_query($conn, $sql)) {
            // Redirect to success page
            header('Location: success.php');
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
// Close database connection
mysqli_close($conn);
?>
