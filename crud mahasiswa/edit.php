<?php
    include 'proses_data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="id" value="<?= $data[0]['id']?>" id="" placeholder="id"> <br>
        <input type="text" name="nama" value="<?= $data[0]['nama']?>" id="" placeholder="nama"> <br>
        <input type="text" name="nim" placeholder="nim" value="<?= $data[0]['nim']?>"> <br>
        <input type="text" name="jurusan" value="<?= $data[0]['jurusan']?>" placeholder="jurusan"> <br>
        <button name="update" type="submit">EDIT</button>
    </form>
</body>
</html>