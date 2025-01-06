<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Networking Course</title>
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

        #bestpractices, #network-topics, #tools, #subjects {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin: 20px 0;
            padding: 5px;
        }

        #bestpractices header, #network-topics header, #tools header, #subjects header {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            padding: 5px;
            text-align: center;
            border-radius: 5px;
        }

        #bestpractices p, #network-topics p, #tools p, #subjects p {
            font-size: 16px;
            margin: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Data Networking Course</h1>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <a href="#introduction">Introduction</a>
        <a href="#key-concepts">Key Concepts</a>
        <a href="#best-practices">Best Practices</a>
        <a href="#network-topics">Common Topics</a>
        <a href="#tools">Networking Tools</a>
        <a href="#why-matters">Why Data Networking Matters</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- Main Content Section -->
    <div class="main-content" id="introduction">
        <h2>Introduction to Data Networking</h2>
        <p>
            Data networking refers to the process of interconnecting computers and other devices to share resources, such as files and applications, over a communication medium like the internet or a local area network (LAN). Networking is the backbone of the digital world, allowing businesses and individuals to connect, collaborate, and communicate in real time.
        </p>
        <p>
            There are different types of networks, including **LAN (Local Area Network)**, **WAN (Wide Area Network)**, and **MAN (Metropolitan Area Network)**, each serving different geographic areas and purposes. The protocols and standards that guide data networking are essential for efficient and secure communication between devices.
        </p>
    </div>

    <!-- Key Concepts Section -->
    <div class="main-content" id="key-concepts">
        <section id="subjects">
            <header>Key Concepts in Data Networking</header>

            <div class="key-concepts">
                <div class="concept">
                    <h3>OSI Model</h3>
                    <p>
                        The OSI model is a conceptual framework used to understand network interactions in seven layers: Physical, Data Link, Network, Transport, Session, Presentation, and Application.
                    </p>
                </div>
                <div class="concept">
                    <h3>TCP/IP Protocol</h3>
                    <p>
                        The TCP/IP model is a set of communication protocols used to interconnect devices on the internet. It is the foundation for the internet and covers four layers: Link, Internet, Transport, and Application.
                    </p>
                </div>
                <div class="concept">
                    <h3>IP Addressing</h3>
                    <p>
                        IP addressing involves assigning unique addresses to devices on a network to ensure proper routing of data. This includes both IPv4 and IPv6 addressing systems.
                    </p>
                </div>
                <div class="concept">
                    <h3>Routing and Switching</h3>
                    <p>
                        Routing refers to the process of forwarding data packets between networks, while switching is concerned with transferring data within a single network. Both are critical components in network operation.
                    </p>
                </div>
                <div class="concept">
                    <h3>Network Security</h3>
                    <p>
                        Network security includes measures to protect a network from threats such as unauthorized access, malware, and data breaches. Techniques include firewalls, encryption, and intrusion detection systems.
                    </p>
                </div>
                <div class="concept">
                    <h3>Network Topologies</h3>
                    <p>
                        Network topology defines the arrangement of devices and how they are connected in a network. Common topologies include bus, star, mesh, and ring.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- Best Practices Section -->
    <section id="bestpractices">
        <header>Best Practices for Data Networking</header>
        <p>Ensure the use of strong encryption protocols like WPA3 and SSL/TLS for secure communication.</p>
        <p>Segment networks to limit the impact of potential breaches (e.g., using VLANs).</p>
        <p>Regularly update and patch networking devices and software to protect against vulnerabilities.</p>
        <p>Use Quality of Service (QoS) mechanisms to prioritize critical traffic over the network.</p>
        <p>Implement network monitoring tools to detect and resolve issues proactively.</p>
    </section>

    <!-- Common Data Networking Topics Section -->
    <section id="network-topics">
        <header>Common Topics in Data Networking</header>
        <p>
            Data networking is a vast field, and some important topics include:
        </p>
        <p><strong>Ethernet and Wi-Fi:</strong> The two most common data link layer technologies used in local area networks.</p>
        <p><strong>Subnetting:</strong> The process of dividing a network into smaller subnetworks for efficient routing.</p>
        <p><strong>Network Troubleshooting:</strong> Techniques and tools used to diagnose and fix network issues.</p>
        <p><strong>VPN (Virtual Private Network):</strong> A secure network connection that allows remote users to access a network securely over the internet.</p>
    </section>

    <!-- Data Networking Tools Section -->
    <section id="tools">
        <header>Data Networking Tools</header>
        <p>
            Here are some commonly used tools in data networking:
        </p>
        <ul>
            <li><strong>Wireshark:</strong> A network protocol analyzer used to capture and inspect network traffic.</li>
            <li><strong>Ping:</strong> A command-line tool used to test network connectivity between two devices.</li>
            <li><strong>Traceroute:</strong> A tool used to trace the path that data takes to reach its destination.</li>
            <li><strong>NetFlow:</strong> A tool used for monitoring and analyzing network traffic patterns.</li>
        </ul>
    </section>

    <!-- Why Data Networking Matters Section -->
    <div class="main-content" id="why-matters">
        <center><h2>Why Data Networking Matters</h2></center>
        <p>
            Data networking is the backbone of modern business and communication. It enables the sharing of information, collaboration, and access to resources across vast distances. In today's interconnected world, effective data networking ensures reliable communication, scalability, and security for businesses and individuals.
        </p>
    </div>

    <!-- Contact Section -->
    <div class="contact-section" id="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance with the Data Networking course, please reach out to us:</p>
        <p>Email: <a href="mailto:support@endlesslearning.com">support@endlesslearning.com</a></p>
        <p>Phone: +1 800 123 4567</p>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Data Networking Course. All rights reserved.</p>
    </footer>

</body>
</html>
