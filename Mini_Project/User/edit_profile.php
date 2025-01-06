<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root"; // Update this if your DB username differs
$password = "";     // Update this if your DB password differs
$dbname = "e-learning_db"; // Ensure this database exists

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Simulate logged-in user for demonstration (use session in production)
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 1; // Example user ID for testing
}
$user_id = $_SESSION['user_id'];
// echo"<h1>$user_id</h1>";
// Initialize variables
$name = $email = $phone = "";
$success_message = $error_message = "";

// Fetch user data
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT name, email, phone FROM students WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $name = $user['name'];
        $email = $user['email'];
        $phone = $user['phone'];
    } else {
        $error_message = "User not found!";
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);

    // Check if passwords match
    if (!empty($password) && $password !== $confirm_password) {
        $error_message = "Passwords do not match!";
    } else {
        // Hash the password if provided
        $password_query = "";
        if (!empty($password)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $password_query = ", password = '$hashed_password'";
        }

        // Update user data in the database
        $sql = "UPDATE students 
                SET name = '$name', phone = '$phone' $password_query 
                WHERE id = $user_id";

        if ($conn->query($sql) === TRUE) {
            $success_message = "Profile updated successfully!";
        } else {
            $error_message = "Error updating profile: " . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[readonly] {
            background-color: #f0f0f0; /* Light gray for read-only fields */
            cursor: not-allowed;
        }
        button {
            display: block;
            width: 100%;
            background: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #0056b3;
        }
        .message {
            text-align: center;
            margin-bottom: 20px;
            font-size: 16px;
            padding: 10px;
        }
        .success {
            color: #28a745;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }
        .error {
            color: #dc3545;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }
        .container .dashboard-link {
            text-align: center;
            margin-top: 10px;
        }
        .container .dashboard-link a {
            color: #2196f3;
            text-decoration: none;
            font-weight: bold;
        }
        .container .dashboard-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>

        <!-- Success or Error Message -->
        <?php if ($success_message): ?>
            <div class="message success"><?php echo $success_message; ?></div>
        <?php endif; ?>
        <?php if ($error_message): ?>
            <div class="message error"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>

            <label for="email">Email (Read-only):</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" readonly>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>">

            <label for="password">New Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter new password">

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm new password">

            <button type="submit">Save Changes</button>
        </form>
        <div class="dashboard-link">
            <p>Go To My Dashboard <a href="student_dashboard.php">Click Here</a></p>
        </div>
    </div>
</body>
</html>
