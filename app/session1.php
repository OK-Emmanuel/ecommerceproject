<?php
session_start();
include('db_con.php');
$user_check=$_SESSION['email'];

$sql = mysqli_query($conn,"SELECT * FROM register WHERE emailaddress='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

// $staff_id=$row['staff_id'];
$session_uin=$row['uin'];
$session_businessname =$row['businessname'];
$session_emailaddress = $row['emailaddress'];
$session_phonenumber = $row['phonenumber'];
$session_paddress = $row['paddress'];
$session_category = $row['category'];
$session_businesstype = $row['businesstype'];
$session_ownername = $row['ownername'];
$session_status = $row['status'];
$session_dob = $row['dob'];
$session_passport = $row['passport'];

if(!isset($user_check))
{
header("Location: ../");
}
?>




