//Roda quando a pagina esta pronta. Colocar as funçãoes que devem ser executdos quando a página está dando load.

function getData($idClient){
    $.ajax({
    //url: "http://localhost/ProjetoAbeamv2/App/services/clientService.php", 
    url: "http://localhost/ProjetoAbeamv2/App/services/ServicoService.php",        
    type : 'GET',
    data : {idClient :$idClient},
    success: function(result) {  
        let temp = JSON.parse(result)
        temp.map( tmp => $("#conteudo").append(`<h4 class="text-center">${tmp.descricao}</h4>`))}
    })
    .fail(function(msg){
        alert(msg);
    });
}

function postData(){
    url = "http://localhost/ProjetoAbeamv2/App/services/AtividadeService.php"

    data = {
        idAtividade :"Teste",
        idServico :"Teste",
        idOperador :"Teste",
        dataInicio :"Teste",
        dataFim :"Teste",
        descricao :"Teste",
        tempo :"Teste",
        solicitacao :"Teste",
        atividade :"Teste",
        shadowing :"Teste"
    }
            
    $.post(url, JSON.stringify(data), res => console.log(res))
}