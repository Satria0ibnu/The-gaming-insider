<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "games");
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Initialize variables with form input
$id = $_POST['id'];
$genre_name = $_POST['genre_name'];

// Insert the data into the table
$sql = "INSERT INTO genre (id, genre_name) VALUES ('$id', '$genre_name')";

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
