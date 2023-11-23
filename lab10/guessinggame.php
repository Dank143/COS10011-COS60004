<?php
session_start();

// Generate a random number
if (!isset($_SESSION['random_number'])) {
    $_SESSION['random_number'] = rand(1, 100);
}

// Initialize variables
$message = '';
$guesses = isset($_SESSION['guesses']) ? $_SESSION['guesses'] : 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the user has submitted a guess
    if (isset($_POST['guess'])) {
        $guess = intval($_POST['guess']);

        // Validate the input
        if (is_numeric($guess) && $guess >= 1 && $guess <= 100) {
            $randomNumber = $_SESSION['random_number'];

            if ($guess == $randomNumber) {
                // Correct guess
                $message = "Congratulations! You guessed the hidden number.";
                $guesses++;
                session_destroy();
            } elseif ($guess < $randomNumber) {
                // Guess is lower
                $message = "Try again! The number is higher.";
                $guesses++;
            } else {
                // Guess is higher
                $message = "Try again! The number is lower.";
                $guesses++;
            }
        } else {
            $message = "Invalid guess! Please enter a number between 1 and 100.";
        }
    }
}

// Update the number of guesses
$_SESSION['guesses'] = $guesses;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Guessing Game</title>
</head>
<body>
    <h1>Guessing Game</h1>
    <p>Enter a number between 1 and 100,<br>
    then press the Guess button.</p>
    
    <form method="post">
        <input type="text" name="guess" placeholder="Enter your guess" required>
        <button type="submit">Guess</button>
    </form>

    <p><?php echo $message; ?></p>
    <p>Number of guesses: <?php echo $guesses; ?></p>

    <p><a href="giveup.php">Give Up</a></p>
    <p><a href="startover.php">Start Over</a></p>
</body>
</html>
