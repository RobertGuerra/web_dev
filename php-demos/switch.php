<?php

$day = "Wednesday";


switch($day) {
    
    case "Monday":
        echo "<p>Oh dear! Back to work!</p>";
        break;
    case "Tuesday"; case "Wednesday"; case "Thursday"; case "Friday":
        echo "Ho hum diddly dum another day at work";
        break;
    case "Saturday":
        echo "<p>Horrayy! The weekend's here</p>";
        break;
}

?>