<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "games");
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Initialize variables with form input
  $id = $_POST['id'];
  $genre_id = $_POST['genre_id'];
  $game_name = $_POST['game_name'];
  $image = $_POST['image'];

  // Insert the data into the table
  $sql = "INSERT INTO game (id, genre_id, game_name, image) VALUES ('$id', '$genre_id', '$game_name', '$image')";

  if (mysqli_query($conn, $sql)) {
      header('Location: AdminForm.php');
      exit();
  } else {
      $error_message = "Error inserting data into table: " . mysqli_error($conn);
      header("Location: AdminForm.php?error_message=$error_message");
      exit();
  }
}

// Close the database connection
mysqli_close($conn);
?>