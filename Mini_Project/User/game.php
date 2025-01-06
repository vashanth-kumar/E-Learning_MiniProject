<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Finding Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            text-align: center;
            background-color: #f4f4f9;
        }

        h1 {
            color: #007bff;
        }

        #grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            justify-content: center;
            margin: 20px auto;
            max-width: 300px;
        }

        .cell {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            background-color: #e0e0e0;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .cell:hover {
            background-color: #007bff;
            color: white;
        }

        .selected {
            background-color: #28a745;
            color: white;
        }

        #message {
            margin-top: 20px;
            font-size: 18px;
            color: #555;
        }

        #reset {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #reset:hover {
            background-color: #0056b3;
        }

        #navigation {
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Word Finding Game</h1>
    <p>Find the hidden word: <strong id="word">Loading...</strong></p>
    <div id="grid"></div>
    <p id="message"></p>
    <button id="reset" style="display: none;">Restart Game</button>
    
    <!-- Navigation buttons -->
    <div id="navigation">
        <button id="prev">Previous</button>
        <button id="next">Next</button>
    </div>

    <script>
        const words = ["HELLO", "WORLD", "LEARN", "GAMES", "SKILL"]; // List of words to find
        const gridSize = 5; // 5x5 grid
        const grid = document.getElementById("grid");
        const message = document.getElementById("message");
        const resetButton = document.getElementById("reset");
        const wordElement = document.getElementById("word");
        const prevButton = document.getElementById("prev");
        const nextButton = document.getElementById("next");
        let currentWordIndex = 0;
        let currentWord = "";
        let playerProgress = "";

        function initializeGrid() {
            if (currentWordIndex >= words.length) {
                wordElement.textContent = "All words found! 🎉";
                message.textContent = "Congratulations, you've completed the game!";
                grid.innerHTML = "";
                resetButton.style.display = "block";
                return;
            }

            grid.innerHTML = "";
            playerProgress = "";
            message.textContent = "";
            resetButton.style.display = "none";

            // Set the current word
            currentWord = words[currentWordIndex];
            wordElement.textContent = currentWord;

            // Fill the grid with random letters
            const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            const cells = Array.from({ length: gridSize * gridSize }, () => 
                letters[Math.floor(Math.random() * letters.length)]
            );

            // Insert the word into the grid
            const startIndex = Math.floor(Math.random() * (gridSize * gridSize - currentWord.length));
            for (let i = 0; i < currentWord.length; i++) {
                cells[startIndex + i] = currentWord[i];
            }

            // Create grid cells
            cells.forEach(letter => {
                const cell = document.createElement("div");
                cell.classList.add("cell");
                cell.textContent = letter;
                cell.addEventListener("click", () => handleCellClick(cell, letter));
                grid.appendChild(cell);
            });
        }

        function handleCellClick(cell, letter) {
            if (cell.classList.contains("selected")) return;

            playerProgress += letter;
            cell.classList.add("selected");

            if (playerProgress === currentWord) {
                message.textContent = "🎉 Well done! You found the word!";
                nextButton.style.display = "inline-block"; // Show the next button
            } else if (!currentWord.startsWith(playerProgress)) {
                message.textContent = "❌ Incorrect sequence! Try again.";
                disableGrid();
            }
        }

        function disableGrid() {
            document.querySelectorAll(".cell").forEach(cell => {
                cell.style.pointerEvents = "none";
            });
        }

        // Go to next word
        nextButton.addEventListener("click", () => {
            currentWordIndex++;
            initializeGrid();
            nextButton.style.display = "none"; // Hide next button after progressing
        });

        // Go to previous word
        prevButton.addEventListener("click", () => {
            if (currentWordIndex > 0) {
                currentWordIndex--;
                initializeGrid();
                nextButton.style.display = "none"; // Hide next button until word is found
            }
        });

        resetButton.addEventListener("click", () => {
            currentWordIndex = 0;
            initializeGrid();
        });

        // Initialize the game on load
        initializeGrid();
    </script>
</body>
</html>
