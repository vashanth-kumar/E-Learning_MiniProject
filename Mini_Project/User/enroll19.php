<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relational Database & SQL Course</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }

        /* Header Section */
        header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            font-size: 30px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 30px;
        }

        #introduction h2 {
            color: purple;
            text-align: center;
        }

        /* Navigation Bar */
        nav {
            background-color: #28a745;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 20px;
            text-decoration: none;
            font-size: 18px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Main Content Section */
        .main-content {
            padding: 40px 10%;
            background-color: #fff;
        }

        .main-content h2 {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .main-content p {
            color: #555;
            line-height: 1.6;
            font-size: 18px;
        }

        /* Key Concepts Section */
        .key-concepts {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
            margin-top: 20px;
        }

        /* Individual Concept Card */
        .key-concepts .concept {
            background-color: #eef2f4;
            text-align: center;
            padding: 20px;
            width: 30%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        @media screen and (max-width: 768px) {
            .key-concepts .concept {
                width: 45%;
            }
        }

        @media screen and (max-width: 480px) {
            .key-concepts .concept {
                width: 100%;
            }
        }

        .key-concepts .concept h3 {
            font-size: 24px;
            color: #007BFF;
        }

        .key-concepts .concept p {
            font-size: 16px;
        }

        /* Contact Section */
        .contact-section {
            background-color: #28a745;
            color: white;
            padding: 25px;
            text-align: center;
        }

        .contact-section h2 {
            font-size: 28px;
        }

        .contact-section p {
            font-size: 18px;
        }

        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 5px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        #bestpractices, #sql-topics, #tools, #subjects {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin: 20px 0;
            padding: 5px;
        }

        #bestpractices header, #sql-topics header, #tools header, #subjects header {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            padding: 5px;
            text-align: center;
            border-radius: 5px;
        }

        #bestpractices p, #sql-topics p, #tools p, #subjects p {
            font-size: 16px;
            margin: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Relational Database & SQL Course</h1>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <a href="#introduction">Introduction</a>
        <a href="#key-concepts">Key Concepts</a>
        <a href="#best-practices">Best Practices</a>
        <a href="#sql-topics">Common Topics</a>
        <a href="#tools">SQL Tools</a>
        <a href="#why-matters">Why Relational Databases Matter</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- Main Content Section -->
    <div class="main-content" id="introduction">
        <h2>Introduction to Relational Databases & SQL</h2>
        <p>
            Relational databases are a type of database that store and organize data in structured tables, with relationships defined between different sets of data. They use **Structured Query Language (SQL)** to manage and manipulate data. SQL is the standard language for relational database management systems (RDBMS) like MySQL, PostgreSQL, Oracle, and SQL Server.
        </p>
        <p>
            A relational database uses tables to store data, where each table consists of rows (records) and columns (attributes). The relationships between these tables can be defined using keys, ensuring data integrity and allowing complex queries to be executed efficiently.
        </p>
    </div>

    <!-- Key Concepts Section -->
    <div class="main-content" id="key-concepts">
        <section id="subjects">
            <header>Key Concepts in Relational Databases & SQL</header>

            <div class="key-concepts">
                <div class="concept">
                    <h3>Database Normalization</h3>
                    <p>
                        Normalization is the process of organizing data in a database to reduce redundancy and improve data integrity. It involves dividing large tables into smaller, related tables and defining relationships between them.
                    </p>
                </div>
                <div class="concept">
                    <h3>Primary Key & Foreign Key</h3>
                    <p>
                        A primary key uniquely identifies each record in a table, while a foreign key is a field in one table that links to the primary key in another table, creating a relationship between the tables.
                    </p>
                </div>
                <div class="concept">
                    <h3>SQL Queries</h3>
                    <p>
                        SQL queries are used to interact with a relational database. Common operations include **SELECT**, **INSERT**, **UPDATE**, and **DELETE** to manage and manipulate data stored in tables.
                    </p>
                </div>
                <div class="concept">
                    <h3>Joins</h3>
                    <p>
                        Joins are used to combine data from two or more tables based on a related column. Common types of joins include **INNER JOIN**, **LEFT JOIN**, **RIGHT JOIN**, and **FULL JOIN**.
                    </p>
                </div>
                <div class="concept">
                    <h3>Indexes</h3>
                    <p>
                        Indexes are used to speed up data retrieval operations on a database. They are created on columns that are frequently used in queries to improve performance.
                    </p>
                </div>
                <div class="concept">
                    <h3>Transactions</h3>
                    <p>
                        A transaction is a sequence of operations performed as a single unit. Transactions in SQL follow the **ACID** properties (Atomicity, Consistency, Isolation, Durability) to ensure reliable processing.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- Best Practices Section -->
    <section id="bestpractices">
        <header>Best Practices for Relational Databases</header>
        <p>Normalize databases to reduce redundancy and ensure data integrity.</p>
        <p>Use appropriate indexing on frequently queried columns to optimize performance.</p>
        <p>Ensure proper use of foreign keys to maintain referential integrity between tables.</p>
        <p>Write optimized SQL queries to reduce resource consumption and improve response time.</p>
        <p>Regularly back up databases to protect data from loss or corruption.</p>
    </section>

    <!-- Common SQL Topics Section -->
    <section id="sql-topics">
        <header>Common SQL Topics</header>
        <p>
            Some common SQL topics include:
        </p>
        <p><strong>Subqueries:</strong> Queries nested inside other queries to extract more specific data.</p>
        <p><strong>Stored Procedures:</strong> Precompiled collections of SQL statements that can be executed on the server.</p>
        <p><strong>Triggers:</strong> Automated actions in response to changes in the database (e.g., after insert, update, or delete).</p>
        <p><strong>Data Integrity Constraints:</strong> Rules like **NOT NULL**, **UNIQUE**, **CHECK**, and **DEFAULT** to enforce data accuracy.</p>
    </section>

    <!-- SQL Tools Section -->
    <section id="tools">
        <header>SQL Tools</header>
        <p>
            Commonly used tools in SQL development and relational database management include:
        </p>
        <ul>
            <li><strong>MySQL Workbench:</strong> A visual tool for MySQL databases, used for designing, managing, and running SQL queries.</li>
            <li><strong>pgAdmin:</strong> A management tool for PostgreSQL databases, providing a graphical interface to manage databases.</li>
            <li><strong>SQL Server Management Studio (SSMS):</strong> A tool for managing SQL Server databases and running queries.</li>
            <li><strong>SQLite:</strong> A lightweight, serverless database engine used for local database storage.</li>
        </ul>
    </section>

    <!-- Why Relational Databases Matter Section -->
    <div class="main-content" id="why-matters">
        <center><h2>Why Relational Databases Matter</h2></center>
        <p>
            Relational databases provide a powerful way to store, manage, and retrieve data efficiently. With their structured format and the ability to enforce data integrity and consistency, they are essential for applications ranging from small-scale websites to large enterprise systems.
        </p>
    </div>

    <!-- Contact Section -->
    <div class="contact-section" id="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance with the Relational Database & SQL course, please reach out to us:</p>
        <p>Email: <a href="mailto:support@endlesslearning.com">support@endlesslearning.com</a></p>
        <p>Phone: +1 800 123 4567</p>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Relational Database & SQL Course. All rights reserved.</p>
    </footer>

</body>
</html>
