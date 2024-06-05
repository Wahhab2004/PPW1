<?php
    $favcolor = "blue";
    switch($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break; // digunakan untuk memberhentikan, ketika kondisi sudah benar.
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neighter red, blue, nor green!";
    }
?>
