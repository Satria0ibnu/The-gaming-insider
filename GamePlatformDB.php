<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "games");
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Initialize variables with form input
$id = $_POST['id'];
$game_publisher_id = $_POST['game_publisher_id'];
$platform_id = $_POST['platform_id'];
$release_year = $_POST['release_year'];

// Insert the data into the table
$sql = "INSERT INTO game_platform (id, game_publisher_id, platform_id, release_year) VALUES ('$id', '$game_publisher_id', '$platform_id', '$release_year')";

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
