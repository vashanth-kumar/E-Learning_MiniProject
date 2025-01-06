<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration and Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3f2fd;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        .form-container h2 {
            text-align: center;
            color: #2196f3;
        }
        .form-container form {
            display: flex;
            flex-direction: column;
        }
        .form-container form input {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #90caf9;
            border-radius: 5px;
        }
        .form-container form input:focus {
            border-color: #42a5f5;
            outline: none;
            box-shadow: 0 0 5px rgba(66, 165, 245, 0.5);
        }
        .form-container form button {
            padding: 10px;
            background-color: #2196f3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container form button:hover {
            background-color: #1e88e5;
        }
        .form-container .login-link {
            text-align: center;
            margin-top: 10px;
        }
        .form-container .login-link a {
            color: #2196f3;
            text-decoration: none;
            font-weight: bold;
        }
        .form-container .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Student Registration</h2>
    <form action="student_register.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
    </form>
    <div class="login-link">
        <p>Already have an account? <a href="Sign_in.php">Login here</a></p>
    </div>
</div>

</body>
</html>
