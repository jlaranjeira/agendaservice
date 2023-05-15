<?php include("../../config/config.php"); ?>
<?php include(DIRREQ. "/lib/html/header.php"); ?>
<?php 
$objEvents=new \Classes\ClassEvents();
$events=$objEvents->getEventsById($_GET['id']);
$date=new \DateTime($events['start']);
?>
<link rel="stylesheet" href="<?php echo DIRPAGE.'/lib/css/form.css';?>">
<main>

    

    <div class="container-form">
            <h2>Detalhes do evento</h2>
            <form name="formEdit" class="formAdd" id="formEdit" action="<?php echo DIRPAGE.'/controller/ControllerEdit.php';?>" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'];?>">
            <label for="date">Data</label>
            <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d");?>">
            <label for="time">Hora</label>
            <input type="time" name="time" id="time" value="<?php echo $date->format("H:i");?>">
            <label for="name">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $events['nome'];?>">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="<?php echo $events['email'];?>">
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone" value="<?php echo $events['telefone'];?>">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="<?php echo $events['endereco'];?>"><br>

            <div class="btn-edit">
                
                <a id="btn-salvar" class="btn-salvar" href="<?php echo DIRPAGE.'/controller/ControllerEdit.php'; ?>"><i class="fa-regular fa-circle-check"></i>Salvar</a>
            
                                            
                <a id="btn-cancelar" class="btn-cancelar" href="<?php echo DIRPAGE.'../view/admin/index.php';?>"><i class="fa-regular fa-circle-xmark" style="color: #ffffff;"></i>Cancelar</a>
                
            </div>
            
        </form>

    </div>

    
</main>




<?php include(DIRREQ. "/lib/html/footer.php"); ?>