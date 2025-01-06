<?php
// Database connection
$servername = "localhost";
$username = "root"; // Change this if your DB username is different
$password = "";     // Change this if your DB password is set
$dbname = "e-learning_db";

session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Query to check if the user exists
    $sql = "SELECT * FROM students WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row['password'])) {
            echo "Login successful! Welcome, " . $row['name'];
            // Redirect to a dashboard or welcome page if needed
            $_SESSION['user_id']=$row['id'];
            header('Location: student_dashboard.php');
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "No account found with this email.";
    }
}

$conn->close();
?>
