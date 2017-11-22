<?php
if(isset($_POST['envia'])) {
// CONFIGURE ABAIXO

if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['mensagem'])) {
echo "Todos os campos são obrigatórios<br /><div onclick=\"$('.div').hide()\">Fechar</div>";
} else {

$emailpara = "offcarolina@hotmail.com"; // VOCÊ / QUEM RECEBE O EMAIL
$nome_postador = $_POST['nome']; // NOME DO POSTADOR
$email_postador = $_POST['email']; // E-MAIL DO POSTADOR
$assunto = "teste"; // ASSUNTO DO EMAIL
$mensagem = $_POST['mensagem']; // MENSAGEM DO EMAIL
// CONFIGURE ACIMA

$headers = "MIME-Version: 1.0\n";
$headers.= "Content-type: text/html; charset=iso-8859-1\n";
$headers.= "From: ".$nome_postador." <".$email_postador.">";

if(mail($emailpara, $assunto, $mensagem, $headers)) {
echo "Sua mensagem foi enviada com sucesso!<br /><div onclick=\"$(this).hide()\">Fechar</div>";
} else {
echo "erro ao enviar e-mail<br /><div onclick=\"$(this).hide()\">Fechar</div>";
}
}
}
?>