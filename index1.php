<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';

  
  require 'PHPMailer/PHPMailerAutoload.php';
  $mail = new PHPMailer(true);


  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'mansitardeja1999@gmail.com';
      $mail->Password = 'Mann@06100';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;
      $mail->setFrom($_POST['email'],$_POST['name']);
      $mail->addAddress('mansitardeja1999@gmail.com');
      $mail->addReplyTo($_POST['email'],$_POST['name']);
      $mail->isHTML(true);
      $mail->Subject = 'Form Submission  :' .$_POST['subject'];
      $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";
       if(!$mail->send()){
           $output="Something went wrong . Please try again .";
       }
       else{
           $output="thanks ".$_POST['name']." for contacting us  . we'll get back to you soon";
       }

      
    
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us Using PHPMailer & Gmail SMTP</title>
</head>
<style>
form {
  background-image: url('Homepage_bg.png');
  text-align:right;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: bottom right;
}
.form-group {
	max-width: 800px;
	margin:20x auto;
	position:static;
	box-shadow: 0 10px 30px 0px rgba(0,0,0,0.1);
	padding:30px;
  color:white;
  font-family: Arial, Helvetica, sans-serif;
  font-size: large;
}
h3{
  display: inline-block;
	background-image: linear-gradient(125deg, black, green);
	color:#fff;
	text-transform: uppercase;
  text-align:center;
	letter-spacing: 2px;
	font-size: 16px;
	padding:8px 16px;
	border:white;
	width:200px;
  float:center;
}
.btn {
	display: inline-block;
	background-image: linear-gradient(125deg, black, green);
	color:#fff;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-size: 16px;
	padding:8px 16px;
	border:white;
	width:200px;
	cursor: pointer; 
  position:center;
  float :center;

}
input[type=text] {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;

}
</style>
<body class="bg-info">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 mt-3">
        <div class="card border-danger shadow">
          <div class="card-header bg-danger text-light">
            <h3 class="card-title">Contact Us</h3>
          </div>
          <div class="card-body px-4">
            <form action="#" method="POST">
              <div class="form-group">
                <?= $output; ?>
              </div>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
              </div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter E-Mail" required>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject"
                  required>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write Your Message"
                  required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send" class="btn btn-danger btn-block" id="sendBtn">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>