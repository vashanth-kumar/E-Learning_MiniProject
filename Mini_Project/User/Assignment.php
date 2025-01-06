<?php
// Database connection
$servername = "localhost";
$username = "root"; // Update to match your DB credentials
$password = "";     // Update to match your DB credentials
$dbname = "e-learning_db"; // Ensure this matches your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize search variable
$search = isset($_GET['search']) ? trim($_GET['search']) : "";

// Modify SQL query to include search functionality
$sql = "SELECT title, description, link, created_at FROM assignments";
if (!empty($search)) {
    $sql .= " WHERE title LIKE '%" . $conn->real_escape_string($search) . "%'";
}
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #007bff;
            color: #fff;
            width: 100%;
            box-sizing: border-box;
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 12px;
        }

        .nav-links a:hover {
            color: #f8d210;
        }

        .search-bar {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-bar input {
            padding: 8px 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .search-bar button {
            background: #28a745;
            color: #fff;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 12px;
        }

        /* Assessments Section */
        #assessments {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
        }

        #assessments h3 {
            font-size: 28px;
            color: #007bff;
            margin-bottom: 15px;
        }

        .assessment-container {
            width: 80%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .assessment-card {
            background: #ffffff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .assessment-card h4 {
            font-size: 22px;
            color: #007bff;
        }

        .assessment-card button {
            background: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .assessment-card button a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="nav-left">
            <div class="nav-links">
                <a href="../index.php">Home</a>
                <a href="game.php">Games</a>
                <a href="edit_profile.php">Edit Profile</a>
                <a href="Lectures.php">Lectures</a>
                <a href="Assignment.php">Assignments</a>
            </div>
            <div class="search-bar">
                <form method="GET" action="">
                    <input type="text" name="search" placeholder="Search assessments..." value="<?php echo htmlspecialchars($search); ?>">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
        <a href="Logout.php" class="logout">Logout</a>
    </div>

    <!-- Assessments Section -->
    <section id="assessments">
        <h3>Student Assessments</h3>
        <div class="assessment-container">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="assessment-card">';
                    echo '<h4>' . htmlspecialchars($row['title']) . '</h4>';
                    echo '<p>' . htmlspecialchars($row['description']) . '</p>';
                    echo '<p><strong>Created At:</strong> ' . htmlspecialchars($row['created_at']) . '</p>';
                    if (!empty($row['link'])) {
                        echo '<button><a href="' . htmlspecialchars($row['link']) . '" target="_blank">View Assessment</a></button>';
                    }
                    echo '</div>';
                }
            } else {
                echo '<p>No assessments found matching your search.</p>';
            }
            ?>
        </div>
    </section>
</body>
</html>

<?php
$conn->close();
?>
