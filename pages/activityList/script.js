$.when($.ready).then(() =>{
    $("#dataRegistro").val(getTodaySaoPauloDateFormat())  
    loadTabela()
})

function loadTabela(){
    let data =  $("#dataRegistro").val() 
    let url = `http://localhost/ProjetoAbeamv2/App/services/atividadeService.php?data=${data}&type=detailList`
    let count = 1
    let totalHour = 0

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

            if(item.descricao != "Almoco")                            
                totalHour = totalHour + parseInt(item.minutos)             
            
            console.log(totalHour)                                   
            count++                                 
        })         
        $("#horasTotais").empty()
        $("#horasTotais").append(`${(totalHour/60).toFixed(2)}/hour`)       
    })
    loadTabelaMensal()
     
}

function loadTabelaMensal(){    
    let data =  $("#dataRegistro").val() 
    let url = `http://localhost/ProjetoAbeamv2/App/services/atividadeService.php?data=${data}&type=monthly`
    let count = 1

    $("#dadosTabelaMensal").empty()    
    
    $.getJSON(url, (result) =>{                      
        result.map( (item) => {                      
            $("#dadosTabelaMensal").append(`<tr>
                                            <th scope="row">${count} </th>
                                            <td>${item.Dias}</td>
                                            <td>${item.Tempo}</td>
                                        </tr>
                                        `) 
            count++                                                                       
        })       
    })    
}