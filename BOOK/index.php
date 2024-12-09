<?php
    include 'book.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK OOP</title>
</head>
<body>
    <form action="" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">

        <br>

        <label for="price">Price</label>
        <input type="number" name="price" id="price">

        <br>

        <button type="submit" name="btn_submit">Submit</button>
    </form>
    
    <!-- collect data from the form -->
    <?php
        if(isset($_POST['btn_submit'])){
            // assing a variable for the vales
            $title = $_POST['title'];
            $price = $_POST['price'];

            // create an instance of the Book class
            
            $book = new book($title,$price);

            // Set the values using the setter
            // $book->setTitle($title);
            // $book->setPrice($price);

            // Dispaly the values useing the getters
            echo "Title:" . $book->getTitle() . "<br>";
            echo "Price"  . $book->getPrice() . "<br>";
        }
    ?>

</body>
</html>