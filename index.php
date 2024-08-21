<?php
 $conn = mysqli_connect("localhost", "root", "", "siswa");

 $result = mysqli_query($conn, "SELECT * FROM ndaktau");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Dartar sintesa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>alamat</th>
        </tr>

        <?php while ( $row = mysqli_fetch_assoc($result) ) :
        ?>
        <tr>
            <td><?= $row["id"]?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>