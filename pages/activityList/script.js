$.when($.ready).then(() =>{
    $("#dataRegistro").val(getTodaySaoPauloDateFormat())  
    loadTabela()
})

function loadTabela(){
    let data =  $("#dataRegistro").val() 
    let url = `http://localhost/ProjetoAbeamv2/App/services/atividadeService.php?data=${data}`
    let count = 1

    $("#dadosDaTabela").empty()
    
    $.getJSON(url, (result) =>{               
        result.map( (item) => {            
            $("#dadosDaTabela").append(`<tr>
                                            <th scope="row">${count} </th>
                                            <td>${item.nomeCliente}</td>
                                            <td>${item.descricao}</td>
                                            <td>${item.dataInicio}</td>
                                            <td>${item.dataFim}</td>
                                            <td>${item.minutos}</td>
                                            <td>${item.atividade}</td>
                                            <td>${item.solicitacao}</td>
                                        </tr>
                                        `) 
            count++                                 
        })       
    })    
}