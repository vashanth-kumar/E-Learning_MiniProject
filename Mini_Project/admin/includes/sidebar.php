<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: #ecf0f1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }
        .sidebar h2 {
            margin-bottom: 30px;
            font-size: 24px;
        }
        .sidebar a {
            text-decoration: none;
            color: #ecf0f1;
            margin: 10px 0;
            width: 90%;
            text-align: center;
            padding: 10px 15px;
            background-color: #34495e;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #1abc9c;
        }
        .content {
            flex: 1;
            background-color: #f3f4f6;
            padding: 20px;
            overflow-y: auto;
        }
        .content h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: calc(33.333% - 20px);
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .card h2 {
            margin-bottom: 10px;
            font-size: 22px;
        }
        .card p {
            color: #555;
        }
        @media (max-width: 768px) {
            .card {
                width: calc(50% - 20px);
            }
        }
        @media (max-width: 480px) {
            .card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="#">Manage Teachers</a>
        <a href="#">Manage Users</a>
        <a href="#">Manage Assinments</a>
        <a href="#">Manage Lactures</a>
        <a href="#">View Reports</a>
        <a href="../index.php">Back</a>
        <a href="Logout.php">Logout</a>
    </div>
</body>
</html>
