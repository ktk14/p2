<?php
# Arrays
# need an array of words
$words = [
    'molly',
    'dog'
    'tea',
    'pop',
    'panda',
    'oil',
    'purification',
    'peppermint',
    'chocolate',
    'book',
    'bed',
    'gum',
    'rice',
    'manga',
    'berlin'
    ];
# need array of numbers
$numbers = [
    '14',
    '13'
    '5',
    '7',
    '12',
    '30'
    ];
# need array of symbols
$symbols = [
    '@',
    '!',
    '$',
    '#',
    '?'
    ];

# loop through arrays of using foreach()
# use array_rand(), but that returns keys so use array_flip to switch keys and values to get the values
$flippedw = array_rand(array_flip($words), $n);
$n = 4; # hard code the min of 4 words
# use array_rand() to choose number
# use array_rand() to choose symbol
# validate input is only numeric use ctype_digit
// $numwords = # user input of number of words
// $psw = # password shown to user
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

 ?>
