<?php
// Include necessary files
session_start();

// Create connection to the database
$link = mysqli_connect("localhost", "root", "", "DB");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Check if the form was submitted and the delete_account button was clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_account"])) {
    // Get the user's email from session
    $userEmail = $_SESSION["email"];
    // SQL to delete user account
    $sql = "DELETE FROM USERS WHERE userEmail = '$userEmail'";

    // Attempt to execute the query
    if (mysqli_query($link, $sql)) {
        // Redirect to login page
        header("Location: login.php");
        exit();
    } else {
        // Error deleting account
        echo "Error deleting account. Please try again later.";
    }
}

// Close connection
mysqli_close($link);
?>

<!-- <script>
// Check if the account was successfully deleted and display a popup
//<?php
// if (isset($_SESSION['delete_success']) && $_SESSION['delete_success'] === true) {
//     echo "alert('Account deleted successfully.');";
//     unset($_SESSION['delete_success']); // Reset the session variable
// }
//?>
</script> -->
