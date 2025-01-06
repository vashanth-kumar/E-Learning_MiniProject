<?php
// Database connection
session_start();
$conn = new mysqli('localhost', 'root', '', 'e-learning_db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);
    $youtube_link = $conn->real_escape_string($_POST['youtube_link']);

    // Handle file upload
    $target_dir = "uploads/";
    $document_path = "";

    if (!empty($_FILES["document"]["name"])) {
        $document_path = $target_dir . basename($_FILES["document"]["name"]);
        if (!move_uploaded_file($_FILES["document"]["tmp_name"], $document_path)) {
            $message = "Error uploading file.";
        }
    }
    $teacher_id = $_SESSION['teacher_id'];

    // Insert data into the lectures table
    $sql = "INSERT INTO lectures (title, description, youtube_link, document_path,teacher_id) VALUES ('$title', '$description', '$youtube_link', '$document_path','$teacher_id')";

    if ($conn->query($sql) === TRUE) {
        $message = "Lecture added successfully!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Lecture</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 16px;
            color: #333;
        }

        input[type="text"], textarea, input[type="file"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 10px 15px;
            font-size: 16px;
            color: #fff;
            background: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .back-button {
            background:rgb(50, 142, 222);
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            text-align: center;
            margin-top: 10px;
        }

        .back-button:hover {
            background-color:rgb(103, 164, 211);
        }

        .message {
            text-align: center;
            margin-top: 10px;
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Post Lecture</h2>
        <?php if (!empty($message)): ?>
            <p class="message <?php echo (strpos($message, 'Error') !== false) ? 'error' : ''; ?>">
                <?php echo $message; ?>
            </p>
        <?php endif; ?>

        <form method="POST" action="" enctype="multipart/form-data">
            <label for="title">Lecture Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter lecture title" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="5" placeholder="Enter lecture description" required></textarea>

            <label for="youtube_link">YouTube Link:</label>
            <input type="text" id="youtube_link" name="youtube_link" placeholder="Enter YouTube link">

            <label for="document">Upload Document:</label>
            <input type="file" id="document" name="document">

            <button type="submit">Post Lecture</button>
        </form>

        <a href="index.php" class="back-button">Back</a>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
