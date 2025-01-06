<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development Course</title>
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

        #bestpractices, #web-dev-topics, #tools, #subjects {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin: 20px 0;
            padding: 5px;
        }

        #bestpractices header, #web-dev-topics header, #tools header, #subjects header {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            padding: 5px;
            text-align: center;
            border-radius: 5px;
        }

        #bestpractices p, #web-dev-topics p, #tools p, #subjects p {
            font-size: 16px;
            margin: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Web Development Course</h1>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <a href="#introduction">Introduction</a>
        <a href="#key-concepts">Key Concepts</a>
        <a href="#best-practices">Best Practices</a>
        <a href="#web-dev-topics">Web Development Topics</a>
        <a href="#tools">Web Development Tools</a>
        <a href="#why-matters">Why Web Development Matters</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- Main Content Section -->
    <div class="main-content" id="introduction">
        <h2>Introduction to Web Development</h2>
        <p>
            Web development refers to the creation and maintenance of websites. It involves everything from building simple static pages to complex web applications. The primary languages used in web development are **HTML** (Hypertext Markup Language), **CSS** (Cascading Style Sheets), and **JavaScript**. These are the core technologies for building and styling web pages and enabling interactivity.
        </p>
        <p>
            Web development can be broadly classified into **front-end** (what users see) and **back-end** (server-side, databases) development. Full-stack development includes both front-end and back-end skills.
        </p>
    </div>

    <!-- Key Concepts Section -->
    <div class="main-content" id="key-concepts">
        <section id="subjects">
            <header>Key Concepts in Web Development</header>

            <div class="key-concepts">
                <div class="concept">
                    <h3>HTML</h3>
                    <p>
                        HTML (Hypertext Markup Language) is the standard language used to create the structure of web pages. It defines the elements and layout, including headings, paragraphs, links, images, and other components.
                    </p>
                </div>
                <div class="concept">
                    <h3>CSS</h3>
                    <p>
                        CSS (Cascading Style Sheets) is used for styling and visually enhancing web pages. It controls the layout, colors, fonts, and other design aspects of a site, ensuring a responsive and attractive user experience.
                    </p>
                </div>
                <div class="concept">
                    <h3>JavaScript</h3>
                    <p>
                        JavaScript is a programming language used to add interactivity to web pages. It enables dynamic content such as form validation, animations, and real-time updates.
                    </p>
                </div>
                <div class="concept">
                    <h3>Responsive Web Design</h3>
                    <p>
                        Responsive web design ensures that web pages look good and function properly on all devices, including desktops, tablets, and smartphones. It uses CSS media queries and flexible layouts.
                    </p>
                </div>
                <div class="concept">
                    <h3>Version Control (Git)</h3>
                    <p>
                        Git is a version control system that helps developers track changes in code, collaborate with others, and maintain different versions of a project. GitHub is a popular platform for hosting Git repositories.
                    </p>
                </div>
                <div class="concept">
                    <h3>Web Frameworks</h3>
                    <p>
                        Web frameworks like **React**, **Angular**, and **Vue.js** help developers build complex web applications quickly by providing reusable components, state management, and routing features.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- Best Practices Section -->
    <section id="bestpractices">
        <header>Best Practices for Web Development</header>
        <p>Write clean, semantic HTML that is accessible and SEO-friendly.</p>
        <p>Use CSS preprocessors like **SASS** or **LESS** for better maintainability.</p>
        <p>Ensure responsive design with mobile-first CSS and flexible layouts.</p>
        <p>Optimize web performance by minimizing CSS and JavaScript files.</p>
        <p>Use modern JavaScript frameworks (React, Angular, Vue) for faster development and scalability.</p>
    </section>

    <!-- Common Web Development Topics Section -->
    <section id="web-dev-topics">
        <header>Common Topics in Web Development</header>
        <p>
            Some important topics in web development include:
        </p>
        <p><strong>Frontend Frameworks:</strong> React, Angular, and Vue.js for building interactive web interfaces.</p>
        <p><strong>Backend Development:</strong> Server-side technologies such as Node.js, Python (Django), Ruby on Rails, and PHP.</p>
        <p><strong>APIs:</strong> RESTful APIs and GraphQL for building and consuming data services.</p>
        <p><strong>Database Management:</strong> Working with relational (MySQL, PostgreSQL) and NoSQL (MongoDB) databases for data storage.</p>
    </section>

    <!-- Web Development Tools Section -->
    <section id="tools">
        <header>Web Development Tools</header>
        <p>
            Some commonly used tools in web development include:
        </p>
        <ul>
            <li><strong>Visual Studio Code:</strong> A powerful code editor for writing HTML, CSS, JavaScript, and other web development languages.</li>
            <li><strong>Chrome DevTools:</strong> Built-in developer tools in Google Chrome for debugging, inspecting elements, and testing performance.</li>
            <li><strong>GitHub:</strong> A platform for version control and collaboration using Git repositories.</li>
            <li><strong>Figma:</strong> A design tool for creating web and UI designs, and collaborating with team members.</li>
        </ul>
    </section>

    <!-- Why Web Development Matters Section -->
    <div class="main-content" id="why-matters">
        <center><h2>Why Web Development Matters</h2></center>
        <p>
            Web development is at the core of the digital world. It enables businesses, individuals, and organizations to create online presence, reach wider audiences, and provide services in innovative ways. Good web development ensures a seamless user experience, security, and scalability for all users.
        </p>
    </div>

    <!-- Contact Section -->
    <div class="contact-section" id="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance with the Web Development course, please reach out to us:</p>
        <p>Email: <a href="mailto:support@endlesslearning.com">support@endlesslearning.com</a></p>
        <p>Phone: +1 800 123 4567</p>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Web Development Course. All rights reserved.</p>
    </footer>

</body>
</html>
