<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'user_registration');
$name=$_POST['user'];
$password=$_POST['pass'];
$email=$_POST['email'];
$date=$_POST['date'];
$s1="select * from user_table where Name='$name'";
$s2="select * from user_table where Password='$password'";
$s3="select * from user_table where Email='$email'";
$s4="select * from user_table where Birth='$date'";
$result1=mysqli_query($con,$s1);
$result2=mysqli_query($con,$s2);
$result3=mysqli_query($con,$s3);
$result4=mysqli_query($con,$s4);
$num1=mysqli_num_rows($result1);
$num3=mysqli_num_rows($result3);
if($num1==1)
{
    echo" Username Already Exits!";
}
else if($num3==1)
{
    echo" Email Already Exits!";
}
else{
    $reg="insert into user_table(Name,Password,Email,Birth) values('$name','$password','$email','$date')";
    mysqli_query($con,$reg);
    header('location:loginpage.php');

}

?>