<?php
session_start();

if (isset($_SESSION['random_number'])) {
    $randomNumber = $_SESSION['random_number'];
} else {
    $randomNumber = "No random number generated";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Give Up</title>
</head>
<body>
    <h1>Guessing Game</h1>
    <p style="color:blue;">The hidden number was: <?php echo $randomNumber; ?></p>
    <p><a href="startover.php">Start Over</a></p>
</body>
</html>
