<?php 
include ("../config/config.php");
$objEvents=new Classes\ClassEvents();

$date=filter_input(INPUT_POST,'date',FILTER_DEFAULT);
$time=filter_input(INPUT_POST,'time',FILTER_DEFAULT);
$nome=filter_input(INPUT_POST,'nome',FILTER_DEFAULT);
$email=filter_input(INPUT_POST,'email',FILTER_DEFAULT);
$telefone=filter_input(INPUT_POST,'telefone',FILTER_DEFAULT);
$endereco=filter_input(INPUT_POST,'endereco',FILTER_DEFAULT);
$title=filter_input(INPUT_POST,'title',FILTER_DEFAULT);
$msg=filter_input(INPUT_POST,'msg',FILTER_DEFAULT);
$start=new \DateTime($date.''.$time, new DateTimeZone('America/Sao_Paulo'));

$objEvents->createEvents(
    0,
    $nome,
    $email,
    $telefone,
    $endereco,
    $title,
    $msg,
    $start->format("Y-m-d H:i:s"),
    $start->format("Y-m-d H:i:s")
);

$Nome 		= $_POST['nome'];
$Email 		= $_POST['email'];
$Assunto 	= $_POST['title'];
$Mensagem 	= $_POST['msg'];
$From		= 'teste@smclean.com.br';

$Headers      = "MIME-Version: 1.1\n";
$Headers     .= "Content-type: text/html; charset=utf-8\n";
$Headers     .= "From: Meu Site <$From>\n";
$Headers     .= "Return-Path: $From\n";
$Headers     .= "Reply-to: $Email\n";

mail($Email, $Assunto, $Mensagem, $Headers, $From);


?>

<meta http-equiv="refresh" content="0; url=../view/user/confAgenda.php">
