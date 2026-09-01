<?php
if (isset($_GET['total'])) {
    $total = (float) $_GET['total'];

    if ($total < 50) {
        $discountRate = 0;
    } elseif ($total < 100) {
        $discountRate = 0.10;
    } elseif ($total < 200) {
        $discountRate = 0.15;
    } else {
        $discountRate = 0.20;
    }

    $discountAmount = $total * $discountRate;
    $finalPrice = $total - $discountAmount;

    echo "<h1>Activity 2: E-commerce Discount Tier</h1>";
    echo "Original Price: ₱" .number_format($total, 2). "<br>";
    echo "Discount Amount: ₱" .number_format($discountAmount, 2). "<br>";
    echo "Final Price: ₱" .number_format($finalPrice, 2);
} else {
    echo "Please provide a cart total in the URL.<br>";
    echo "Example: activity2.php?total=150";
}
?>
