<?php
#Pegar os dados
$nome    = $_POST['nome'];
$email	 = $_POST['email'];
$qtd	 = $_POST['qtd'];
$servico = $_POST['servico'];
$message = $_POST['message'];

$email_remetente = "contato@degustecrepes.com"; 
$email_destinatario = "charleycesar@gmail.com"; 
$email_reply = "charleycesar@gmail.com";
$email_assunto = "Contato via site";


$email_conteudo = "Nome = $nome \n"; 
$email_conteudo .= "Email = $email \n"; 
$email_conteudo .= "Quantidade de pessoas = $qtd \n"; 
$email_conteudo .= "Serviço = $servico \n"; 
$email_conteudo .=  "Mensagem = $message \n";
	
$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );

$url = 'www.degustecrepes.com/contact.php';
if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
	header($url.'?retorno=enviado');
}else{
	header($url.'?retorno=falha');
}

?>