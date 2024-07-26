<?php 
// This is the username, password, and database name.
$conn = new mysqli("localhost", "project", "moonwalker", "wetinde2_project");
if(mysqli_connect_errno()){
    printf("connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>