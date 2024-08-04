<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "games");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables with form input
$id = $_POST['id'];
$game_id = $_POST['game_id'];
$publisher_id = $_POST['publisher_id'];

// Insert the data into the table
$sql = "INSERT INTO game_publisher (id, game_id, publisher_id) VALUES ('$id', '$game_id', '$publisher_id')";

if (mysqli_query($conn, $sql)) {
    header('Location: AdminForm.php');
    exit();
} else {
    $error_message = "Error inserting data into table: " . mysqli_error($conn);
    header("Location: AdminForm.php?error_message=$error_message");
    exit();
}

// Close the database connection
mysqli_close($conn);
?>
