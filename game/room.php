<?php

session_start(); // Add this line at the beginning of your script to initialize the session.
session_destroy();
// Function to generate a new room
// Function to generate a new room with customized values

function generateNewRoom() {
    $matrix_size = 30;
    $custom_symbols = ['1', '99', '!', '$', '*', 'KL', '0'];

    // Generate random coordinates for the flag
    $flag_row = rand(0, $matrix_size - 1);
    $flag_col = rand(0, $matrix_size - 1);

    // Store the flag position in the sessionx
    $_SESSION['flag_row'] = $flag_row;
    $_SESSION['flag_col'] = $flag_col;

    // Populate the matrix with customized symbols
    $_SESSION['matrix'] = array();
    for ($i = 0; $i < $matrix_size; $i++) {
        $row = array();
        for ($j = 0; $j < $matrix_size; $j++) {
            $row[] = $custom_symbols[array_rand($custom_symbols)];
        }
        $_SESSION['matrix'][] = $row;
    }

  
}



// Initialize the game matrix if it doesn't exist in the session
if (!isset($_SESSION['room_number'])) {
    $_SESSION['room_number'] = 1;
    generateNewRoom();
}

// Handle user input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // No need to handle user input in this case since we're using arrow keys
}

// Function to check if all rooms have been found
function checkAllRoomsFound() {
    return $_SESSION['room_number'] > 5;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Room Search Game</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table td {
            width: 20px;
            height: 20px;
            border: 1px solid black;
            text-align: center;
        }

        .highlight {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h1>Room Search Game - Final Room</h1>
    <table>
        <?php foreach ($_SESSION['matrix'] as $row) : ?>
            <tr>
                <?php foreach ($row as $col => $cell) : ?>
                    <td><?php echo $cell; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>Use arrow keys to navigate and find the flag.</p>

    <script>
        // Initialize current position
        var currentRow = 0;
        var currentCol = 0;

        // Function to update the table and current position
        function updateTable() {
            var table = document.querySelector("table");
            var rows = table.rows;

            for (var i = 0; i < rows.length; i++) {
                for (var j = 0; j < rows[i].cells.length; j++) {
                    rows[i].cells[j].classList.remove("highlight");
                }
            }

            // Highlight the current position
            rows[currentRow].cells[currentCol].classList.add("highlight");
        }

        // Function to handle arrow key presses
        function handleKeyPress(event) {
            var key = event.key;

            switch (key) {
                case 'ArrowUp':
                    if (currentRow > 0) {
                        currentRow--;
                    }
                    break;
                case 'ArrowDown':
                    if (currentRow < <?php echo count($_SESSION['matrix']) - 1; ?>) {
                        currentRow++;
                    }
                    break;
                case 'ArrowLeft':
                    if (currentCol > 0) {
                        currentCol--;
                    }
                    break;
                case 'ArrowRight':
                    if (currentCol < <?php echo count($_SESSION['matrix'][0]) - 1; ?>) {
                        currentCol++;
                    }
                    break;
            }

            updateTable();

            // Check if the flag is found
            if (currentRow === <?php echo $_SESSION['flag_row']; ?> && currentCol === <?php echo $_SESSION['flag_col']; ?>) {
                // Generate a new room when the flag is found
                if (!<?php echo checkAllRoomsFound() ? 'true' : 'false'; ?>) {
                    document.querySelector("p").textContent = "bYtE_BuStErS{HF^,K,*,HUIk8&*B,*}";
                    <?php
                    if ($_SESSION['room_number'] < 5) {
                        echo 'setTimeout(function() { window.location.href = ""; }, 20000000);';
                    }
                    ?>
                } else {
                    document.querySelector("p").textContent = "You found all the flags";
                }
            }
        }

        // Attach the keydown event listener to the document
        document.addEventListener('keydown', handleKeyPress);

        // Initialize the table
        updateTable();
    </script>
</body>
</html>
