<?php
use phpmailer\phpmailer\phpmailer;
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['company']) && isset($_POST['phone ']))
{
    $name=$_POST['name'];
    $name=$_POST['email'];
    $name=$_POST['company'];
    $name=$_POST['phone'];
    $name=$_POST['message'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail= new PHPMailer();

    $mail ->isSMTP();
    $mail ->Host="smtp.gmail.com";
    $mail ->SMTPAuth=true;
    $mail ->Username="mansitardeja1999@gmail.com";
    $mail ->Password="ilovemyself0";
    $_mail ->port=465;
    $_mail ->SMTPSecure ="ssl";
    
    
    $mail ->isHTML(true);
    
    $mail ->setFrom($email,$name);
    
    $mail ->addAddress("mansitardeja1999@gmail.com");
    





}

?>