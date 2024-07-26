<?php
session_start();
include('db_con.php');
$user_check=$_SESSION['email'];

$sql = mysqli_query($conn,"SELECT * FROM landingpage WHERE emailaddress='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

// $staff_id=$row['staff_id'];
$session_uin=$row['uin'];
$session_fullname =$row['fullname'];
$session_lastname =$row['lastname'];
$session_gender = $row['gender'];
$session_relationship = $row['relationship'];
$session_email = $row['email'];
$session_postaladd = $row['posaladd'];
$session_passport = $row['passport'];
$session_password = $row['password'];
$session_phone = $row['phone'];

if(!isset($user_check))
{
header("Location: ../");
}
?>




