
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
