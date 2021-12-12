<?php
//-----------------------------------------------------

// connect to database
$servername = "localhost:3306";
$username = "root";
$password = "notSecureChangeMe";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);
// $conn = mysqli_connect('sql11.freesqldatabase.com', 'sql11454791', '2zF764wrvg', 'sql11454791');
// $conn = mysqli_connect('sql11.freesqldatabase.com', 'sql11454791', '2zF764wrvg', 'sql11454791');
// $conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";

// create table for clothes if not exists
$sql = "CREATE TABLE IF NOT EXISTS clothes (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    price FLOAT(10,2) NOT NULL,
    image VARCHAR(30) NOT NULL,
    description VARCHAR(30) NOT NULL
)";
// execute query
$conn->query($sql);
//-----------------------------------------------------
//-----------------------------------------------------

// // insert demo data into clothes table

// $sql = "INSERT INTO clothes (name, price, image, description)
// VALUES ('T-shirt', '10.00', 'tshirt.jpg', 'T-shirt for summer'),
// ('Trousers', '20.00', 'trousers.jpg', 'Trousers for winter'),
// ('Shoes', '30.00', 'shoes.jpg', 'Shoes for summer and winter'),
// ('Hat', '40.00', 'hat.jpg', 'Hat for summer and winter'),
// ('Gloves', '50.00', 'gloves.jpg', 'Gloves for summer and winter'),
// ('Socks', '60.00', 'socks.jpg', 'Socks for summer and winter')";
// // execute query
// $conn->query($sql);

?>