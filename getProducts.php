<!-- getProducts.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "catphp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select data from products table
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Product Name: " . $row["name"] . " - Stock: " . $row["stock"] . "<br>";
    }
} else {
    echo "No products found.";
}

// Close connection
$conn->close();
?>
