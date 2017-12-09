<?php
// People Array
$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Johanna";
$people[] = "Farrah";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Amanda";
$people[] = "Rachel";
$people[] = "Katie";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";

// Get Query String
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions
if($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($people as $person) {
		// stristr() Find the first occurrence of $q in $person
		// from 0 to $person.length
		// substr() Return part of a string
		if (stristr($q, substr($person, 0, $len))) {
			if ($suggestion === "") {
				$suggestion = $person;
			} else {
				$suggestion .= ", $person"; // append $person
			}
		}
	}
}

// If there is not suggestion append "No Suggestion" string
echo $suggestion === "" ? "No Suggestion" : $suggestion;