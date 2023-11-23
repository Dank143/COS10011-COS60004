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
    $activePage = "phpenhancements";
    $pageTitle = "Enhancements III"; 
    include 'header.inc'; 
    include 'menu.inc'; 
  ?>
  <main>
    <aside>The following enhancements are being used:</aside>
    <section class="jobs">
        <h2>1. Manager Login</h2>
        <p>To get to the manage.php and candidate.php (which will be mentioned later), the user must login to the manager page through <a href="login.php">My Manager</a>. Source: <a href="https://www.w3schools.blog/php-program-to-create-login-and-logout-using-sessions">W3schools</a></p>
        <ul>
          <li>The current username and password is <span class="highlight">$username = '1', $password = '2'.</span></li>
          <li>Any attempt to get into these two php without logging in will direct the user back to the login.php.</li>
          <li>After 5 failed login attempts, the login page will be locked for 15 seconds. An error message will indicate the remaining time.</li>
          <li>In the manager page, using the similar method for header.inc and menu.inc, I implemented managerheader.inc and managermenu.inc for similar HTML elements like back and logout buttons.</li>
          <li>When logging out, the user will be direct to the logout page and a confirmation (Yes/No) will be displayed.</li>
          <li>The login status will be stored and changed based on the logging in/logging out.</li>
        </ul>
    </section>

    <section class="jobs">
        <h2>2. Sorting EOIs and Candidates Selection</h2>
        <p>For this enhancement, I have 2 type of sortings. Source: <a href="https://www.w3schools.com/php/php_mysql_select_orderby.asp#:~:text=PHP%20MySQL%20Use%20The%20ORDER%20BY%20Clause&text=The%20ORDER%20BY%20clause%20is,order%2C%20use%20the%20DESC%20keyword.">W3schools</a></p>
        <ul>
          <li><span class="highlight">Simple EOIs sorting:</span> This can be found in <a href="manage.php">Manage EOIs</a>. The EOIs table can be sorted by columns (EOI number, Job Reference, First Name, Last Name, Email, Number of Skills, Status) either in ascending or descending.</li>
          <li><span class="highlight">Candidates selection</span> This can be found in <a href="candidate.php">Manage Interview Candidates</a>. Only applicants with 4 or more skills will be listed as the Candidates, and their information will be extracted from the EOI table to the Candidates table (which is created upon opening the page for the first time). This table can be displayed. Additionally, the user can enter a message and send an email to all candidates.</li>
        </ul>
    </section>
  </main>
  <?php include "footer.inc"; ?>
</body>
</html>