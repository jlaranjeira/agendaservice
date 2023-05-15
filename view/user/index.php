<?php include ("../../config/config.php");?>
<?php include (DIRREQ."/lib/html/header.php");?>

<main classe="m-user">
   <div class="container-p">
    
        <div class="btn container-voltar">
            <a class="btn-voltar" href="<?php echo DIRPAGE.'/index.php'; ?>"><i class="fa-regular fa-circle-left"></i></a>
        </div>

      <div class="col-1">
        
        
                <div class="logo">
                    <img src="<?php echo DIRPAGE.'/img/logo-cleaning.png' ?>" alt="">
                    <h1>full clean</h1>
                </div>

                <div class="content-1">
                    <h2>Agendamento</h2>
                    <p>Agende agora seu serviço de Higienização</p>
                </div>

                <div class="content-2">
                    <p>Clique no calendario para escolher<br> a data do seu agendamento</p>
                </div>
      </div>

      <div class="col-2">
         
            <div class="calendarUser"></div>
           
      </div>

      

   </div>
   

</main>

<?php include (DIRREQ."/lib/html/footer.php");?>
