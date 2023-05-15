<?php include ("../../config/config.php");?>
<?php include(DIRREQ. "/lib/html/header.php"); ?>

    <main class="email">

    <section class="conf-email">
        <div class="conf-header">
            <h2>Agendamento realizado com sucesso!</h2>
        </div>
        <div class="cont-email">
            <h2>Agendamento</h2>
            <p class="cont-email-p" ><img src="<?php echo DIRPAGE.'/img/agenda.png' ?>" alt="">Horário - Dia da semana e dia do agendamento</p>
            <p class="cont-email-end"><img src="<?php echo DIRPAGE.'/img/mapa.png' ?>" alt="">Endereço do solicitante</p>
        </div>   
        <a class="btn-email" href="<?php echo DIRPAGE.'../view/user/index.php';?>">Ok</a>
    </section>

    </main>
    


    
    

<?php include(DIRREQ. "/lib/html/footer.php"); ?>