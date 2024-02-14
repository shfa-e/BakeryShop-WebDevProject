<?php 
session_start();
if (!isset($_POST["cart"])) {
    http_response_code(400); // Bad Request
    exit("Cart data is missing.");
}

$cart = $_POST["cart"];
$address = $_POST["address"];
$username = $_SESSION["username"];


$link = mysqli_connect("localhost", "root", "", "DB");
$sql = "SELECT userID FROM users WHERE userName = '$username'";

// Execute the query
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$userID = $row["userID"];
mysqli_free_result($result);

$sql = "INSERT INTO CARTS (userID, orders, address) VALUES ('$userID', '$cart', '$address')";

if (mysqli_query($link, $sql)) {
    // Cart data saved successfully
    echo "Cart data saved to the database.";}

// Close database connection
mysqli_close($link);

header('Location: Homepage.html');


?>
