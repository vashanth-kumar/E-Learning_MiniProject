<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "e-learning_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Delete Request
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM lectures WHERE id = $delete_id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Lecture deleted successfully!');</script>";
    } else {
        echo "<script>alert('Error deleting lecture: " . $conn->error . "');</script>";
    }
}

// Handle Update Request
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_lecture'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $youtube_link = $_POST['youtube_link'];
    $document_path = $_POST['document_path'];

    $sql = "UPDATE lectures SET 
            title='$title', 
            description='$description', 
            youtube_link='$youtube_link', 
            document_path='$document_path' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Lecture updated successfully!');</script>";
    } else {
        echo "<script>alert('Error updating lecture: " . $conn->error . "');</script>";
    }
}

// Fetch all lectures
$sql = "SELECT * FROM lectures";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Lectures</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .actions button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .edit-btn {
            background-color: #007BFF;
            color: white;
        }
        .delete-btn {
            background-color: #FF4D4D;
            color: white;
        }
        .edit-form {
            display: none;
        }
        .back-button {
            position: fixed;
            top: 20px;
            right: 20px;
        }
        .back-button button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        .back-button button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Manage Lectures</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>YouTube Link</th>
                <th>Document Path</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <form class="edit-form" action="" method="POST">
                            <td><?= $row['id'] ?></td>
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <td><input type="text" name="title" value="<?= $row['title'] ?>"></td>
                            <td><textarea name="description"><?= $row['description'] ?></textarea></td>
                            <td><input type="text" name="youtube_link" value="<?= $row['youtube_link'] ?>"></td>
                            <td><input type="text" name="document_path" value="<?= $row['document_path'] ?>"></td>
                            <td><?= $row['created_at'] ?></td>
                            <td class="actions">
                                <button type="submit" name="update_lecture" class="edit-btn">Save</button>
                                <button type="button" onclick="cancelEdit(this)">Cancel</button>
                            </td>
                        </form>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['title'] ?></td>
                            <td><?= $row['description'] ?></td>
                            <td><?= $row['youtube_link'] ?></td>
                            <td><?= $row['document_path'] ?></td>
                            <td><?= $row['created_at'] ?></td>
                            <td class="actions">
                                <button class="edit-btn" onclick="startEdit(this)">Edit</button>
                                <a href="?delete_id=<?= $row['id'] ?>" class="delete-btn" onclick="return confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No lectures found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <script>
        function startEdit(button) {
            const row = button.closest('tr');
            const editForm = row.previousElementSibling;
            editForm.style.display = 'table-row';
            row.style.display = 'none';
        }

        function cancelEdit(button) {
            const editForm = button.closest('form');
            const row = editForm.nextElementSibling;
            editForm.style.display = 'none';
            row.style.display = 'table-row';
        }
    </script>
    <br>
    <div class="back-button">
        <button onclick="window.history.back()">Back</button>
    </div>
</body>
</html>
