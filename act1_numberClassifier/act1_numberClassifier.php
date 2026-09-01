<?php
if (isset($_GET['num'])) {
    $num = (int) $_GET['num'];

    echo "<h1>Activity 1: Number Classifier</h1>";
    echo "Input Number: $num<br><br>";

    if ($num > 0) {
        echo "The number is positive<br>";
    } elseif ($num < 0) {
        echo "The number is negative<br>";
    } else {
        echo "The number is zero";
    }

    if($num != 0){
        if ($num % 2 == 0) {
            echo "The number is even.";
        } else {
            echo "The number is odd.";
        }
    }
} else {
    echo "Please provide a number in the URL.<br>";
    echo "Example: act1_numberClassifier.php?num=10";
}
?>
