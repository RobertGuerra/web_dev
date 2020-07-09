<?php

$day = date('l');
$date = date('d');
$month = date('M');
$year = date('Y');
$date_suffix = date('S');

echo "<p>Today is $day</p>";

echo "Today is " . $day;

// example 1 solution:
$next_near = $year + 1;
echo "<p>The date today is the $date$date_suffix of $month $year.</p>";
echo "<p>This time next year it will be the $date$date_suffix of $month $next_near.</p>";



?>

<p>Today is <?php echo $day; ?></p>