<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';

  // Include autoload.php file
  require 'PHPMailer/PHPMailerAutoload.php';
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);


  $output = '';

  if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone=$_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'mansitardeja1999@gmail.com';
      // Gmail Password
      $mail->Password = 'Mann@06100';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom($_POST['email'],$_POST['name']);
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('mansitardeja1999@gmail.com');
      $mail->addReplyTo($_POST['email'],$_POST['name']);
      $mail->isHTML(true);
      $mail->Subject = 'Form Submission  :' .$_POST['subject'];
      $mail->Body = '<h1 align=center>Name:'.$_POST['name'].'<br>Email:'.$_POST['email'].'<br>
      Message:'.$_POST['msg'].'</h1>';
       if(!$mail->send()){
           $result="Something went wrong . Please try again .";
       }
       else{
           $result="thanks ".$_POST['name']." for contacting us  . we'll get back to you soon ";
       }

      
    
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>contact us form</title>
<style>
body {
  background-image: url('Homepage_bg.png');
}
	.get_in_touch{
	max-width: 800px;
	margin:50px auto;
	position:relative;
	box-shadow: 0 10px 30px 0px rgba(0,0,0,0.1);
	padding:30px;
}
.get_in_touch .title{
	text-transform: uppercase;
	text-align: center;
	letter-spacing: 3px;
	font-size: 3em;
	line-height: 48px;
	padding-bottom: 20px;
	color:#5543ca;
	background:linear-gradient(to right,#f4524d 0%,#5543ca 100%);
	-webkit-background-clip:text;
	-webkit-text-fill-color:transparent; 

}
.contact-form .form-field{
	position:relative;
	margin:32px 0;

}
.contact-form  .input-text{
	display:block;
	width:100%;
	height:36px;
	border-width: 0 0 2px 0;
	border-color:#5543ca;
	font-size:18px;
	line-height:26px;
	font-weight: 400;
}
.contact-form  .input-text:focus + .label,
.contact-form  .input-text.not-empty +.label{
	transform:translateY(-24px);
}
.contact-form  .input-text:focus{
	outline:none;
}
.contact-form  .label{
	position:absolute;
	left:20px;
	bottom:11px;
	font-size:18px;
	line-height: 26px;
	font-weight: 400;
	color:#5543ca;
	cursor: text;
	text-transform: capitalize;
	transition:transform 0.2s ease-in-out;
}
.contact-form .send{
	display: inline-block;
	background-image: linear-gradient(125deg, #a72879, #064497);
	color:#fff;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-size: 16px;
	padding:8px 16px;
	border:none;
	width:200px;
	cursor: pointer; 
}
</style>
</head>
<body>
	<form id="myform">
	<section class="get_in_touch">
		<h1 class="title">Get In Touch</h1>
		
	</hr>
		<div class="container">
        <form action="#" method="POST">
              <div class="form-group">
                <?= $output; ?>

			<div class="contact-form row">
				<div class="form-field col-lg-6">
					<input id="name" class="input-text" type="text" name="" required> 
					<label for="name" class="label"> name</label>

				</div>
				<div class="form-field col-lg-6">
					<input id="email" class="input-text" type="email" name="" required>
					<label for="email" class="label"> email</label>

				</div>
				<div class="form-field col-lg-6">
					<input id="phone" class="input-text" type="phone" name="">
					<label for="phone" class="label">phone</label>

				</div>
				<div class="form-field col-lg-6">
					<input id="subject" class="input-text" type="text" name=""  required>
					<label for="subject" class="label">subject</label>
				</div>
				<div class="form-field col-lg-6">
					<input id="message" class="input-text" type="text" name=""  required>
					<label for="message" class="label">message</label>

				</div>
				<div class="form-field col-lg-12">
					<input class="send" type="submit" value="send" name="">

				</div>
			</div>
</div>
    </div>
    </section>
    </form>
	</div>
</body>
</html>
