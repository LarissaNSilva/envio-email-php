<?php
    require_once (__DIR__."/class.phpmailer.php");
    require_once (__DIR__."/class.smtp.php");
    
   
    $conteudo = "Digite aqui o conteúdo que deseja enviar";
   
	$mail = new PHPMailer();
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl';
	$mail->Host = "mail.navigate.net.br";
	$mail->Port = 465; // SMTP = 465
	$mail->IsHTML(true);
	$mail->Username = ""; // seu e-mail
    $mail->Password = ""; // sua senha
	$mail->SetFrom("laarin_silva@outlook.com","Larissa Silva");
	$mail->Subject = "Chegou uma novidade!";
	$mail->CharSet = 'UTF-8'; 
	$mail->Body = "Texto do email aqui! :-)";
	$mail->msgHTML('<html>'.$conteudo.'</html}>');

    if(!$mail->Send()) {
       echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
       echo "Mensagem enviada com sucesso";
    }
    
   

?>