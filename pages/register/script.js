//Roda quando a pagina esta pronta. Colocar as funçãoes que devem ser executdos quando a página está dando load.
$.when($.ready).then(() =>{    
    getUpdate()   
})

function getUpdate(){
    $.ajax({
    url: "http://localhost/ProjetoAbeamv2/App/services/clientService.php",        
    type : 'GET',
    success: function(result) {  
        let temp = JSON.parse(result)
        temp.map( tmp => $("#SelectTest").append(`<option>${tmp.nomeCliente}</option>`))    }
    })
    .fail(function(msg){
        alert(msg);
    });
}