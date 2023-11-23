"use strict";

function init() {
  var clickMe = document.getElementById("clickme");
  clickMe.onclick = promptName;

  var huh = document.getElementById("click");
  huh.onclick = writeNewMessage; // Changed to call writeNewMessage
}

function promptName() {
  var sName = prompt("Dang. This should show up when clicked on.", "Bruhmnan");
  alert("Hi " + sName + ". Alert boxes are bla bla bla...");
  rewriteParagraph(sName);
  writeNewMessage(); // Call the new function
}

window.onload = init;

function rewriteParagraph(userName) {
  var message = document.getElementById("message"); // Corrected the variable name
  message.innerHTML = "Hi " + userName + ". If you could see this bla bla bla...";
}

function writeNewMessage() {
  var finish = document.getElementById("finish");
  finish.textContent = "You have now finished Task 1";
}
