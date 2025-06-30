<?php
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