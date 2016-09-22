<?php
#Arrays
# array of words
$words = [
    "molly",
    "dog",
    "tea",
    "pop",
    "panda",
    "oil",
    "purification",
    "peppermint",
    "chocolate",
    "book",
    "bed",
    "gum",
    "rice",
    "manga",
    "berlin"
    ];

# array of symbols
$symbol = [
    "@",
    "!",
    "$",
    "#",
    "?".
    "*"
    ];

# variables
$psw = ""; # password shown on index
$numwords = 4; # get the number of words from index
$error =""; # error msg

# check to make sure value acceptable
if (isset($_POST["numwords"]) && ($_POST["numwords"] > 4)) { # values greater than 4
    $numwords = $_POST["numwords"];
    }else {
        $error = "Please enter a number between 4 and 9. Default value of 4 words shown.";
        # if there is anything beside values 4-9 error msg gets displayed and default value of 4 shown
    }

# place holder for words and number of words
$tempw = array_rand($words, $numwords);

# loop through arrays and add them together
foreach ($tempw as $key => $value) { # to get the string values
    # add words to psw value and put hyphen between words
    $psw .= $words[$value]."-";
}
$psw = substr($psw, 0, -1); # remove trailing hyphen
# check if need to add number
if (isset($_POST["addnum"])) {
    $tempn = mt_rand(0,9);
    $psw .= $tempn; # append number if selected
}
# check if need to add symbol
if (isset($_POST["addsymbol"])) {
    $psw .= $symbol[rand(0,5)]; # append symbol if selected
}
 ?>
