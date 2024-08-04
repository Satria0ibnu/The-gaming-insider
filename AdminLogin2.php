<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "games");
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // Login success, redirect to admin dashboard
        header("Location: AdminForm.php");
        exit();
    } else {
        // Login failed, display error message
        header("Location: AdminLogin.php");
        exit();
    }
}

// Close database connection
mysqli_close($conn);
?>
