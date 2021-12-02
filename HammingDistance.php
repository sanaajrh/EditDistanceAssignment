<?php

/**
 * Hamming Distance class.
 *
 * Description: This class was created to find hamming distance that only have 
 * substitute operations (ex. substitute letter X with letter Y), pad shorter text 
 * with spaces..
 *
 * @since 2/12/2021
 */

class HammingDistance
{
    /**
     * This function created to find hamming distance between two strings,
     * it will return the number of substitute operations with time complexity O(n).
     *
     * @param string1 First string 
     * @param string2 Second string 
     * 
     * @author Sanaa Jarrah
     * @return counter
     */
    public static function hamming_dis($string1, $string2): int
    {
        //Counter used to count substitute operations.
        $counter = 0;

        //Check if two strings are equal.
        $counter = self::isEqualStrings($string1, $string2);

        //strCharArray1 & strCharArray2 used after converts a string to an array.
        $strCharArray1 = "";
        $strCharArray2 = "";

        //Convert each string into array of characters to start comparison.
        $strCharArray1 = str_split($string1);
        $strCharArray2 = str_split($string2);


        //Looping into char arrays to find distance.
        for ($index = 0; $index < count($strCharArray1); $index++) {
            $counter = ($strCharArray1[$index] != $strCharArray2[$index]) ? ++$counter : $counter;
        }

        return $counter;
    }

    /**
     * This function created to find differance between two strings.
     *
     * @param string1 Passing first string by reference
     * @param string2 Passing second string by reference
     * 
     * @author Sanaa Jarrah
     * @return equal
     */

    private static function isEqualStrings(&$string1, &$string2): int
    {

        //Save strings in temp variables
        $tempstr1 = $string1;
        $tempstr2 = $string2;

        //Get different length between two strings.
        $equal = strlen($tempstr1) - strlen($tempstr2);

        //Switch strings if string1 length greater than string2 length.
        if ($equal > 0) {
            $string1 = $tempstr2;
            $string2 = $tempstr1;
        }

        //Return absolute value of equal
        return abs($equal);
    }
}
