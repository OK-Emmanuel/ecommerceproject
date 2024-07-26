<?php
session_start();
include('db_con.php');
$user_check=$_SESSION['email'];

$sql = mysqli_query($conn,"SELECT * FROM adminreg WHERE emailadd='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

// $staff_id=$row['staff_id'];
$session_uin=$row['uin'];
$session_fullname =$row['fullname'];
$session_emailaddress = $row['emailadd'];
$session_number = $row['phone'];
// $session_station = $row['station'];
$session_gender = $row['gender'];
$session_designation = $row['designation'];
$session_password = $row['password'];
$session_passport = $row['passport'];

if(!isset($user_check))
{
header("Location: ../");
}
?>




