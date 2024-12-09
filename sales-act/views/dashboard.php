<?php

session_start();

include '../classes/Product.php';

$products_obj = new Product;
$all_products = $products_obj->getAllProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>dashbord</title>

    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h3">Sales</h1>
            </a>
        </div>

        <div class="navbar-nav">
            <span class="navbar-text"><?= $_SESSION['full_name']?></span>
            <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
            </form>
        </div>
    </nav>  

    <main class="row justify-content-center">
        <div class="col-6 ">

            <div class="d-flex mb-3 justify-content-between">
                <h2 class="text-center">Product List</h2>
                <a href="register-product.php" class="btn">
                    <i class="fas fa-plus text-info"></i>
                </a>
            </div>

            <table class="table table-hover align-middle">
                <thead>
                    <tr>    
                        <th>ID</th>
                        <td>Product name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($product = $all_products->fetch_assoc()){
                    ?>
                        <tr>
                            <td><?= $product['id']?></td>
                            <td><?= $product['product_name']?></td>
                            <td><?= $product['price']?></td>
                            <td><?= $product['quantity']?></td>
                            <td>
                                <form action="edit-product.php" method="post">
                                    <input type="hidden" name="product_id" value="<?= $product['id']?>">
                                    <button type="submit" class="btn btn-outline-warning" title="Edit">
                                        <i class="far fa-pen-to-square"></i>
                                    </button>
                                </form>
                                <form action="../actions/delete-product.php" method="post">
                                    <input type="hidden" name="product_name" value="<?= $product['product_name']?>">
                                    <button type="submit" class="btn btn-outline-danger" title="Delete">
                                        <i class="far fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>        
            </table>
        </div>


    </main>

    </div>



</body>
</html>