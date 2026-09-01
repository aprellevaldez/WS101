<?php
if (isset($_GET['num'])) {
    $num = (int) $_GET['num'];

    echo "<h1>Activity 1: Number Classifier</h1>";
    echo "Input Number: $num<br><br>";

    if ($num > 0) {
        echo "The number is Positive<br>";

        if ($num % 2 == 0) {
            echo "It is Even.";
        } else {
            echo "It is Odd.";
        }
    } elseif ($num < 0) {
        echo "The number is Negative";
    } else {
        echo "The number is Zero";
    }
} else {
    echo "Please provide a number in the URL.<br>";
    echo "Example: activity1.php?num=10";
}
?>
