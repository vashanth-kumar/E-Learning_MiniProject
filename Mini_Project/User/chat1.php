<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Gemini AI</title>
    <script type="importmap">
        {
          "imports": {
            "@google/generative-ai": "https://esm.run/@google/generative-ai"
          }
        }
    </script>
    
    <script type="module">
        import { GoogleGenerativeAI } from "@google/generative-ai";

        const API_KEY = "AIzaSyDXw9LX33uEQgNPIgJ3RqZP3VSqGOoJRfM"; // Replace with your actual API Key
        const genAI = new GoogleGenerativeAI(API_KEY);
        const model = genAI.getGenerativeModel({ model: "gemini-1.5-flash" });

        document.addEventListener('DOMContentLoaded', () => {
            const chatBox = document.getElementById('chatBox');
            const userInput = document.getElementById('userInput');
            const sendBtn = document.getElementById('sendBtn');

            sendBtn.addEventListener('click', async () => {
                const inputText = userInput.value.trim();
                if (inputText === "") return;

                displayMessage(inputText, 'user-message');
                userInput.value = '';

                try {
                    const result = await model.generateContent(inputText);
                    console.log('API Result:', result.response); // Log the full result for debugging
                    const responseText = processCandidates(result);
                    displayMessage(responseText, 'ai-message');
                } catch (error) {
                    console.error('Error:', error);
                    displayMessage('Error: Unable to reach AI service.', 'ai-message');
                }
            });

            userInput.addEventListener('keydown', (event) => {
                if (event.key === 'Enter') {
                    sendBtn.click();
                }
            });
        });

        function processCandidates(response) {
            console.log('Processing Response:', response);

            const candidates = response?.response?.candidates;

            if (!candidates || candidates.length === 0) {
                return "No response available";
            }

            const candidate = candidates[0];

            if (!candidate?.content?.parts || candidate.content.parts.length === 0) {
                return "No content found in response.";
            }

            const parts = candidate.content.parts;
            const responseText = parts.map(part => part.text).filter(text => text).join('');

            // Convert Markdown-style text to HTML <strong>text</strong>
            const formattedText = responseText.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');

            return formattedText.length > 0 ? formattedText : "No content in response parts.";
        }

        function displayMessage(text, className) {
            const message = document.createElement('div');
            message.className = `message ${className}`;
            message.innerText = text;
            document.getElementById('chatBox').appendChild(message);
            document.getElementById('chatBox').scrollTop = document.getElementById('chatBox').scrollHeight;
        }
    </script>

    <style>
        /* Your CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .chat-container {
            background-color: white;
            width: 600px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        h1 {
            text-align: center;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border-radius: 10px 10px 0 0;
        }

        .chat-box {
            padding: 20px;
            height: 400px;
            overflow-y: auto;
            background-color: #f9f9f9;
            border-bottom: 1px solid #ddd;
        }

        .message {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            width: fit-content;
        }

        .user-message {
            background-color: #007bff;
            color: white;
            align-self: flex-end;
        }

        .ai-message {
            background-color: #eee;
            color: #333;
        }

        .input-container {
            display: flex;
            padding: 10px;
            background-color: #f1f1f1;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="chat-container">
        <h1>Chat with Gemini AI</h1>
        <div class="chat-box" id="chatBox"></div>
        <div class="input-container">
            <input type="text" id="userInput" placeholder="Type your message...">
            <button id="sendBtn">Send</button>
        </div>
    </div>
</body>

</html>
