<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
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
            transition: color 0.3s;
            padding: 8px 12px;
        }

        .nav-links a:hover {
            color: #f8d210;
        }

        .logout {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 12px;
            transition: color 0.3s;
        }

        .logout:hover {
            color: #f8d210;
        }

        /* Dashboard Section */
        #dashboard {
            text-align: center;
            padding: 50px 20px;
            background-color: #f8f9fa;
            color: #333;
        }

        #dashboard h3 {
            font-size: 28px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Two cards per row */
            gap: 20px;
            margin: 0 auto;
            width: fit-content;
            justify-content: center;
        }

        .dashboard-card {
            background: #ffffff;
            padding: 20px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dashboard-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .dashboard-card h4 {
            font-size: 22px;
            color: #007bff;
            margin-bottom: 10px;
        }

        .dashboard-card p {
            font-size: 16px;
            margin-bottom: 15px;
            color: #555;
            line-height: 1.5;
        }

        .dashboard-card button {
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .dashboard-card button:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .dashboard-cards {
                grid-template-columns: 1fr; /* One card per row */
            }
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="nav-left">
            <div class="nav-links">
                <a href="../index.php">Home</a>
                <a href="prev_assignments.php">Assignments</a>
                <a href="prev_lectures.php">Lectures</a>
                <a href="profile.php">Profile</a>
            </div>
        </div>
        <a href="Logout.php" class="logout">Logout</a>
    </div>

    <!-- Dashboard Section -->
    <section id="dashboard">
        <h3>Teacher Dashboard</h3>
        <div class="dashboard-cards">
            <!-- Post Assignment Card -->
            <div class="dashboard-card">
                <h4>Post Assignment</h4>
                <p>Create and share assignments with your students easily.</p>
                <button onclick="location.href='assignments.php'">Post Assignment</button>
            </div>
            <!-- Add Lecture Card -->
            <div class="dashboard-card">
                <h4>Add Lectures</h4>
                <p>Upload and manage lecture materials for your courses.</p>
                <button onclick="location.href='lectures.php'">Add Lecture</button>
            </div>
        </div>
    </section>

</body>
</html>
