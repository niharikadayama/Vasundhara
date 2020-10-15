<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'user_registration');
$name=$_POST['user'];
$password=$_POST['pass'];
$s="select * from user_table where Name='$name' && Password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
    header('location:homepage.php');
}
else{
    header('location:loginpage.php');
}
?>
