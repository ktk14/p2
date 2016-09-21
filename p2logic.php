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
$psw = ""; #password shown on index
# get the number of words from index
$numwords = 4;
$error =""; #error msg

# check to make sure value is 4-9
if (isset($_POST["numwords"])) {
    $numwords = $_POST["numwords"];
/*} elseif ($_POST["numwords"] < 4 || $_POST["numwords"] >9){
    $error = "Must enter a numeric value between 4 and 9.";
    return;
} elseif  (!ctype_digit($_POST["numwords"])){
    $error = "Must enter a numeric value between 4 and 9.";
    return;*/
} else {
    $numwords = 4;
}
# temp number of words
$tempw = array_rand($words, $numwords);

# loop through arrays and add them together
foreach ($tempw as $key => $value) { # to get the string values
    $psw .= $words[$value]."-";

}
$psw = substr($psw, 0, -1); #remove trailing hyphen
# check if need to add number
if (isset($_POST["addnum"])) {
    $tempn = mt_rand(0,9);
    $psw .= $tempn; # append number if selected
}
# check if need to add symbol
if (isset($_POST["addsymbol"])) {
    $psw .= $symbol[rand(0,5)]; # append symbol if selected
}

# validate input is only numeric use ctype_digit
/*
if(!ctype_digit($n)) {
    $error = "May only contain a numeric value";
    return;
}
else if(trim($n == "")){
    $error = "Please fill out the number of words.";
    return;
}
# need ifs for error msgs
*/
 ?>
