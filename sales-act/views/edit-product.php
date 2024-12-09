<?php

session_start();

include '../classes/Product.php';

$product_id = $_POST['product_id'] ;
$product_obj = new Product;
$product = $product_obj->getProduct($product_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit User</title>

    
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h3">The Company</h1>
            </a>
        </div>

        <div class="navbar-nav">
            <span class="navbar-text"><?= $_SESSION['full_name']?></span>
            <form action="../action/logout.php" method="post" class="d-flex ms-2">
                <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
            </form>
        </div>
    </nav>  

    <main class="row justify-content-center">
        <div class="col-4 ">
            <h2 class="text-center">Edit Product</h2>

            <form action="../actions/update-product.php" method="post">
                <div class="row justify-content-center mb-3">
  

                    <input type="hidden" name="product_id" id="product-id" value="<?=$product['id']?>">
                

                <div class="mb-3">
                    <label for="product-name" class="form-label">Product Name</label>
                    <input type="text" name="product_name" id="product-name" value="<?=$product['product_name']?>"
                    class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" value="<?=$product['price']?>"
                    class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="quantity" class="form-label" fw-bold>Quantity</label>
                    <input type="number" name="quantity" id="quantity" value="<?=$product['quantity']?>"
                    class="form-control fw-bold" required>
                </div>

                <div class="mb-3">
                    <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
                    <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>