<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Sign-Up & Sign-In</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 20px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .form-group select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        .container .login-link {
            text-align: center;
            margin-top: 10px;
        }
        .container .login-link a {
            color: #2196f3;
            text-decoration: none;
            font-weight: bold;
        }
        .container .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    


<div class="container">
    <h2>Teacher Sign-Up</h2>
    <form id="signupForm" action="signup.php" method="POST">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="subject">Subject Handle:</label>
            <input type="text" id="subject" name="subject" required>
        </div>

        <div class="form-group">
            <label for="designation">Designation:</label>
            <input type="text" id="designation" name="designation" required>
        </div>

        <div class="form-group">
            <label for="qualification">Qualification:</label>
            <input type="text" id="qualification" name="qualification" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" required>
        </div>

        <div id="error" class="error"></div>

        <button type="submit">Sign Up</button>
    </form>
    <div class="login-link">
        <p>Already have an account? <a href="sign_in.php">Login here</a></p>
    </div>
</div>

<script>
    document.getElementById('signupForm').addEventListener('submit', function(event) {
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm_password').value;

        if (password !== confirmPassword) {
            event.preventDefault();
            document.getElementById('error').textContent = 'Passwords do not match!';
        }
    });
</script>

</body>
</html>
