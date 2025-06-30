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
    
