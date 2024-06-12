<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h2>List Data</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>


        <?php
            include "database.php";
            $sql = "select * from mahasiswa";
            $mahasiswa2 = mysqli_query($conn, $sql);
            $no = 1;
            foreach($mahasiswa2 as $value) {
                echo "
                    <tr>
                        <td>$no</td>
                        <td>".$value['nama']."</td>
                        <td>".$value['alamat']."</td>

                    </tr>
                ";
                $no++;
            }
        
        ?>

    </table>
    
</body>
</html>