<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'e-learning_db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
// Handle form submission for adding a lecture
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_lecture'])) {
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

    // Insert data into the lectures table
    $sql = "INSERT INTO lectures (title, description, youtube_link, document_path) VALUES ('$title', '$description', '$youtube_link', '$document_path')";

    if ($conn->query($sql) === TRUE) {
        $message = "Lecture added successfully!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle delete action
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Delete the lecture from the database
    $delete_sql = "DELETE FROM lectures WHERE id = $delete_id";
    if ($conn->query($delete_sql) === TRUE) {
        $message = "Lecture deleted successfully!";
    } else {
        $message = "Error deleting lecture: " . $conn->error;
    }
}

// Handle edit action
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];

    // Fetch the lecture data for editing
    $edit_sql = "SELECT * FROM lectures WHERE id = $edit_id";
    $result_edit = $conn->query($edit_sql);
    $edit_data = $result_edit->fetch_assoc();
}

// Handle update after edit form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_edit'])) {
    $edit_id = $_POST['lecture_id'];
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);
    $youtube_link = $conn->real_escape_string($_POST['youtube_link']);

    // Handle file upload
    $target_dir = "uploads/";
    $document_path = $edit_data['document_path'];  // Retain existing document if not uploading a new one

    if (!empty($_FILES["document"]["name"])) {
        $document_path = $target_dir . basename($_FILES["document"]["name"]);
        if (!move_uploaded_file($_FILES["document"]["tmp_name"], $document_path)) {
            $message = "Error uploading file.";
        }
    }

    // Update lecture data in the database
    $update_sql = "UPDATE lectures SET title='$title', description='$description', youtube_link='$youtube_link', document_path='$document_path' WHERE id='$edit_id'";

    if ($conn->query($update_sql) === TRUE) {
        $message = "Lecture updated successfully!";
        // After updating, reset $edit_data to avoid showing the edit form after the update
        $edit_data = null;
    } else {
        $message = "Error: " . $conn->error;
    }
}
$teacher_id = $_SESSION['teacher_id'];
// Fetch previous lectures
$sql = "SELECT * FROM lectures where teacher_id = '$teacher_id' ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Lecture</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .container {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-size: 14px;
            font-weight: 500;
            color: #495057;
        }

        input[type="text"], textarea, input[type="file"] {
            padding: 12px 16px;
            font-size: 16px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            width: 100%;
            box-sizing: border-box;
            background-color: #f8f9fa;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus, textarea:focus, input[type="file"]:focus {
            border-color: #007bff;
            outline: none;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        td.description {
            max-height: 15em;
            overflow-y: auto;
            white-space: normal;
            line-height: 1.5;
            padding-right: 5px;
            display: block;
        }

        button {
            padding: 12px 20px;
            font-size: 16px;
            color: #fff;
            background: #007bff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .back-button {
            background:rgb(57, 131, 196);
            color: #fff;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 8px;
            display: inline-block;
            text-align: center;
            margin-top: 20px;
            width: auto;
        }

        .back-button:hover {
            background-color:rgb(65, 140, 197);
        }

        .message {
            text-align: center;
            margin-top: 20px;
            color: green;
        }

        .error {
            color: red;
        }

        .lecture-table {
            margin-top: 30px;
            width: 100%;
            border-collapse: collapse;
        }

        .lecture-table th, .lecture-table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #dee2e6;
        }

        .lecture-table th {
            background-color: #007bff;
            color: white;
            font-weight: 600;
        }

        .lecture-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .lecture-table td a {
            color: #007bff;
            text-decoration: none;
        }

        .lecture-table td a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
                width: 100%;
            }

            .back-button {
                width: auto;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        
        <?php if (!empty($message)): ?>
            <p class="message <?php echo (strpos($message, 'Error') !== false) ? 'error' : ''; ?>">
                <?php echo $message; ?>
            </p>
        <?php endif; ?>

        <h2>Previous Lectures</h2>
        <?php if ($result->num_rows > 0): ?>
            <table class="lecture-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>YouTube Link</th>
                        <th>Document</th>
                        <th>Posted On</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $counter++; ?></td>
                            <td><?php echo htmlspecialchars($row['title']); ?></td>
                            <td class="description"><?php echo htmlspecialchars($row['description']); ?></td>
                            <td><a href="<?php echo htmlspecialchars($row['youtube_link']); ?>" target="_blank">View</a></td>
                            <td><a href="<?php echo htmlspecialchars($row['document_path']); ?>" target="_blank">Download</a></td>
                            <td><?php echo date('d M Y, H:i', strtotime($row['created_at'])); ?></td>
                            <td>
                                <a href="?edit_id=<?php echo $row['id']; ?>" class="btn btn-edit">Edit</a>
                                <a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this lecture?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="message">No lectures have been posted yet.</p>
        <?php endif; ?>

        <!-- Edit Lecture Form -->
        <?php if (isset($edit_data)): ?>
            <h2>Edit Lecture</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="lecture_id" value="<?php echo $edit_data['id']; ?>">
                <label for="title">Title</label>
                <input type="text" name="title" value="<?php echo htmlspecialchars($edit_data['title']); ?>" required>

                <label for="description">Description</label>
                <textarea name="description" required><?php echo htmlspecialchars($edit_data['description']); ?></textarea>

                <label for="youtube_link">YouTube Link</label>
                <input type="text" name="youtube_link" value="<?php echo htmlspecialchars($edit_data['youtube_link']); ?>">

                <label for="document">Document (optional)</label>
                <input type="file" name="document">

                <button type="submit" name="submit_edit">Update Lecture</button>
            </form>
        <?php endif; ?>

        <a href="index.php" class="back-button">Back</a>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
