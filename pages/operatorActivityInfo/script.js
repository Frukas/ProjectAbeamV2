$.when($.ready).then(() =>{    

    $("#dataRegistro").val(getTodaySaoPauloDateFormat())  
    loadTotalAtividadesOperador()
})

function loadTotalAtividadesOperador(){

    let data =  $("#dataRegistro").val() 
    let url = `http://localhost/ProjetoAbeamv2/App/services/atividadeService.php?data=${data}&id=${userId}&type=totalDay`
    let count = 1

    $("#totalAtividadesOperador").empty()    
        
    $.getJSON(url, (result) =>{                      
        result.map( (item) => {                     
            $("#totalAtividadesOperador").append(`<tr>
                                            <th scope="row">${count} </th>
                                            <td>${item.Operadores}</td>
                                            <td>${item.Tempo}</td>
                                        </tr>
                                        `) 
            count++                                                                       
        })       
    })    
}

