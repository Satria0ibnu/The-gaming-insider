<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "games");
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Tangkap data yang dikirimkan dari form
$game_title = mysqli_real_escape_string($conn, $_POST['title']);
$author = mysqli_real_escape_string($conn, $_POST['author']);
$rating = mysqli_real_escape_string($conn, $_POST['rating']);
$review = mysqli_real_escape_string($conn, $_POST['review']);

// Masukkan data ke dalam tabel review menggunakan query SQL
$sql = "INSERT INTO review (game_title, author, review, rating) VALUES ('$game_title', '$author', '$review', $rating)";
if (mysqli_query($conn, $sql)) {
  header('Location: Reviews.php');
    exit();
} else {
  header('Location: Reviews.php');
    exit();
}

// Tutup koneksi ke database
mysqli_close($conn);
?> 