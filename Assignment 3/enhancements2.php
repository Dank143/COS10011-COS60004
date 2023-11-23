<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="styles/styles.css" rel="stylesheet">
  <title>Enhancements II - Dank's IT Company</title>
</head>
<body>
  <?php
    $activePage = "enhancements2";
    $pageTitle = "Enhancements II"; 
    include 'header.inc'; 
    include 'menu.inc'; 
  ?>
  <main>
    <aside>The following enhancements are being used:</aside>
    <section class="jobs">
        <h2>1. Smooth transitions</h2>
        <p>There are 2 implementations for the smooth transitions: Back to top and Jobs slider</p>
        <ul>
          <li><span class="highlight">Back to top:</span> Aside from the enhancement pages, every page will allow a button to scroll back to top if you have scrolled down for some pixels. Source: <a href="https://www.w3schools.com/howto/howto_js_scroll_to_top.asp">W3schools</a></li>
          <li><span class="highlight">Jobs slider:</span> In the <a href="jobs.php">Jobs</a> page, we can change the job using button and it will have a smooth sliding effect. Source: <a href="https://www.youtube.com/watch?v=kw13gCyI8No&ab_channel=GTCoding">YouTube</a></li>
        </ul>
    </section>

    <section class="jobs">
        <h2>2. Pop up box with confetti</h2>
        <ul>
          <li><span class="highlight">Pop up box:</span> After 10s, there will be a pop-up box (modal box) to ask whether we need assistance on the <a href="index.php">Home</a> page. Source: <a href="https://www.w3schools.com/howto/howto_css_modals.asp">W3schools</a></p></li>
          <li><span class="highlight">Confetti effect:</span> Together with the modal box, there will be a simple confetti effect. Source: <a href="https://www.youtube.com/watch?v=D8D9AvsowbY&ab_channel=OnlineTutorials">YouTube</a></p></li>
        </ul>
    </section>
  </main>
  <?php include "footer.inc"; ?>
</body>
</html>