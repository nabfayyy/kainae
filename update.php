<?php
require_once('db.php');

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['Name'];
    $price = $_POST['Price'];
    $year = $_POST['Year'];
    $size = $_POST['Size'];
    $stock = $_POST['Stock'];
    
    $description = $_POST['Description'];

    $query = "UPDATE clothes 
              SET name='$name', price='$price', year='$year', size='$size', stock='$stock', description='$description' 
              WHERE id='$id'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil diupdate!'); window.location.href='read.php';</script>";
    } else {
        echo "Gagal update data.";
    }
}
?>
