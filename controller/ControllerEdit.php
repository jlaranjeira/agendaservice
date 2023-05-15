<?php 
include ("../config/config.php");
$objEvents=new Classes\ClassEvents();

$date=filter_input(INPUT_POST,'date',FILTER_DEFAULT);
$time=filter_input(INPUT_POST,'time',FILTER_DEFAULT);
$id=filter_input(INPUT_POST,'id',FILTER_DEFAULT);
$nome=filter_input(INPUT_POST,'nome',FILTER_DEFAULT);
$email=filter_input(INPUT_POST,'email',FILTER_DEFAULT);
$telefone=filter_input(INPUT_POST,'telefone',FILTER_DEFAULT);
$endereco=filter_input(INPUT_POST,'endereco',FILTER_DEFAULT);
#$servico=filter_input(INPUT_POST,'servico',FILTER_DEFAULT);

$start=new \DateTime($date.''.$time, new DateTimeZone('America/Sao_Paulo'));

$objEvents->updateEvents(
    $id,
    $nome,
    $email,
    $telefone,
    $endereco,
    #$servico,
    #$msg,
    $start->format("Y-m-d H:i:s"),
    #$start->format("Y-m-d H:i:s")
);

?>

<script>alert('Alteração realizada com sucesso!!');</script>
<meta http-equiv="refresh" content="0; url=../view/admin/index.php">