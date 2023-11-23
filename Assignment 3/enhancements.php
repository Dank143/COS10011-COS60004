<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="styles/styles.css" rel="stylesheet">
  <title>Enhancements - Dank's IT Company</title>
</head>
<body>
  <?php
    $activePage = "enhancements";
    $pageTitle = "Enhancements I"; 
    include 'header.inc'; 
    include 'menu.inc'; 
  ?>
  <main>
    <aside>The following enhancements are being used:</aside>
    <section class="jobs">
        <h2>1. Navigation bar</h2>
        <p>The navigation bar is made to be very interactive. If you stay on a page it will highlighted red, and navigate to a button will also highlight it</p>
    </section>

    <section class="jobs">
        <h2>2. Glowing texts</h2>
        <p>I implemented 2 types of glowing. The simple one can be found at the <a href="index.php">Home</a> page, the more complicated one can be found on the <a href="about.php">About Us</a> page. Source: <a href="https://www.w3schools.com/howto/howto_css_glowing_text.asp">W3schools</a></p>
    </section>
  </main>
  <?php include "footer.inc"; ?>
</body>
</html>