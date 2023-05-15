<?php include("../../config/config.php");?>
<?php include(DIRREQ."/lib/html/header.php");?>
<?php 
$date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo'));

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../lib/css/form.css">
    <title>Formulário</title>
</head>
<body>
    <main>

    <form action="<?php echo DIRPAGE.'/controller/ControllerAdd.php'; ?>" method="post">
        <label for="date">Data</label>
        <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"
            );?>">

        <label for="time">Hora</label>
        <input type="time" name="time" id="time" value=" <?php echo $date->format("H:i");?>">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required placeholder="Digite seu nome completo">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" required placeholder="Digite seu e-mail">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" required placeholder="Digite seu número de telefone">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco" required placeholder="Digite seu endereço completo">
        
        <label for="servico">Selecione seu serviço</label>
        <select name="servico" id="servico">
            <option value="">Selecione um serviço</option>
            <option value="Higienização de sofá">Higienização de sofá</option>
            <option value="">Higienização de poltronas</option>
            <option value="">Higienização de colchão</option>
            <option value="">Higienização de interiores de veículo</option>
            <option value="">Impermibealização de estofados</option>
            <option value="">Lavagem de tapete</option>
            <option value="">Lavagem de carpete</option>
            <option value="">Hidratação de couro</option>
        </select>
        <label for="servico">Informações importantes</label>
        <textarea name="msg" id="" cols="30" rows="3" placeholder="Digite o serviço desejado"></textarea>
        <button type="submit">Agendar</button>

    </form>

    </main>
<?php include(DIRREQ."/lib/html/footer.php"); ?>    
    
</body>
</html>