<?php
    $students = array(
        array("Wahhab", "Semester 2", "IPK: 4.0"),
        array("Randomf", "Semester 4", "IPK: 3.5"),
        array("Randoms", "Semester 6", "IPK: 3.8"),
        array("Gibran", "Graduation", "IPK: 2.5")
    );

    for($rows=0; $rows < 4; $rows++) { 
        echo "<b>Detail students: </b>"  . $rows + 1;
        echo "<br>";
        for ($cols=0;  $cols < 3; $cols++) { 
            echo $students[$rows][$cols] . "<br>";

            if($students[$rows][$cols] == "IPK: 4.0") {
                echo "Selamat anda mendapatkan nilai akhir Summa Cumlaude <br>";
            }

            elseif($students[$rows][$cols] == "IPK: 3.8") {
                echo "Selamat anda mendapatkan nilai akhir Magna Cumlaude <br>";
            }

            elseif($students[$rows][$cols] == "IPK: 3.5") {
                echo "Selamat anda mendapatkan nilai akhir Cumlaude <br>";
            }

            elseif($students[$rows][$cols] == "IPK: 2.5")  {
                echo "Perbaiki lagi belajar anda!";

            }
        }

        echo "<br>";
    }

?>