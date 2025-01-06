<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Platform</title>

    <style>/* Reset and Base Styles */
      /* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f8f9fa;
    text-align: center; /* Center all text content */
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    background: #007bff;
    color: #fff;
}

.navbar nav {
    display: flex;
    gap: 25px;
}

.navbar nav a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    transition: color 0.3s;
}

.navbar nav a:hover {
    color: #f8d210;
}

.navbar h1 {
    font-size: 24px;
}

/* Dropdown */
.dropdown {
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    top: 100%;
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1;
    min-width: 200px;
    overflow: hidden;
}

.dropdown-content a {
    color: #007bff;
    padding: 10px 20px;
    text-decoration: none;
    display: block;
    font-size: 16px;
    transition: background-color 0.3s, color 0.3s;
}

.dropdown-content a:hover {
    background-color: #f8f9fa;
    color: #0056b3;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Hero Section */
.hero {
    text-align: center;
    padding: 60px 20px;
    background: #e0f7fa;
    color: #007bff;
    margin-bottom: 20px;
}

.hero h2 {
    font-size: 36px;
    margin-bottom: 15px;
}

.hero p {
    font-size: 20px;
    margin-bottom: 20px;
}

.hero button {
    background: #28a745;
    color: #fff;
    padding: 15px 30px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.hero button:hover {
    background-color: #218838;
}

/* Section Titles */
section h3 {
    font-size: 28px;
    margin-bottom: 15px;
    color: #007bff;
}

/* About Section */
#about {
    padding: 40px 20px;
    background: #fff;
    margin-bottom: 20px;
}

#about p {
    font-size: 18px;
    margin-bottom: 10px;
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

.course-card a{
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

/* Contact Section */
#contact {
    text-align: center; /* Center-align the text */
    padding: 50px 20px; /* Add padding for spacing */
    background: #f8f9fa; /* Light background for better contrast */
    color: #333; /* Neutral text color */
    border-radius: 8px; /* Rounded edges for a polished look */
   
    max-width: 800px; /* Restrict max-width for better readability */
    margin: 20px auto; /* Center horizontally */
}

#contact h3 {
    font-size: 28px; /* Larger, bold heading */
    color: #007bff; /* Use brand color */
    margin-bottom: 20px; /* Add space below heading */
}

#contact p {
    font-size: 18px; /* Standardized font size */
    margin-bottom: 5px; /* Spacing between paragraphs */
    line-height: 1.6; /* Enhance readability */
}

#contact a {
    color: #007bff; /* Highlight links with brand color */
    text-decoration: none; /* Remove underline */
    
     /* Smooth hover effects */
}

#contact a:hover {
    color: #001eb3; /* Darker blue on hover */
   
}

/* Contact Info Container */
.contact-info {
    display: flex;
    flex-direction: column; /* Stack items vertically */
    gap: 15px; /* Space between items */
}

.contact-info p {
    margin: 0; /* Remove default margins for consistency */
    font-size: 18px; /* Match text size */
}

/* Footer */
footer {
    text-align: center;
    padding: 20px;
    background: #007bff;
    color: #fff;
    margin-top: 20px;
}


      </style>
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Navigation Bar -->
    <header>
        <div class="navbar">
            <h1>Endless Learning</h1>
            <nav>
              <a href="#home">Home</a>
              <a href="#about">About</a>
              <a href="#courses">Courses</a>
              <a href="#contact">Contact</a>
              <a href="Selva/">Quiz</a>
              <a href="user/chat.php">Chat</a>
              <div class="dropdown">
                <a href="#" id="login-btn">Login</a>
                <div class="dropdown-content" id="dropdown-menu">
                    <a href="admin/login.php">Admin</a>
                    <a href="Teacher/sign_up.php">Teacher</a>
                    <a href="User/sign_up.php">Student</a>
                </div>
            </div>
            
          </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <h2>Welcome to Endless Learning</h2>
        <p>Your gateway to unlimited learning opportunities!</p>
        <button onclick="window.location.href='#courses';">Get Started</button>
    </section>

    <!-- About Section -->
    <section id="about">
      <h3>About Us</h3>
      <p>Why Choose Us?</p>
      <p>At Endless Learning, we believe in the power of education to transform lives. Our mission is to provide a platform where learning is accessible, flexible, and empowering for everyone, regardless of their background or location.</p>
      <p>We specialize in offering a wide range of online courses, tailored to meet the evolving needs of learners across various industries. From technology to personal development, our courses are designed by experts to deliver practical skills and in-depth knowledge.</p>
      
      
      
  </section>
  

  <section id="courses">
    <h3>Our Courses</h3>
    <p>Explore a range of courses designed to enhance your skills and empower your future.</p>
    <div class="course-cards">
        <!-- First Row -->
        <div class="course-card">
            <h4>C Programming</h4>
            <p>Master the fundamentals of C programming and build a strong coding foundation.</p>
            <button><a href="User/sign_up.php">Enroll Now</a></button>
        </div>
        <div class="course-card">
            <h4>Java Programming</h4>
            <p>Learn object-oriented programming with Java and create powerful applications.</p>
            <button><a href="User/sign_up.php">Enroll Now</a></button>
        </div>
        <div class="course-card">
            <h4>Web Development </h4>
            <p>Build modern websites with HTML and learn the basics of responsive web design.</p>
            <button><a href="User/sign_up.php">Enroll Now</a></button>
        </div>
        <!-- Second Row -->
        <div class="course-card">
            <h4>JavaScript Programming</h4>
            <p>Understand JavaScript and create dynamic, interactive web applications.</p>
            <button><a href="User/sign_up.php">Enroll Now</a></button>
        </div>
        <div class="course-card">
            <h4>Python Programming</h4>
            <p>Develop skills in Python for data analysis, AI, and software development.</p>
            <button><a href="User/sign_up.php">Enroll Now</a></button>
        </div>
        <div class="course-card">
          <h4>Cloud Computing</h4>
          <p>It provides services like servers, storage, databases, and software online.</p>
          <button><a href="User/sign_up.php">Enroll Now</a></button>
      </div>
    </div>
</section>

    <!-- Contact Section -->
    <section id="contact">
      <h3>Contact Us</h3>
      <p>If you have any questions or need assistance, we’re here to help!</p>
      <div class="contact-info">
          <p>
              Email: <a href="mailto:support@endlesslearning.com">support@endlesslearning.com</a><br>
         
              Phone: +91 9994175646 <br>
          
              Help Form: <a href="https://forms.gle/PYUVzgHBN63FThuQ6" target="_blank">Clik Here</a>
          </p>
          
          <!-- <a href="#"><i class='bx bx-phone'></i></a> <a href="#"><i class='bx bxl-facebook'></i></a>
          
          <a href="#"><i class='bx bxl-instagram'></i></a> -->
          

          
      </div>
  </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Endless Learning. All rights reserved.</p>
    </footer>

    <script>
      // Toggle dropdown visibility
      document.getElementById('login-btn').addEventListener('click', function (event) {
          event.preventDefault(); // Prevent default link behavior
          const dropdown = document.getElementById('dropdown-menu');
          // Toggle visibility
          dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
      });
  
      // Close the dropdown if clicked outside
      document.addEventListener('click', function (event) {
          const dropdown = document.getElementById('dropdown-menu');
          const loginBtn = document.getElementById('login-btn');
          if (!dropdown.contains(event.target) && event.target !== loginBtn) {
              dropdown.style.display = 'none';
          }
      });
  </script>
  
</body>

</html>
