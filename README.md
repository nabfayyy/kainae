[Uploading index.php…]()<?php
require_once('db.php');

$query = "SELECT * FROM clothes";
$result = mysqli_query($conn, $query);

$rows = mysqli_num_rows($result);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

<body>

  <section id="home" class="d-flex align-items-center" style="height: 120vh; background: url('assets/coverkainaee.png') no-repeat center center/cover;">
    <div class="container text-start" style="margin-left: 30px;">
      <h5 class="text-uppercase fw-semibold mb-3" style="font-size: 35px; color :rgb(97, 38, 52)">New Product</h5>
      <h1 class="display-4 fw-bold style=">
        <span style="font-size: 84px; color:rgb(255, 90, 140);">Fabulous Style</span>
        <span style="font-size: 84px; color:rgb(178, 70, 95);">That You Want</span>
      </h1>
      <p class="lead" style="font-size: 30px; color: rgb(200, 75, 102);">From Fresh Ideas to Fierce Fashion<br>Lahir Anggun, Tumbuh Jadi Baru</p>
    </div>
  </section>



  <br><br><br><br>
  <div class="container" id="produk">
    <h1 class="text-center">Our Product</h1>
    <br><br>

    <div class="row row-cols-3 g-3">
      <?php
      for ($index = 0; $index < $rows; $index++) {
        $d = $data[$index];
      ?>
        <!-- card -->
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="uploaded<?php echo $d['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $d['price'] ?></h5>
              <p class="card-text"><?php echo $d['name'] ?></p>
              <a href="detail.php?id=<?php echo $d['id'] ?>" class="btn btn-primary">Product Detail</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <!-- footer -->

  <footer class="mt-5 py-5" style="background-color:#FFE3F0; margin: 0; padding: 0; width: 100%;">
    <div class="container-fluid pt-4">
      <div class="row">

        <div class="footer-one col-lg-3 col-md-6 col-12">
          <img src="assets/Logo.png" alt="" style="height: 18ch;">
          <p>KAINAÉ adalah solusi fashion cerdas dengan desain bolak-balik yang praktis dan stylish. Melalui platform digital interaktif, kamu bisa belanja dengan mudah dan tampil variatif tanpa menambah isi lemari.</p>
        </div>

        <div class="footer-one col-lg-3 col-md-6 col-12">
          <h5 class="pb-2">KEUNGGULAN</h5>
          <ul class="text">
            <p>Reversible</p>
            <p>Effortless</p>
            <p>Versatile</p>
            <p>Statement</p>

          </ul>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-12">
          <h5 class="pb-2">Find Us</h5>
          <div>
            <h6 class="text-uppercase">Address</h6>
            <p>Departemen Statistika Bisnis</p>
          </div>
          <div>
            <h6 class="text-uppercase">Phone</h6>
            <p>wa.me/085648413328</p>
          </div>
          <div>
            <h6 class="text-uppercase">Email</h6>
            <p>Kainae@gmail.com</p>
          </div>
        </div>

        <div class="footer-one col-lg-3 col-md-6 col-12">
          <h5 class="pb-2">Our Social Media</h5>
          <div class="row">
            <p>
              <img src="assets/LOGO IG.png" style="width: 30px; vertical-align: middle;" class="me-2">
              @KainaeOfficial
            </p>

            <p>
              <img src="assets/LOGO TIKTOK.png" style="width: 30px; vertical-align: middle;" class="me-2">
              @KainaeOfficial
            </p>

            <p>
              <img src="assets/LOGO WA.png" style="width: 30px; vertical-align: middle;" class="me-2">
              085648413328
            </p>
          </div>

        </div>
      </div>
    </div>
    </div>
  </footer>

  </div>
  </div>
</body>
<?php
    require_once('db.php');

    $query= "SELECT * FROM clothes";
    $result= mysqli_query($conn, $query);

    $rows= mysqli_num_rows($result);
    $data= mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container"> 
        <br> <br>
        <h2>Stock Data</h2>
        <button type="button" class="btn btn-secondary" href="create_from.php">
            <a href="create_from.php">Add Data</a>
        </button>
        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Year</th>
                    <th scope="col">Size</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for ($index=0; $index<$rows; $index++) {
                ?>
                        <tr>
                            <td><?php echo $data[$index]['name'] ?></td>
                            <td><?php echo $data[$index]['price']?></td>
                            <td><?php echo $data[$index]['year']?></td>
                            <td><?php echo $data[$index]['size']?></td>
                            <td><?php echo $data[$index]['stock']?></td>
                            <td><img src="uploaded<?php echo $data[$index]['image'] ?>" class="img-thumbnail" width="100" height="100"></td>
                            <td><?php echo $data[$index]['description']?></td>
                            <td>
                                <a href="update_form.php?id=<?php echo $data [$index]['id']?>&image=<?php echo $data [$index]['image']?>">
                                     <button type="button" class="btn btn-warning">Change Data</button>
                                </a>
                                <a href="delete.php? id=<?php echo $data [$index]['id']?>">
                                     <button type="button" class="btn btn-danger">Delete Data</button>
                                </td>
                                </a>
                            </td>
                </tr>
                <?php  
                    }
                    ?>

            </body>
        </table>
    </div>
    

DROP TABLE IF EXISTS clothes;
DROP TABLE IF EXISTS users;

CREATE TABLE IF NOT EXISTS clothes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price BIGINT NOT NULL,
    year CHAR(4) NOT NULL,
    category CHAR(10) NOT NULL, 
    stock INT NOT NULL,
    image VARCHAR(255) 
);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
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


