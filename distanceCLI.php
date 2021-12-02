#!/usr/bin/php
<?php

/**
 * User commnad line input.
 *
 * Description: This file created to display hamming and levenshtine distance
 * depeing on user inputs.
 * 
 * @since 2/12/2021
 */


require_once 'HammingDistance.php';
require_once 'LevenshteinDistance.php';


//Get user inputes from command
$string1 = readline("Enter the first string : ");
$string2 = readline("Enter the second string : ");

//Check if user not enter any values in CLI
if (empty($string1) || empty($string2)) {
    exit("You need to enter string value to get your distance..!" . PHP_EOL);
}

//Echo results after find hamming and levenshtine distance
echo 'The hamming distance between ' . $string1 . ' and ' . $string2 . ' is => ' . HammingDistance::hamming_dis($string1, $string2) . PHP_EOL;
echo 'The levenshtine distance between ' . $string1 . ' and ' . $string2 . ' is => ' . LevenshteinDistance::levenshtein_dis($string1, $string2) . PHP_EOL;
