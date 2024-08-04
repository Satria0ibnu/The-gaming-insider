<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "games");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$id = $_POST['id'];
$publisher_name = $_POST['publisher_name'];

// Insert data into the "publisher" table
$sql = "INSERT INTO publisher (id, publisher_name) VALUES ('$id', '$publisher_name')";
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
