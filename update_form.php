
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