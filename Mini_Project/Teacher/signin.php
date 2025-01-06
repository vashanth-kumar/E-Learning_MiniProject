<?php
// signin.php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection (replace with your database credentials)
    $conn = new mysqli('localhost', 'root', '', 'e-learning_db');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the email exists
    $sql = "SELECT * FROM teachers WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the associated record
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row['password'])) {
            echo "Login successful! Welcome, " . $row['name'];
            $_SESSION['teacher_id'] = $row['id'];
            header('Location: index.php');  // Redirect to the index.php page (in the same folder)
            exit(); // Ensure no further code is executed after the redirect
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No account found with this email!";
    }

    $conn->close();
}
?>