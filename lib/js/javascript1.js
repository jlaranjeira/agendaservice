
(function(win,doc){
    'use strict';
    //Exibir o Calendário
  


if (doc.querySelector('.calendarUser')){
    getCalendar('user', '.calendarUser');

    function getCalendar(perfil, div)
    {
        let calendarEl=doc.querySelector(div);
        let calendar = new FullCalendar.Calendar(calendarEl, {
            initialview: 'dayGridMonth',
            headerToolbar:{
                start: 'prev',
                center: 'title',
                end: 'today,next'
            },
            
            buttonText:{
                today:  'Hoje',
                month:  'Mês',
                week:   'Semana',
                day:    'Dia',
                list:   'Lista'
           },

            locale: 'pt-br',
            
            

            /*dateClick: function(info){
                if (perfil == 'admin'){
                    calendar.changeView('timeGrid', info.dateStr);
                    
                }else{
                    if(info.view.type == 'dayGridMonth'){
                        //calendar.changeView('timeGrid', info.dateStr);
                        let horario = document.querySelector(".horario");
                        horario.style.display = "block";

                        document.querySelectorAll('button').forEach(btn=>{
                            console.log(btn.dataset.time);
                            btn.addEventListener("click", function(){
                                
                                //win.location.href='../../view/user/add.php?date=' + info.dateStr;
                                win.location.href='../../view/user/add.php?date=' + info.dateStr;
                            })
                        });

                    }else{
                    win.location.href='../../view/user/add.php?date=' + info.dateStr;
                    
                    }
                }    
            },*/
            
            selectable: true,

            select: function (info){

                if (perfil == 'admin'){

                    alert("vai para a página do Admin")
                    
                }else{
                    if(info.view.type == 'dayGridMonth'){
                        //calendar.changeView('timeGrid', info.startStr);
                        
                        let horario = document.querySelector(".horario");
                        horario.style.display = "block";
                        win.location.href='../../view/user/add.php?date=' + info.dateStr;
                                
                            
                        

                        

                    }else{
                    
                    
                   }
                    
                    
                    
                }
                
            },

         
            //teste de perfil

            


        
        

    });
    
    calendar.render();
    
}
    
}else if (doc.querySelector('.calendarAdmin')){
    getCalendar('admin', '.calendarAdmin');
    function getCalendar(perfil, div)
    {
        let calendarEl=doc.querySelector(div);
        let calendar = new FullCalendar.Calendar(calendarEl, {
            initialview: 'listWeek',
            headerToolbar:{
                start: 'prev,today,listMonth',
                center: 'title',
                end: 'dayGridMonth,timeGridWeek,next'
            },

            
            buttonText:{
                today:  'Hoje',
                month:  'Mês',
                week:   'Semana',
                day:    'Dia',
                list:   'Lista Mês'
           },

            
            locale: 'pt-br',
            
            editable: true,
            dayMaxEvents: true,
            events: '../../controller/ControllerEvents.php',
           //Marcação

            
            
            
            //marcação
            dateClick: function(info){
                if (perfil == 'admin'){
                    calendar.changeView('listWeek', info.dateStr);
                    
                }else{
                    alert('vai para a página do User');
                }
            },
            
            eventClick: function(info){
                
                if (perfil == 'admin'){
                    
                    win.location.href='../../view/admin/editar.php?id='+info.event.id;
                }
                
            },

            selectable: true,

    });
    
    calendar.render();
  
}

}

if (doc.querySelector('#delete')){
    let btn=doc.querySelector('#delete');
    btn.addEventListener('click', (event)=>{
        event.preventDefault();
        if(confirm("Deseja mesmo apagar este agendamento?")){
            win.location.href=event.target.parentNode.href;
        }
    },false);
}

})(window, document);
