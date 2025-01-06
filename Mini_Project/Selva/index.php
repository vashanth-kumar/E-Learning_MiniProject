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
            box-sizing: border-box; /* Ensures padding doesn't affect width */
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 20px; /* Spacing between logo and links */
        }

        .nav-links {
            display: flex;
            gap: 30px; /* Increased spacing between links */
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
            padding: 8px 12px; /* Added padding for clickable area */
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
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .search-bar button:hover {
            background-color: #218838;
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

        /* Responsive Navbar */
        @media (max-width: 768px) {
            .nav-left {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .nav-links {
                gap: 15px;
            }

            .search-bar {
                width: 100%;
            }

            .search-bar input {
                width: 100%;
            }
        }

          /* Courses Section */
          #courses {
            text-align: center;
            padding: 50px 20px;
            background-color: #f8f9fa;
            color: #333;
        }

        #courses h3 {
            font-size: 28px;
            color: #007bff;
            margin-bottom: 20px;
        }

        #courses p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #555;
        }

        .course-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Three courses per row */
            gap: 20px;
            margin: 0 auto; /* Center the grid */
            width: fit-content; /* Ensure the grid is sized only to its content */
            justify-content: center;
        }

        .course-card {
            background: #ffffff;
            padding: 20px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .course-card h4 {
            font-size: 22px;
            color: #007bff;
            margin-bottom: 10px;
        }

        .course-card a {
            text-decoration: none;
            color: #fff;
        }

        .course-card p {
            font-size: 16px;
            margin-bottom: 15px;
            color: #555;
            line-height: 1.5;
        }

        .course-card button {
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .course-card button:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .course-cards {
                grid-template-columns: repeat(2, 1fr); /* Two courses per row on smaller screens */
            }
        }

        @media (max-width: 480px) {
            .course-cards {
                grid-template-columns: 1fr; /* One course per row on very small screens */
            }
        }
        .back-button {
            
            top: 100px;
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

    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="nav-left">
            <div class="nav-links">
                <a href="../index.php">Home</a>
                <a href="#">Games</a>
                <a href="#">Edit Profile</a>
            </div>
            <!-- <div class="search-bar">
                <input type="text" placeholder="Search courses...">
                <button>Search</button>
            </div> -->
        </div>
        
    </div>

    <section id="courses">
        <h3>Our Quiz</h3>
        <p>Explore a range of courses designed to enhance your skills and empower your future.</p>
        <div class="course-cards">
            <!-- First Row -->
            <div class="course-card">
                <h4>C Programming</h4>
                <p>Master the fundamentals of C programming and build a strong coding foundation.</p>
                <button><a href="c_quiz.html">Enroll Now</a></button>
            </div>
            <div class="course-card">
                <h4>Java Programming</h4>
                <p>Learn object-oriented programming with Java and create powerful applications.</p>
                <button><a href="java_quiz-1.html">Enroll Now</a></button>
            </div>
            <div class="course-card">
                <h4>Web Development </h4>
                <p>Build modern websites with HTML and learn the basics of responsive web design.</p>
                <button><a href="html_quiz.html">Enroll Now</a></button>
            </div>
            <!-- Second Row -->
            <div class="course-card">
                <h4>JavaScript Programming</h4>
                <p>Understand JavaScript and create dynamic, interactive web applications.</p>
                <button><a href="javascript_quiz.html">Enroll Now</a></button>
            </div>
            <div class="course-card">
                <h4>Python Programming</h4>
                <p>Develop skills in Python for data analysis, AI, and software development.</p>
                <button><a href="python_quiz.html">Enroll Now</a></button>
            </div>
            <div class="course-card">
                <h4>Cloud Computing</h4>
                <p>It provides services like servers, storage, databases, and software online.</p>
                <button><a href="python_quiz.html">Enroll Now</a></button>
            </div>
        </div>
        <br>
        <div class="back-button">
        <button onclick="window.history.back()">Back</button>
    </div>
    </section>

</body>
</html>
