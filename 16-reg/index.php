<?php
// Using preg_match()
// The preg_match() function will tell you whether a string contains matches of a pattern.
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str).'<br>'; // Outputs 1
################################################################
// Using preg_match_all()
// The preg_match_all() function will tell you how many matches were found for a pattern in a string.
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str).'<br>'; // Outputs 4
################################################################
// Using preg_replace()
// The preg_replace() function will replace all of the matches of the pattern in a string with another string.
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str).'<br>'; // Outputs "Visit W3Schools!"
?>