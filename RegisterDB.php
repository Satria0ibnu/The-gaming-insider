<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "games");
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Tangkap data yang dikirimkan dari form
$fullname = mysqli_real_escape_string($conn, $_POST['flname']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['Password']);

// Masukkan data ke dalam tabel users menggunakan query SQL
$sql = "INSERT INTO users (full_name, username, password) VALUES ('$fullname', '$username', '$password')";
if (mysqli_query($conn, $sql)) {
    echo "<a href = 'Login.php'>Success</a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi ke database
mysqli_close($conn);
?>
