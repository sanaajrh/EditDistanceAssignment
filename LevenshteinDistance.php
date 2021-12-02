<?php

/**
 * Levenshtine Distance class.
 *
 * Description: This class was created to find Levenshtein distance: that have 3 possible 
 * operators: insert, delete or substitution operations.
 *
 * @since 2/12/2021
 * @author Sanaa Jarrah
 */

class LevenshteinDistance
{
    /**
     * This function created to find levenshtein distance between two strings,
     *  it will return minimum number of operations with time complexity O(i*j) where 
     * i: Length of string1, j: Length of string2.
     *
     * @param string1 First string 
     * @param string2 Second string 
     * 
     * @author Sanaa Jarrah
     * @return minOperations
     */
    public static function levenshtein_dis($string1, $string2): int
    {

        //Convert each string into array of characters to start comparison.
        $strCharArray1 = str_split($string1);
        $strCharArray2 = str_split($string2);

        //Get size of string1 and string2
        $size1 = count($strCharArray1);
        $size2 = count($strCharArray2);

        //Looping into char arrays to find distance.
        $levenMatrix = [];
        $minOperations = 0;

        for ($i = 0; $i <= $size1; $i++) {
            for ($j = 0; $j <= $size2; $j++) {
                // Check if first string is empty, only option is to insert all characters of second string 
                if ($i == 0) {
                    $levenMatrix[$i][$j] = $j;
                }
                //Check if second string is empty, only option is to remove all characters of second string 
                else if ($j == 0) {
                    $levenMatrix[$i][$j] = $i;
                }
                //Check if last characters are same, ignore last char and recurursion for remaining string 
                else if ($string1[$i - 1] == $string2[$j - 1]) {
                    $levenMatrix[$i][$j] = $levenMatrix[$i - 1][$j - 1];
                }
                //Check if last characters are different, then all possibilities considered and find minimum 
                else {
                    $levenMatrix[$i][$j] = 1 + min(
                        $levenMatrix[$i][$j - 1],     // To insert operation
                        $levenMatrix[$i - 1][$j],     // To remove operation
                        $levenMatrix[$i - 1][$j - 1] // To replace operation
                    );
                }
            }
        }
        $minOperations = $levenMatrix[$size1][$size2];
        return $minOperations;
    }
}
