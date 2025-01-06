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

        const API_KEY = ""; // Replace with your actual API Key
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
                    const responseText = processCandidates(result);
                    displayMessage(responseText, 'ai-message');
                } catch (error) {
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
            const candidates = response?.response?.candidates;
            if (!candidates || candidates.length === 0) {
                return "No response available";
            }
            return candidates[0]?.content?.parts?.[0]?.text || "No content found.";
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
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1e3a8a, #2563eb);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .chat-container {
            background: #ffffff;
            width: 600px;
            border-radius: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background: linear-gradient(90deg, #1e3a8a, #2563eb);
            color: white;
            font-size: 1.8rem;
        }

        .chat-box {
            padding: 20px;
            height: 400px;
            overflow-y: auto;
            background-color: #f3f4f6;
        }

        .message {
            padding: 12px;
            margin-bottom: 10px;
            border-radius: 10px;
            max-width: 75%;
        }

        .user-message {
            background: #2563eb;
            color: white;
            align-self: flex-end;
        }

        .ai-message {
            background: #e5e7eb;
            color: #1f2937;
        }

        .input-container {
            display: flex;
            padding: 15px;
            background-color: #e5e7eb;
        }

        input[type="text"] {
            flex-grow: 1;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
        }

        button {
            padding: 12px 20px;
            margin-left: 10px;
            background: linear-gradient(90deg, #1e3a8a, #2563eb);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: linear-gradient(90deg, #1d4ed8, #1e40af);
        }

        .chat-box::-webkit-scrollbar {
            width: 8px;
        }

        .chat-box::-webkit-scrollbar-thumb {
            background: #a1a1aa;
            border-radius: 4px;
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
