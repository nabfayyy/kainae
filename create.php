<?php
    require_once('db.php');

    $name = $_POST['Name'];
    $price = $_POST['Price'];
    $year = $_POST['Year'];
    $size = $_POST['Size'];
    $stock = $_POST['Stock'];
    $description = $_POST['Description'];

    $image = uniqid() .'.'. pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    
    move_uploaded_file($_FILES['image']['tmp_name'], 'uploaded' . $image);

    $query = "INSERT INTO clothes (name, price, year, size, stock, description, image)
                VALUES('$name', '$price', '$year', '$size', '$stock', '$description', '$image')";

    mysqli_query($conn, $query);

    echo "<script>alert('Proses Tambah Data Berhasil')</script>";
    echo"<script>window.location.href = 'read.php'</script>";
?>
