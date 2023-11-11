<!-- process.php -->
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

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST["productName"];
    $category = $_POST["category"];
    $stock = $_POST["stock"];
    $price = $_POST["price"];

    // Insert data into products table
    $sql = "INSERT INTO products (name, category, stock, price) VALUES ('$productName', '$category', $stock, $price)";
    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
