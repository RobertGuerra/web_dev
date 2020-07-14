<?php

function showFruit() {
    GLOBAL $fruit2;
    $fruit1 = "apples";
    $fruit2 = "grapes";
    echo $fruit1;
    echo "<br>" . $fruit2;
}

showFruit();


?>