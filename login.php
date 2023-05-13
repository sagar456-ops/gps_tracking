<?php
session_start();

ini_set('display_warnings', 1);
ini_set('display_notice', 1);

$con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
mysqli_select_db($con, 'sagar');
$number = $_POST['number'];
$password = $_POST['password'];
$status = $_POST['status'];
$_SESSION['ID'] = $id;
//$pass = md5($password);

$query = mysqli_query($con, "select * from usertable where number = '$number' and password = '$password' and status = 1");

if (mysqli_num_rows($query) != 0) {
      $_SESSION['ID'] = $id;
      $_SESSION['number'] = $number;
      header('location:main.php');
} 
else 
{
      header('location:index1.php?error=invaliduid');
}
?>