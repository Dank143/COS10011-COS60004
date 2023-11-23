<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="styles/styles.css" rel="stylesheet">
  <script src="scripts/enhancements.js"></script>
  <title>About - Dank's IT Company</title>
</head>
<body>
  <?php
    $activePage = "about";
    $pageTitle = "About Me";   
    include 'header.inc'; 
    include 'menu.inc';
  ?> 
  <main class = "about">
    <h2>Personal Information</h2>
    <dl>
        <dt><strong>Name:</strong></dt>
        <dd>Hong Hai Dang Nguyen</dd>
        <dt><strong>Student ID:</strong></dt>
        <dd>103503191</dd>
        <dt><strong>Tutor's Name:</strong></dt>
        <dd>Zeqian Dong</dd>
        <dt><strong>Course:</strong></dt>
        <dd>Your Course</dd>
        <dt> Email me at:</dt> 
        <dd><a href="103503191.student.swin.edu.au"><p class="mail">103503191.student.swin.edu.au</p></a><dd>
    </dl>

    <figure>
        <img src="images/Dang.jpg" alt="Your Photo" width="300">
    </figure>

    <h2>Swinburne Timetable</h2>
    <table class="timetable">
        <thead>
            <tr>
                <th class="unit">Units</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
            </tr>  
        </thead>
        <tbody>
          <tr class="t1">
            <td>COS10011: Creating Web Application</td>
            <td></td>
            <td class="lec1">12:30-14:30<br>Tutorial</td>
            <td class="tut1">10:30-12:30<br>Lecture</td>
            <td></td>
            <td></td>
          </tr>
          <tr class="t2">
            <td>COS20015: Fundamentals of Data Management</td>
            <td class="lec2">08:30-09:30<br>Lecture</td>
            <td class="tut2">14:30-16:30<br>Tutorial</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
         <tr class="t3"> 
            <td>COS30017: Software Development for Mobile Devices</td>
            <td></td>
            <td></td>
            <td class="lec3">08:30-10:30<br>Lecture</td>
            <td class="tut3">18:30-20:30<br>Tutorial</td>
            <td></td>		
          </tr>
          <tr class="t4"> 
            <td>SWE20001: Managing Software Projects</td>
            <td class="lec4">10:30-11:30<br>Lecture</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="tut4">12:30-14:30<br>Tutorial</td>
           </tr>
    </table>

    <h2>About Me</h2>
    <p class="me">Hi, I'm Dang, but you could call me Dank. I'm doing my Bachelor Of Engineering, Software major at Swinburne University. I'm from Can Tho, Vietnam, the land of many geniuses and well-known generals. I'm interested in playing online games like Valorant or League of Legends, and enjoy listening to music, especially EDM. I'm excited to learn and grow in the field of IT and contribute to innovative solutions.</p>
  </main>
  <?php include "footer.inc"; ?>
</body>
</html>
