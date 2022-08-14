//Roda quando a pagina esta pronta. Colocar as funçãoes que devem ser executdos quando a página está dando load.
//Esse script precisa executar em conjunto com o script cronometro.js

$.when($.ready).then(() =>{  
    getClientes()
})

let EndTime

function getClientes(){
    let url = "http://localhost/ProjetoAbeamv2/App/services/clientService.php";
    $("#clienteSelect").append(`<option value="">Selecione um Cliente</option>`)

    $.getJSON(url, (result) => {
        result.map( (item) => {
            $("#clienteSelect").append(`<option value="${item.idCliente}">${item.nomeCliente}</option>`)})})
}   

function getServicos(){
    
    let idClient = $("#clienteSelect option:selected").val()  
    let url = `http://localhost/ProjetoAbeamv2/App/services/ServicoService.php?idClient=${idClient}`
    
    $("#servicosSelect").append(`<option value="">Selecione uma Atividade</option>`)

    $.getJSON(url, (result) =>{
        result.map( (item) => {
            $("#servicosSelect").append(`<option value=${item.idServico} >${item.descricao}</option>`)
        })
    })

    $("#servicosSelect").show()
}

function finalizarAtividade(){
    let kengakuResult = ""
    let idServico = $("#servicosSelect option:selected").val()
    let comentario = $("#comentarios").val()
    let solicitacao = $("#solicitacoes").val()
    let atividade = $("#atividades").val()

    if(startTimeFinal == "" ||  idServico == null || solicitacao == "" || atividade == ""){
        alert("Atividade incompleta ")
        return
    }

    if(kengaku.checked){
        kengakuResult = "Shadowing";				 
    }
    
    url = "http://localhost/ProjetoAbeamv2/App/services/AtividadeService.php"

    data = {        
        idServico : idServico,
        idOperador :userId,
        dataInicio :startTimeFinal ,
        dataFim :endTimeFinal || getTimeSaoPaulo(),
        descricao :comentario,
        tempo :getCurrentTime(),
        solicitacao : solicitacao,
        atividade :atividade,
        shadowing :kengakuResult 
    }
            
    $.post(url, JSON.stringify(data), resp => console.log(resp)).fail(function(msg){
        alert(msg);       
   }) 	
   alert("Apontamento Salvo")

   window.location.replace("/ProjetoAbeamV2")
}

