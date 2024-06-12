<?php

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "akademik";

    // Create connections
    $conn = mysqli_connect($servername, $username, $password, $database);


    if(!$conn) {
        die("Connection failed" . mysqli_connect_error()); 
    }

    $sql = "SELECT nim, nama, alamat FROM mahasiswa";
    $result = mysqli_query($conn, $sql);

    // Jika row lebih dari 0
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "NIM: " . $row["nim"] . " -Name: " . $row["nama"] . " " . $row["alamat"] . "<br>";
        } 
        
    }
    else {
        echo "0 results";
    }

    // mysqli_close($conn);


?>