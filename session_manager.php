<<?php
session_start();
include('db_con.php');

date_default_timezone_set('Africa/Lagos');
$device =$_SERVER['HTTP_USER_AGENT'];
$ip =$_SERVER['REMOTE_ADDR'];
$_SESSION['user_id'] = uniqid('user_', true);

$_SESSION['user_ip'] = $ip;
$_SESSION['user_device'] = $device;


if(!$_SESSION['user_id'])
{

    header("location: index.php");

}
?>