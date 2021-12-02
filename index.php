<?php

/**
 * Simple test cases.
 *
 * Description: This file created to display hamming and levenshtine distance
 * on a set of test cases.
 * 
 * @since 2/12/2021
 */

require_once 'HammingDistance.php';
require_once 'LevenshteinDistance.php';

?>
<html>

<link rel="stylesheet" href="css/style.css">

<body>

    <h2>Test cases for hamming and levenshtine distance </h2>

    <table style="width:100%">
        <tr>
            <th>First String</th>
            <th>Second String</th>
            <th>Hamming Distance</th>
            <th>Levenshtine Distance</th>

        </tr>
        <tr>
            <?php /*Fisrt test*/
            $string1 = "Elevatus";
            $string2 = "Elevatos"; ?>
            <?php /*Echo strings values*/ ?>
            <td><?php echo $string1; ?></td>
            <td><?php echo $string2; ?></td>
            <?php /*Call functions to find distance*/ ?>
            <td><?php echo HammingDistance::hamming_dis($string1, $string2); ?></td>
            <td><?php echo LevenshteinDistance::levenshtein_dis($string1, $string2); ?></td>

        </tr>
        <tr>
            <?php /*Second test*/
            $string1 = "this is test";
            $string2 = "the is test"; ?>
            <?php /*Echo strings values*/ ?>
            <td><?php echo $string1; ?></td>
            <td><?php echo $string2; ?></td>
            <?php /*Call functions to find distance*/ ?>
            <td><?php echo HammingDistance::hamming_dis($string1, $string2); ?></td>
            <td><?php echo LevenshteinDistance::levenshtein_dis($string1, $string2); ?></td>

        </tr>
        <tr>
            <?php /*Thirrd test*/
            $string1 = "this is a test";
            $string2 = "this is test"; ?>
            <?php /*Echo strings values*/ ?>
            <td><?php echo $string1; ?></td>
            <td><?php echo $string2; ?></td>
            <?php /*Call functions to find distance*/ ?>
            <td><?php echo HammingDistance::hamming_dis($string1, $string2); ?></td>
            <td><?php echo LevenshteinDistance::levenshtein_dis($string1, $string2); ?></td>

        </tr>
        <tr>
            <?php /*Thirrd test*/
            $string1 = "Levenshtein";
            $string2 = "hamming"; ?>
            <?php /*Echo strings values*/ ?>
            <td><?php echo $string1; ?></td>
            <td><?php echo $string2; ?></td>
            <?php /*Call functions to find distance*/ ?>
            <td><?php echo HammingDistance::hamming_dis($string1, $string2); ?></td>
            <td><?php echo LevenshteinDistance::levenshtein_dis($string1, $string2); ?></td>

        </tr>
    </table>

    <p>To undestand the ubove test cases better, Try to insert your strings.</p>

    <?php /* Call userTestsForm file to get user inputs */ ?>
    <form action="userTestsForm.html">
        <input type="submit" value="Try new strings">
    </form>
</body>

</html>