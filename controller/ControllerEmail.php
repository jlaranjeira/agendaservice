<?php
include ("../../ControllerAdd.php");

$Nome 		= $_POST['Nome'];
$Email 		= $_POST['Email'];
$Assunto 	= $_POST['title'];
$Mensagem 	= $_POST['msg'];
$From		= 'teste@smclean.com.br';

$Headers      = "MIME-Version: 1.1\n";
$Headers     .= "Content-type: text/html; charset=utf-8\n";
$Headers     .= "From: Meu Site <$From>\n";
$Headers     .= "Return-Path: $From\n";
$Headers     .= "Reply-to: $Email\n";

mail($Email, $Assunto, $Mensagem, $Headers, $From);
//header('Location:obrigado.php');	

?>

<meta http-equiv="refresh" content="0; url=/view/user/confAgenda.php">