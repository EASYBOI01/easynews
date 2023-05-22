<?php
include('blogger_conn.php');
session_start();
$user_check=$_SESSION['email'];

$sql = mysqli_query($conn,"SELECT * FROM register WHERE email='$user_check'");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$session_uin =$row['uin'];
$session_fullname = $row['fullname'];
$session_email = $row['email'];
$session_designation = $row['designation'];
$session_passport = $row['passport'];

if(!isset($user_check))
{
header("location: ../login/loginform.php");
}
?>




