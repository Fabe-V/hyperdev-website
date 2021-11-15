<!DOCTYPE HTML>
<html>
	<head>
		<title>HyperDev</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
			
		<!-- Header -->
			<section id="header">
				<div class="inner">
					<span class="icon solid major fa-cloud"></span>
					<h1>

    <?php

    if(isset($_POST["submit"]))
    {
        require 'class/class.phpmailer.php';
        $mail = new PHPMailer;
        $mail->IsSMTP();        //Sets Mailer to send message using SMTP
        $mail->Host = 'smtp.gmail.com';  //Sets the SMTP hosts
        $mail->Port = '465';        //Sets the default SMTP server port
        $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
        $mail->Username = '#';     //Sets SMTP username
        $mail->Password = '#';     //Sets SMTP password
        $mail->SMTPSecure = 'ssl';       //Sets connection prefix. Options are "", "ssl" or "tls"
        $mail->From = $_POST["email"];     //Sets the From email address for the message
        $mail->FromName = $_POST["name"];    //Sets the From name of the message
        $mail->AddAddress('info@zielAdresse.de', 'Name');//Adds a "To" address
        $mail->AddCC($_POST["email"], $_POST["name"]); //Adds a "Cc" address
        $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
        $mail->IsHTML(true);       //Sets message type to HTML
        $mail->Subject = $_POST["subject"];    //Sets the Subject of the message
        $mail->Body = $_POST["message"];    //An HTML or plain text message body
     if($mail->Send())        //Send an Email. Return true on success or false on error
  {
      echo "<span style='color: white'>Email send</span>";
  }
  else
  {
      echo "<span style='color: white'>Can't send Email!</span>";
  }

}

?>
</h1>
					<ul class="actions special">
						<li><a href="https://hyperdev.cf" class="button">Go back</a></li>
					</ul>
				</div>
			</section>


            <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>



</html>
