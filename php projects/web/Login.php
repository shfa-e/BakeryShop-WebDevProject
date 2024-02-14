<?php

// Getting data from form
$Fname = "";
$userEmail = "";
$mobileNo = "";
$userName = $_POST["username"];
$Pass = $_POST["password"];

// Connecting to database
$link = mysqli_connect("localhost", "root", "", "DB");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE userName = '$userName' AND Pass = '$Pass'";

// Execute the query
if ($result = mysqli_query($link, $sql)) {
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);

        $Fname = $row['fName'];
        $userEmail = $row['userEmail'];
        $mobileNo = $row['mobileNo'];

        // Setting cookie
        $cookie_name = "user";
        $cookie_value = $Fname;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    
        // Starting session
        session_start();
        $_SESSION["name"] = $Fname;
        $_SESSION["email"] = $userEmail;
        $_SESSION["mobile"] = $mobileNo;
        $_SESSION["username"] = $userName;
    
        // Redirect to home page
        header('Location: Homepage.html');
        exit; 
    } else {
        // Alert for failed login
        echo "<script>alert('Incorrect username or password. Please try again.'); window.location.href = 'login.html';</script>";
        exit; 
    }
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>

