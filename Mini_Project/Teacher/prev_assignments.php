<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'e-learning_db');

session_start();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Edit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_id'])) {
    $edit_id = $_POST['edit_id'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);

    $updateSql = "UPDATE assignments SET title='$title', description='$description', link='$link' WHERE id=$edit_id";
    if ($conn->query($updateSql) === TRUE) {
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


// Handle Delete
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    
    // Delete the assignment
    $deleteSql = "DELETE FROM assignments WHERE id=$delete_id";
    if ($conn->query($deleteSql) === TRUE) {
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Fetch assignments from the database
$teacher_id = $_SESSION['teacher_id'];
$sql = "SELECT * FROM assignments WHERE teacher_id = '$teacher_id' ORDER BY created_at DESC;";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Assignments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }

        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        .table-container {
            margin: 0 auto;
            max-width: 1000px;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .back-button {
            display: inline-block;
            padding: 10px 15px;
            font-size: 16px;
            color: #fff;
            background:rgb(46, 121, 186);
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        .back-button:hover {
            background-color:rgb(43, 136, 206);
        }

        .no-data {
            text-align: center;
            color: #555;
            font-size: 18px;
        }

        td.description {
            max-height: 15em; /* Adjust this height to show exactly 4 lines */
            overflow-y: auto; /* Enable scrolling if content exceeds max height */
            white-space: normal; /* Ensure text wraps properly */
            line-height: 1.5; /* Set line height for proper spacing between lines */
            padding-right: 5px; /* Prevent scrollbar from overlapping text */
            display: block; /* Make the td a block element to control overflow */
        }

        .edit-button {
            color: white;
            background-color: #007bff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .edit-button:hover {
            background-color: #0056b3;
        }

        .delete-button {
            color: white;
            background-color: #dc3545;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #c82333;
        }

        .form-container {
            margin: 0 auto;
            max-width: 600px;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Previous Assignments</h2>
    <div class="table-container">
        <?php if ($result->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Link</th>
                        <th>Posted On</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $counter++; ?></td>
                            <td><?php echo htmlspecialchars($row['title']); ?></td>
                            <td class="description"><?php echo htmlspecialchars($row['description']); ?></td>
                            <td><a href="<?php echo htmlspecialchars($row['link']); ?>" target="_blank">View Link</a></td>
                            <td><?php echo date('d M Y, H:i', strtotime($row['created_at'])); ?></td>
                            <td>
                                <!-- Edit link -->
                                <a href="?edit_id=<?php echo $row['id']; ?>" class="edit-button">Edit</a>
                            </td>
                            <td>
                                <!-- Delete form -->
                                <form action="" method="POST" style="display:inline;">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this assignment?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="no-data">No assignments have been posted yet.</p>
        <?php endif; ?>
        <a href="index.php" class="back-button">Back</a>
    </div>

    <?php
    // Handle Edit
    if (isset($_GET['edit_id'])):
        $edit_id = $_GET['edit_id'];
        $sql = "SELECT * FROM assignments WHERE id = $edit_id";
        $edit_result = $conn->query($sql);
        $assignment = $edit_result->fetch_assoc();
    ?>
        <div class="form-container">
            <h3>Edit Assignment</h3>
            <form action="" method="POST">
                <input type="hidden" name="edit_id" value="<?php echo $assignment['id']; ?>">

                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($assignment['title']); ?>" required>

                <label for="description">Description</label>
                <textarea id="description" name="description" required><?php echo htmlspecialchars($assignment['description']); ?></textarea>

                <label for="link">Link</label>
                <input type="url" id="link" name="link" value="<?php echo htmlspecialchars($assignment['link']); ?>" required>

                <button type="submit">Update Assignment</button>
            </form>
        </div>
    <?php endif; ?>
</body>
</html>

<?php
$conn->close();
?>
