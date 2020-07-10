<?php

$count = 1;

//using a while loop
while ($count <= 10) {
    
    echo $count . "<br>";
    $count++;
}

//using forloop
for ($count = 1; $count <= 10; $count++) {
    echo $count . "<br>";
}

// example -  print a '*' that 10 rows high and 20 columns long
for ($row = 1; $row <= 10; $row++) {
    for($col = 1; $col <= 20; $col++) {
        echo "* ";
    }
    echo "<br>";
}


?>