<?php
    require_once('db.php');

    $id = $_GET['id'];

    $query = "SELECT * FROM clothes WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    $rows = mysqli_num_rows($result);
    $data = mysqli_fetch_assoc($result);

    if ($rows == 0) {
        echo "<script>alert('Data Id Not Found')</script>";
        echo "<script>window.location.href= 'read.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <title>Update Data</title>
</head>

<body>
  <div class="container">
    <br><br>
    <h2>Update Data</h2>
    <br><br>

    <form action="update.php?id=<?php echo $data['id'] ?>" method="post">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="Name" value="<?php echo $data['name'] ?>">
      </div> 

      <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" step="1" class="form-control" name="Price" value="<?php echo $data['price'] ?>">
      </div> 

      <div class="mb-3">
        <label class="form-label">Year</label>
        <input type="number" step="1" class="form-control" name="Year" value="<?php echo $data['year'] ?>">
      </div> 

      <div class="mb-3">
        <label class="form-label">Size</label>
        <select class="form-select" name="Category">
            <option value="S" <?php if ($data['size'] == 'S') echo "selected" ?>>S</option>
            <option value="M" <?php if ($data['size'] == 'M') echo "selected" ?>>M</option> 
            <option value="L" <?php if ($data['size'] == 'L') echo "selected" ?>>L</option>
            <option value="XL" <?php if ($data['size'] == 'XL') echo "selected" ?>>XL</option> 
        </select>
      </div> 

      <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="number" step="1" class="form-control" name="Stock" value="<?php echo $data['stock'] ?>">
      </div> 

      <div class="mb-3">
        <label class="form-label">Deskripsi Produk</label>
        <textarea class="form-control" name="Description" rows="4"><?php echo isset($data['description']) ? $data['description'] : '' ?></textarea>
      </div>

      <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
    </form>
  </div>  
</body>
</html>

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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Tambah Data</title>
</head>
<body>
  <div class="container">
    <br><br>
    <h2>Tambah Data</h2>
    <br><br>

    <form action="create.php" enctype="multipart/form-data" method="post">
      <div class="mb-3">
        <label for="Name" class="form-label">Name</label>
        <input type="text" class="form-control" id="Name" placeholder="PuffPop Shirt" name="Name">
      </div> 

      <div class="mb-3">
        <label for="Price" class="form-label">Price</label>
        <input type="number" step="1" class="form-control" id="Price" placeholder="150000" name="Price">
      </div> 

      <div class="mb-3">
        <label for="Year" class="form-label">Year</label>
        <input type="number" step="1" class="form-control" id="Year" placeholder="2025" name="Year">
      </div> 

      <div class="mb-3">
        <label for="Size" class="form-label">Size</label>
        <select class="form-select" id="Size" name="Size">
          <option value="S" selected>S</option>
          <option value="M">M</option>
          <option value="L">L</option>
          <option value="XL">XL</option>
        </select>
      </div> 

      <div class="mb-3">
        <label for="Stock" class="form-label">Stock</label>
        <input type="number" step="1" class="form-control" id="Stock" placeholder="96" name="Stock">
      </div> 

      <div class="mb-3">
        <label for="image" class="form-label">image</label>
        <input type="file" class="form-control" id="image" name="image">
      </div> 

      <div class="mb-3">
        <label for="Description" class="form-label">Deskripsi Produk</label>
        <textarea class="form-control" id="Description" name="Description" rows="4" placeholder="Tulis deskripsi produk di sini..."></textarea>
      </div>

      <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
    </form>
  </div>  
</body>
</html>

<?php
    $server= 'localhost';
    $database= 'Kainae';
    $username= 'root';
    $password= '';

    $conn = mysqli_connect($server, $username, $password, $database);
?>
<?php
    require_once('db.php');

    $id = $_GET['id'];
    $image = $_GET['image'];

    $query = "DELETE FROM clothes
                WHERE id = '$id'";

    mysqli_query($conn, $query);

    unlink('uploaded/'. $image);

    echo "<script>alert('Proses Delete Data Berhasil')</script>";
    echo"<script>window.location.href = 'read.php'</script>";
?>

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

