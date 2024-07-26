<?php
// Assuming XAMPP default root user with no password
$conn = new mysqli("localhost", "root", "", "wetinde2_project");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
