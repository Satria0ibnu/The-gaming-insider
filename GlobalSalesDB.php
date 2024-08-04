<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "games");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables with form input
$game_id = $_POST['game_id'];
$num_sales = $_POST['num_sales'];

// Insert the data into the table
$sql = "INSERT INTO global_sales (game_id, num_sales) VALUES ('$game_id', '$num_sales')";

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
