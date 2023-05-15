<?php include("../../config/config.php"); ?>
<?php include(DIRREQ. "/lib/html/header.php"); ?>
<?php 
$date=new \DateTime($_GET['date'], new DateTimeZone('America/Sao_Paulo'));
//$time1=($_GET['time']);
?>
<link rel="stylesheet" href="<?php echo DIRPAGE.'/lib/css/form.css';?>">
<main>
    
    <div class="container-form">

        
        
        <form name="formAdd" class="formAdd" id="formAdd" action="<?php echo DIRPAGE.'/controller/ControllerAdd.php';?>" method="post">
            <h2>AGENDAMENTO</h2>
            <input type="" name="date" class="date" id="date" value="<?php echo $date->format("Y-m-d");?>">
            
            <input type="" name="time" class="time" id="time" value="<?php echo $date->format("H:i");?>">
            
                        
            <label for="name">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" required>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone" placeholder="Digite seu telefone" required>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereço" required>
            <label for="title">Selecione um serviço</label>
            <select name="title" id="title" required>
                <option value="">Selecione um serviço</option>
                <option >Higienização de sofá</option>
                <option >Higienização de colchão</option>
                <option >Lavagem de Tapete</option>
                <option >Impermibialização de estofados</option>
                <option >Higienização de interior de carros</option>
            </select><br>
            <label for="msg">Informações importantes</label>
            <textarea name="msg" id="" cols="30" rows="3"></textarea>
            <div class="btn-formAdd">
                
                <button type="submit" id="btn-agendar" class="btn-agendar" ><i class="fa-sharp fa-regular fa-clock"></i>Agendar</button>

                <a id="" class="cancelar" href="<?php echo DIRPAGE.'../view/user/index.php';?>"><i class="fa-regular fa-circle-xmark" style="color: #ffffff;"></i>Cancelar</a>
            </div>
            
            
        </form>
        
    </div>
    

    
</main>





<?php include(DIRREQ. "/lib/html/footer.php"); ?>