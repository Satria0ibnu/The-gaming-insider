<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "games");
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  // Query the database for user with given username and password
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  // Check if user exists
  if (mysqli_num_rows($result) == 1) {
    // User exists, redirect to home page or do something else
    header('Location: Home.php');
    exit();
  } else {
    // Invalid username or password, show error message
    header('Location: Login.php');
    exit();
  }
}

