<?php
    include 'Fare.php';
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
        <label for="title">Age</label>
        <input type="text" name="age" id="age">

        <br>

        <label for="price">Km</label>
        <input type="number" name="kilometers" id="kilometers">

        <br>

        <button type="submit" name="btn_submit">Submit</button>
    </form>
    
    <!-- collect data from the form -->
    <?php
        if(isset($_POST['btn_submit'])){
            // assing a variable for the vales
            $age = $_POST['age'];
            $km = $_POST['kilometers'];

            // create an instance of the Book class            
            $fare = new fare;

            // Set the values using the setter
            $fare->setAge($age);
            $fare->setKm($km);
            $fare->setFare();

            // Dispaly the values useing the getters
            echo "Age:" . $fare->getAge() . "<br>";
            echo "Kilometers:"  . $fare->getKm() . "<br>";
            echo "Fare:"  . $fare->getFare() . "<br>";
        }
    ?>

</body>
</html>