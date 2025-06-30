
<?php
require_once('db.php');

$id = $_GET['id'];

$query = "SELECT * FROM clothes WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Detail Produk</h2>
    <br>

    <div class="card mb-3" style="max-width: 800px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="uploaded<?php echo $data['image'] ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['name'] ?></h5>
                    <p class="card-text">Price Rp<?php echo number_format($data['price']) ?></p>
                    <p class="card-text">Stock: <?php echo $data['stock'] ?></p>
                    <p class="card-text">Size: <?php echo $data['size'] ?></p>
                    <p class="card-text">Year: <?php echo $data['year'] ?></p>

                    <p class="card-text"><strong>Deskripsi:</strong><br>
                        <?php
                        if (isset($data['description']) && !empty($data['description'])) {
                            echo nl2br($data['description']);
                        } else {
                            echo 'Tidak ada deskripsi.';
                        }
