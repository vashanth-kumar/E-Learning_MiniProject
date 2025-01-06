
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Awareness</title>
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
        #introduction h2{
             color:purple;
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
    flex-wrap: wrap; /* Allow wrapping of cards to the next row if needed */
    justify-content: space-between; /* Distribute cards evenly */
    gap: 20px; /* Add space between the cards */
    margin-top: 20px; /* Optional: Add some space above the section */
}

/* Individual Concept Card */
.key-concepts .concept {
    background-color: #eef2f4;
    padding: 20px;
    text-align: center;
    width: 30%; /* Make each card take 30% of the container width */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    box-sizing: border-box; /* Ensures padding is included in the width calculation */
}
@media screen and (max-width: 768px) {
    .key-concepts .concept {
        width: 45%; /* On smaller screens, make cards take up 45% of the width */
    }
}

@media screen and (max-width: 480px) {
    .key-concepts .concept {
        width: 100%; /* On very small screens, make cards take up 100% of the width */
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
        #bestpractices{
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    margin: 20px 0;
    padding: 5px;
}
#bestpractices header  {
    background-color: #4CAF50; /* Green background */
    color: white;
    font-weight: bold;
     padding: 5px;
    text-align: center;
    border-radius: 5px;
}
#bestpractices p{
    font-size: 16px;
    margin: 10px 0;
    text-align: center;
}
#threats {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    margin: 20px 0;
    padding: 5px;
}
#threats header  {
    background-color: #4CAF50; /* Green background */
    color: white;
    font-weight: bold;
     padding: 5px;
    text-align: center;
    border-radius: 5px;
}
#threats p{
    font-size: 16px;
    margin: 10px 0;
    text-align: center;
}
#tools {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    margin: 20px 0;
    padding: 5px;
}
#tools header  {
    background-color: #4CAF50; /* Green background */
    color: white;
    font-weight: bold;
     padding: 5px;
    text-align: center;
    border-radius: 5px;
}
#tools p{
    font-size: 16px;
    margin: 10px 0;
    text-align: center;
}
#subjects {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    margin: 20px 0;
    padding: 5px;
}
#subjects header  {
    background-color: #4CAF50; /* Green background */
    color: white;
    font-weight: bold;
     padding: 5px;
    text-align: center;
    border-radius: 5px;
}
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Cybersecurity Awareness</h1>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <a href="#introduction">Introduction</a>
        <a href="#key-concepts">Key Concepts</a>
        <a href="#best-practices">Best Practices</a>
        <a href="#common-threats">Common Threats</a>
        <a href="#tools">Cybersecurity Tools</a>
        <a href="#why-matters">Why Cybersecurity Matters</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- Main Content Section -->
    <div class="main-content" id="introduction">
        <h2>Introduction to Cybersecurity</h2>
        <p>
            Cybersecurity is the practice of defending computers, servers, mobile devices, electronic systems, networks, and data from malicious attacks. With the increasing dependence on technology in daily life, the importance of cybersecurity cannot be overstated. 
        </p>
        <p>
            In today's digital world, cybersecurity is essential to protect sensitive information from hackers, data breaches, identity theft, and other forms of cybercrime. It involves a variety of techniques, tools, and strategies to safeguard personal, organizational, and governmental data.
        </p>
    </div>

    <!-- Key Concepts Section -->
     
    <div class="main-content" id="key-concepts">
        <section id="subjects">
        <header>Key Concepts in Cybersecurity</header>
        
        <div class="key-concepts">
            <div class="concept">
                <h3>Encryption</h3>
                <p>
                    Encryption is the process of converting information into a code to prevent unauthorized access. It ensures that data remains confidential and secure, even when intercepted during transmission.
                </p>
            </div>
            <div class="concept">
                <h3>Decryption</h3>
                <p>
                    Decryption is the process of converting encrypted data, or ciphertext, back into its original, readable form, or plaintext.
                </p>
            </div>
            <div class="concept">
                <h3>Cloud Security</h3>
                <p>
                    Protecting data, applications, and services hosted in cloud environments. data security, identity management, compliance, multi-cloud security.               
                </p>
            </div>
            <div class="concept">
                <h3>Firewalls</h3>
                <p>
                    A firewall is a security system that monitors and controls incoming and outgoing network traffic based on predetermined security rules. It acts as a barrier between trusted internal networks and untrusted external networks.
                </p>
            </div>
            <div class="concept">
                <h3>Blockchain Security</h3>
                <p>
                    Securing blockchain-based systems and applications, including cryptocurrency networks. Focuses on transaction integrity, smart contract security, and private key management.                </p>
            </div>
            <div class="concept">
                <h3>Authentication</h3>
                <p>
                    Authentication is the process of verifying the identity of a user, device, or system. This can involve passwords, biometrics, or multi-factor authentication (MFA) methods to ensure secure access.
                </p>
            </div>
        </div>
        </center>
    </div>
    </center>

    <!-- Best Practices Section -->
     <section id ="bestpractices">
        <header>Best Practices for Cybersecurity</header>
            <p>Use strong, unique passwords for each account.</p>
            <p>Enable two-factor authentication (2FA) for an extra layer of security.</p>
            <p>Regularly update software and applications to patch vulnerabilities.</p>
            <p>Avoid clicking on suspicious links or downloading attachments from unknown sources.</p>
            <p>Use encryption for sensitive data, especially when sharing over public networks.</p>
            <p>Ensure your firewall is enabled and configure it properly.</li></p>     
    </section>

    <!-- Common Cybersecurity Threats Section -->
       <section id ="threats">
        <header>Common Cybersecurity Threats</header>
        <p>
            Cybersecurity threats are constantly evolving, and it's important to be aware of the various risks. Here are some common threats:</p>
            <p><strong>Phishing:</strong> Fraudulent attempts to obtain sensitive information by disguising as a trustworthy entity.</p>
           <p><strong>Malware:</strong> Malicious software designed to harm or exploit a computer system, including viruses, worms, and ransomware.</p>
           <p><strong>Ransomware:</strong> A type of malware that encrypts a victim's data and demands payment for the decryption key.</p>
           <p><strong>Man-in-the-Middle (MitM) Attacks:</strong> A cyberattack where an attacker intercepts and alters communications between two parties.</p>
           <p><strong>Social Engineering:</strong> Manipulating people into revealing confidential information or performing actions that compromise security.</p>
    </section>

    <!-- Cybersecurity Tools Section -->
    <section id ="tools">
        <header>Cybersecurity Tools</header>
        <p>
            There are various tools available to help protect against cybersecurity threats. Some of the most commonly used tools include:
        </p>
        
           <p> <strong>Antivirus Software:</strong> Protects against malware and viruses by detecting and removing malicious files.</p>
           <p> <strong>Firewalls:</strong> Monitors and filters network traffic to block unauthorized access.</p>
           <p> <strong>Encryption Tools:</strong> Encrypt sensitive data to keep it safe during transmission or storage.</p>
           <p> <strong>Intrusion Detection Systems (IDS):</strong> Monitors network traffic for signs of malicious activity and alerts administrators.</p>
           <p> <strong>Virtual Private Networks (VPN):</strong> Secures internet connections by masking your IP address and encrypting your online activities.</p>
        </section>

    <!-- Why Cybersecurity Matters Section -->
    <div class="main-content" id="why-matters">
        <center><h2>Why Cybersecurity Matters</h2></center>
        <p>
            Cybersecurity is crucial for protecting personal and organizational data, ensuring the integrity of systems, and maintaining the trust of users. The cost of a data breach, whether financial or reputational, can be catastrophic. By prioritizing cybersecurity, you protect sensitive information, prevent downtime, and ensure the smooth functioning of online activities and communications.
        </p>
    </div>

    <!-- Contact Section -->
    <div class="contact-section" id="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, please reach out to us:</p>
        <p>Email: <a href="mailto:support@endlesslearning.com">support@endlesslearning.com</a></p>
        <p>Phone: +1 800 123 4567</p>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Cybersecurity Awareness. All rights reserved.</p>
    </footer>