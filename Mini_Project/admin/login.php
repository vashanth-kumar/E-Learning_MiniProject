<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }
        .login-container label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #555;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form id="loginForm">
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Enter username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter password" required>
            
            <button type="button" onclick="validateLogin()">Login</button>
        </form>
        <p id="errorMessage" class="error-message"></p>
    </div>
    <script> // JavaScript to validate login
function validateLogin() {
    // Predefined admin credentials
    const predefinedUsername = "admin";
    const predefinedPassword = "admin123";

    // Get input values
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Error message element
    const errorMessage = document.getElementById("errorMessage");

    // Validate input
    if (username === predefinedUsername && password === predefinedPassword) {
        // Redirect to admin dashboard (placeholder page)
        alert("Login successful! Redirecting to admin panel...");
        window.location.href = "admin-dashboard.php"; // Replace with your admin panel URL
    } else {
        // Show error message
        errorMessage.textContent = "Invalid username or password!";
    }
}
</script>
</body>
</html>
