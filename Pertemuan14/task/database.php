<?php

    $servername = "localhost:3307";
    $user = "root";
    $pass = "";
    $database = "akademik";

    $conn = mysqli_connect($servername, $user, $pass, $database);

    if(!$conn) {
        die("Connection Failed" . mysqli_connect());
    }



    $sql = "SELECT * FROM dosen";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows ($result)> 0) {
        echo "<h2> List Dosen UGM </h2>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "Name: " . $row["name"] . ", NIP: " .$row["nip"] . ", Email: " . $row["email"] . "<hr>" ;
        }
    }

    else {
        echo "Zero data";
    }

?>