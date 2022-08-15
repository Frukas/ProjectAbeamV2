//Página Apontamento Manual
$.when($.ready).then(() =>{
    $("#data").val(getTodaySaoPauloDateFormat())
    getClientes()
})

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
    let tempo = $("#tempo").val()
    let dia = $("#data").val()

    if(   tempo == null || idServico == null || solicitacao == "" || atividade == ""){
        alert(`Atividade incompleta cuidado dia: ${dia} tempo: ${tempo} idServico: ${idServico} solicitacao: ${solicitacao} atividade: ${atividade}` )
        return
    }

    if(kengaku.checked){
        kengakuResult = "Shadowing";				 
    }
    
    url = "http://localhost/ProjetoAbeamv2/App/services/AtividadeService.php"

    data = {        
        idServico : idServico,
        idOperador :userId,
        dataInicio :dia ,
        dataFim :dia,
        descricao :comentario,
        tempo :tempo,
        solicitacao : solicitacao,
        atividade :atividade,
        shadowing :kengakuResult 
    }
            
    $.post(url, JSON.stringify(data), resp => console.log(resp)).fail(function(msg){
        alert(msg);       
   }) 	
   alert("Apontamento Salvo")
   window.location.replace("http://localhost/ProjetoAbeamv2")
}

