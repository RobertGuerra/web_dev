<?php



$hour = date('h');
// homework examples


if ($hour < 6) {
    echo "<p>You should be in bed and asleep!</p>";
}

if ($hour >= 6 && $hour < 12) {
    echo "<p>Good morning</p>";
}

if ($hour > 12 && $hour < 18) {
    echo "<p>Good afternoon</p>";
}

if ($hour >= 18 && $hour < 22) {
    echo "<p>Good evening</p>";
}

if ($hour >= 23) {
    echo "<p>Go to bed</p>";
}

?>