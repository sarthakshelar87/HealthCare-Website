<!DOCTYPE html>
<html>
<head>
    <title>Login Success</title>
    <style>
        body {
            background-color: lightgreen;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            text-align: center;
        }

        .options {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Successful!</h2>
        <p>Welcome to our website. Choose an option below:</p>
        <div class="options">
            <a href="profile.php">Your Profile</a>
            <a href="index.php">Our Home</a>
            

  
  <form method="POST" enctype="multipart/form-data">
    <input type="file" name="profile_picture" accept="image/*">
    <input type="submit" value="Upload Profile Picture">
  </form>


        </div>
    </div>
</body>
</html>

<?php
// Establish database connection
$conn = mysqli_connect('127.0.0.1:3306', 'u606446591_befitme', 'Sarthak@170823', 'u606446591_fitme');

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve the image file data
    $image_name = $_FILES['profile_picture']['name'];
    $image_tmp = $_FILES['profile_picture']['tmp_name'];
    $image_size = $_FILES['profile_picture']['size'];
    $image_type = $_FILES['profile_picture']['type'];

    // Read the image file content
    $profile_picture_data = file_get_contents($profile_picture_tmp);

    // Prepare and execute the SQL query
    $query = "INSERT INTO profile_picture (name, data) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'ss', $profile_picture_name, $profile_picture_data);
    mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Image stored in the database.";
    } else {
        echo "Failed to store the image in the database.";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>

