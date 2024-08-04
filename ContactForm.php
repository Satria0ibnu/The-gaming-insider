<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Save the form data to a file
    $filename = 'messages.txt';
    $data = "$name, $email, $message\n";
    file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
    
    echo "Thank you for your message!";
}
?>
