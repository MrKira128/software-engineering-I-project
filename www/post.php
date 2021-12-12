<?php
    // import database connection
    require_once 'database.php';
    // if(isset($_POST['submit'])){
        echo "in submit";
        // clothes data
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        $category = $_POST['category'];

        echo "name: $name<br>";
        echo "price: $price<br>";
        echo "description: $description<br>";
        echo "image: $image<br>";

        // insert clothes data
        $sql = "INSERT INTO clothes (name, price, image, description) VALUES ('$name', '$price', '$image', '$description')";
        // $result = mysqli_query($conn, $sql);
        $conn->query($sql);
        if($result){
            echo "Successfully added";

        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    // }
    echo "<br><a href='index.php'>Back to home</a>";
    echo "<br><a href='insert.php'>Back to insert</a>";
?>