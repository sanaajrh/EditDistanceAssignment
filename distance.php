<?php

/**
 * Simple user form.
 *
 * Description: This file created to display hamming and levenshtine distance
 * depending on user inputs.
 * 
 * @since 2/12/2021
 */


require_once 'HammingDistance.php';
require_once 'LevenshteinDistance.php';


//Submitted strings from user
$string1 = $_POST['firstString'];
$string2 = $_POST['secondString'];

//Echo results after find hamming and levenshtine distance
echo nl2br('The hamming distance between ' . $string1 . ' and ' . $string2 . ' is => ' . HammingDistance::hamming_dis($string1, $string2) . "\n");
echo nl2br('The levenshtine distance between ' . $string1 . ' and ' . $string2 . ' is => ' . LevenshteinDistance::levenshtein_dis($string1, $string2) . "\n");
