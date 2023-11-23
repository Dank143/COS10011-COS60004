<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Lab 07">
  <meta name="author" content="Hong Hai Dang Nguyen">
  <title>Lab 07</title>
</head>
<body>
  <?php
  include ("mathfunctions.php");
  ?>
  <h1>CWA - Lab 07</h1>
  <?php
    $num = 5;
      if (isPositiveInteger($num)) {
        echo "<p>", $num, "! is ", factorial ($num), ".</p>";
      } else {
        echo "<p>Please enter a positive integer.</p>";
      }
    echo "<p><a href='factorial.html'>Return to the Entry Page </a></p>";
  ?>
</body>
</html>