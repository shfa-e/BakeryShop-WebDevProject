<?php
// getting data from form
$Fname = $_POST["name"];
$userEmail = $_POST["email"];
$mobileNo = $_POST["mobile"];
$userName = $_POST["username"];
$Pass = $_POST["password"];

// Validate input fields
if (empty($Fname) || empty($userEmail) || empty($mobileNo) || empty($userName) || empty($Pass)) {
    echo "<script>alert('Please fill in all fields.'); window.history.back();</script>";
    exit;
}

// Validate email format
if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Invalid email format.'); window.history.back();</script>";
    exit;
}

// Validate mobile number format (assuming 10 digits without any special characters)
if (!preg_match('/^\d{10}$/', $mobileNo)) {
    echo "<script>alert('Invalid mobile number format. Please enter 10 digits.'); window.history.back();</script>";
    exit;
}

// Validate password format
if (strlen($Pass) < 8 || !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/", $Pass)) {
    echo "<script>alert('Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one digit.'); window.history.back();</script>";
    exit;
}

// connecting to database
$link = mysqli_connect("localhost", "root", "", "DB");

// check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Check if the email already exists in the database
$sql = "SELECT userID FROM users WHERE userEmail = ?";
$stmt = mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt, "s", $userEmail);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

if (mysqli_stmt_num_rows($stmt) > 0) {
    // Email already exists
    echo "<script>alert('Email already exists. Please use a different email.'); window.history.back();</script>";
    exit;
}

// Close statement
mysqli_stmt_close($stmt);

// Prepare a select query to check if the username already exists
$sql = "SELECT userID FROM users WHERE userName = ?";
$stmt = mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt, "s", $userName);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

if (mysqli_stmt_num_rows($stmt) > 0) {
    // Username already exists
    echo "<script>alert('Username already exists.'); window.history.back();</script>";
    exit;
}

// Close statement
mysqli_stmt_close($stmt);

// prepare an insert query
$sql = "INSERT INTO users (fName, userEmail, mobileNo, userName, Pass) VALUES (?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = mysqli_prepare($link, $sql);

// Bind parameters
mysqli_stmt_bind_param($stmt, "sssss", $Fname, $userEmail, $mobileNo, $userName, $Pass);

// execute the statement
if (mysqli_stmt_execute($stmt)) {

    // session
    session_start();
    $_SESSION["email"] = $userEmail;
    $_SESSION["mobile"] = $mobileNo;
    $_SESSION["username"] = $userName;

    // close connection
    mysqli_close($link);

    // go to home page
    header('Location: Homepage.html');
} else {
    echo "<script>alert('Error: Could not insert data.'); window.history.back();</script>";
}

// Close statement
mysqli_stmt_close($stmt);


