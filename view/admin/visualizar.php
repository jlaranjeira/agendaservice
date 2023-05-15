<?php include("../../config/config.php"); ?>
<?php include(DIRREQ. "/lib/html/header.php"); ?>
<?php 
$objEvents=new \Classes\ClassEvents();
$events=$objEvents->getEventsById($_GET['id']);
$date=new \DateTime($events['start']);
?>
<link rel="stylesheet" href="<?php echo DIRPAGE.'/lib/css/form-view.css';?>">
<main>

    

    <div class="container-form">
            
            <form name="formEdit" class="formAdd" id="form-view" action="<?php echo DIRPAGE.'/controller/ControllerEdit.php';?>" method="post">
            <h2>DETALHES DO EVENTO</h2>
            <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'];?>">
            <label for="date">Data</label>
            <input type="date" name="date" id="date-view" value="<?php echo $date->format("Y-m-d");?>" readonly>
            <label for="time">Hora</label>
            <input type="time" name="time" id="time-view" value="<?php echo $date->format("H:i");?>" readonly>
            <label for="name">Nome</label>
            <input type="text" name="nome-view" id="nome-view" value="<?php echo $events['nome'];?>" readonly>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email-view" value="<?php echo $events['email'];?>" readonly>
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone-view" value="<?php echo $events['telefone'];?>" readonly>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco-view" value="<?php echo $events['endereco'];?>" readonly>
            <label for="msg">Informações importantes</label>
            <textarea name="msg" id="msg" cols="30" rows="3" readonly><?php echo $events['msg'];?></textarea>

            <div class="btn-edit">
                
                <a id="delete" class="delete" href="<?php echo DIRPAGE.'/controller/ControllerDelete.php?id='.$_GET['id']; ?>"><img src="<?php echo DIRPAGE.'/img/trash.png' ?>" alt="">Delete</a>
            
                
                
                <a id="edit-btn" class="edit" href="<?php echo DIRPAGE.'../view/admin/editar.php?id='.$_GET['id'];?>"><img src="<?php echo DIRPAGE.'/img/list_2.png' ?>" alt="">Editar</a>
                                
                <a id="cancelar" class="cancelar" href="<?php echo DIRPAGE.'../view/admin/index.php';?>"><i class="fa-regular fa-circle-xmark" style="color: #ffffff;"></i>Fechar</a>
                
            </div>
            
        </form>

    </div>

    
</main>




<?php include(DIRREQ. "/lib/html/footer.php"); ?>