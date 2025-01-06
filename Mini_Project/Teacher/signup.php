<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $designation = $_POST['designation'];
    $qualification = $_POST['qualification'];
    $password = $_POST['password'];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Database connection (replace with your database credentials)
    $conn = new mysqli('localhost','root','','e-learning_db');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert teacher data into the database
    $sql = "INSERT INTO teachers (name, email, phone, subject, designation, qualification, password) 
            VALUES ('$name', '$email', '$phone', '$subject', '$designation', '$qualification', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the teacher's home page upon successful sign-up
        
        header('Location: sign_in.php');  // Redirect to the index.php page (in the same folder)
        exit(); // Ensure no further code is executed after the redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>