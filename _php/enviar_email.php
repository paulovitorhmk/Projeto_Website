<?php
	include_once ('PHPMailer/PHPMailerAutoload.php');
	
	$Mailer = new PHPMailer();
	
	//Define que será usado SMTP
	$Mailer->IsSMTP();
	
	//Enviar e-mail em HTML
	$Mailer->isHTML(true);
	
	//Aceitar carasteres especiais
	$Mailer->Charset = 'UTF-8';
	
	//Configurações
	$Mailer->SMTPAuth = true;
	$Mailer->SMTPSecure = 'ssl';
	
	//Nome do servidor
	$Mailer->Host = '127.0.0.1';//colocar aqui o nome do servidor
	
	//Saida de e-mail 
	$Mailer->Port = 465;
	
	//Autenticação -> email de saida
	$Mailer->Username = 'usuario@dominio.com';//email do dominio
	$Mailer->Password = 'senha';
	
	//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	$Mailer->From = 'usuario@dominio.com';
	
	//Nome do Remetente
	$Mailer->FromName = 'Celke';
	
	//Assunto da mensagem
	$Mailer->Subject = 'Titulo';
	
	//Corpo da Mensagem
	$Mailer->Body = 'Conteudo do E-mail';
	
	//Corpo da mensagem em texto
	$Mailer->AltBody = 'conteudo do E-mail em texto';
	
	//Destinatario 
	$Mailer->AddAddress('cliente@dominio.com');
	
	if($Mailer->Send()){
		echo "E-mail enviado com sucesso";
	}else{
		echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
	}
	
?>



