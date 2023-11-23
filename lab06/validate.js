"use strict";

function init() {
    var regForm = document.getElementById("regform");
    regForm.onsubmit = validate;
}

function validate() {
    var errMsg = "";
    var result = true;
    
    // First name check
    var firstname = document.getElementById("firstname").value;
    if (!firstname.match(/^[a-zA-z]+$/)) {
        errMsg = errMsg + "Ur 1st name only has alpha characters\n";
        result = false;
    }

    // Last name check
    var lastname = document.getElementById("lastname").value; 
    if (!lastname.match(/^[a-zA-z\-]+$/)) {
        errMsg = errMsg + "Ur last name only has alpha characters and hyphens\n";
        result = false;
    }

    // Age check
    var age = document.getElementById("age").value;
    if (isNaN(age)) {
        errMsg = errMsg + "Your age must be a number\n";
        result = false;
    }
    else if (age < 18) {
        errMsg = errMsg + "Your age must be 18 or older\n";
        result = false;
    }
    else if (age >= 10000) {
        errMsg = errMsg + "Cmon, really?\n";
        result = false;
    }
    else {
        var tempMsg = checkSpeciesAge(age);
        if (tempMsg != "") {
            errMsg = errMsg + tempMsg;
            result = false;
        };
    }

    // None is selected
    if (document.getElementById("food").value == "none") {
        errMsg = errMsg + "You must select a food preference.\n";
        result = false;
    }

    // Radio button check for trip
    var is1day = document.getElementById("1day").checked;
    var is4day = document.getElementById("4day").checked;
    var is10day = document.getElementById("10day").checked;

    // At least 1 trip
    if (!(is1day || is4day || is10day)) {
        errMsg += "Pls select 1 trip.\n";
        result = false;
    }

    // Radio button check for species
    var human = document.getElementById("human").checked;
    var dwarf = document.getElementById("dwarf").checked;
    var elf = document.getElementById("elf").checked;
    var hobbit = document.getElementById("hobbit").checked;

    // 1 specicies
    if (!(human || dwarf || elf || hobbit)) {
        errMsg += "Pls select 1 spicies.\n";
        result = false;
    }

    // Beard length
    var beard = document.getElementById("beard").value;
    var tempMsg = beardLengthCheck(beard, age);
    if (tempMsg != "") {
        errMsg += tempMsg;
        result = false;
    }

    if (errMsg != "") {
        alert(errMsg);
    }

    return result;
}

function getSpecies() {
    var speciesName = "Unknown";
    var speciesArray = document.getElementById("species").getElementsByTagName("input");

    for (var i = 0; i < speciesArray.length; i++) {
        if (speciesArray[i].checked)
            speciesName = speciesArray[i].value;
    }
    return speciesName;
}

function checkSpeciesAge(age) {
    var errMsg = "";
    var species = getSpecies();
    switch(species) {
        case "Human":
            if (age > 120) {
                errMsg = "Nah bro, human can't be older than that.\n";
            }
            break;
        case "Dwarf":
        case "Hobbit":
            if (age > 150){
                errMsg = "You cannot be a " + species + " and over 150.\n";
            }
            break;
        case "Elf": // Unlimitted babi
            break;
        default:
            errMsg = "Nah bro ur not qualified.\n";
    }
    return errMsg;
}

function beardLengthCheck(beard, age) {
    var errMsg = "";
    var species = getSpecies();
    switch(species) {
        case "Human":
            break;
        case "Dwarf":
            if (age > 30) {
                if (beard < 12) {
                    errMsg = "U sure ur a Dwarf?\n"
                }
            }
            break;
        case "Hobbit":
        case "Elf": // Unlimitted babi
            if (beard > 0){
                errMsg = "Yeah well we don't have beard.\n"
            }
            break;
        default:
            errMsg = "Nah bro ur beard is not qualified.\n";
    }
    return errMsg;
}

window.onload = init;
