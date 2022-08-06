//Roda quando a pagina esta pronta. Colocar as funçãoes que devem ser executdos quando a página está dando load.


function getData(){
    let data =  "2022-07-01"
    let url = `http://localhost/ProjetoAbeamv2/App/services/atividadeService.php?data=${data}&type=totalDay`
    let count = 1

    $("#conteudo").empty()
    
    $.getJSON(url, (result) =>{   
        console.log(result)            
        // result.map( (item) => {            
        //     $("#conteudo").append(`<p>
        //                                     <h5> ${count} </h5>
        //                                     <h5>${item.Dias}</h5>
        //                                     <h5>${item.Tempo}</h5>
        //                                 </p>
        //                                 `) 
        //     count++                                                                       
        // })       
    })    
}


// function getData(){
//     let data =  "2022-07-01"
//     let url = `http://localhost/ProjetoAbeamv2/App/services/atividadeService.php?data=${data}&type=monthly`
//     let count = 1

//     $("#conteudo").empty()
    
//     $.getJSON(url, (result) =>{               
//         result.map( (item) => {            
//             $("#conteudo").append(`<p>
//                                             <h5> ${count} </h5>
//                                             <h5>${item.Dias}</h5>
//                                             <h5>${item.Tempo}</h5>
//                                         </p>
//                                         `) 
//             count++                                                                       
//         })       
//     })    
// }

// function getData(){
//     let data =  "2022-07-01"
//     let url = `http://localhost/ProjetoAbeamv2/App/services/atividadeService.php?data=${data}&type=monthly`
//     let count = 1

//     $("#conteudo").empty()
    
//     $.getJSON(url, (result) =>{               
//         result.map( (item) => {            
//             $("#conteudo").append(`<p>
//                                             <h5> ${count} </h5>
//                                             <h5>${item.Dias}</h5>
//                                             <h5>${item.Tempo}</h5>
//                                         </p>
//                                         `) 
//             count++                                                                       
//         })       
//     })    
// }

// function getData(){

//     let data = "2022-08-02"; 
//     let url = `http://localhost/ProjetoAbeamv2/App/services/atividadeService.php?data=${data}&type=monthly`

//     $.get(url, msg => console.log(msg))
// }

// function getData(){
    
//     let data = "2022-08-02"; 
//     let url = `http://localhost/ProjetoAbeamv2/App/services/atividadeService.php?data=${data}`

//    // $.get(url, msg => console.log(msg))
    
//     $.getJSON(url, (result) =>{
        
//         result.map( (item) => {
//             console.log(item)
//             //$("#conteudo").append(`<p class="text-center">${item.idAtividade} => ${item.dataInicio}</p>`)                                  
//         })
//     })
    
// }

// function getData($idClient){
//     $.ajax({
//     //url: "http://localhost/ProjetoAbeamv2/App/services/clientService.php", 
//     //url: "http://localhost/ProjetoAbeamv2/App/services/ServicoService.php",
//     url: "http://localhost/ProjetoAbeamv2/App/services/ServicoService.php",        
//     type : 'GET',
//     data : {data :"2022-02-01"},
//     success: function(result) {  
//         let temp = JSON.parse(result)
//         temp.map( tmp => $("#conteudo").append(`<h4 class="text-center">${tmp.descricao}</h4>`))}
//     })
//     .fail(function(msg){
//         alert(msg);
//     });
// }


// function getData($idClient){
//     $.ajax({
//     //url: "http://localhost/ProjetoAbeamv2/App/services/clientService.php", 
//     url: "http://localhost/ProjetoAbeamv2/App/services/ServicoService.php",        
//     type : 'GET',
//     data : {idClient :$idClient},
//     success: function(result) {  
//         let temp = JSON.parse(result)
//         temp.map( tmp => $("#conteudo").append(`<h4 class="text-center">${tmp.descricao}</h4>`))}
//     })
//     .fail(function(msg){
//         alert(msg);
//     });
// }

// function postData(){
//     url = "http://localhost/ProjetoAbeamv2/App/services/AtividadeService.php"

//     data = {
//         idAtividade :"Teste",
//         idServico :"Teste",
//         idOperador :"Teste",
//         dataInicio :"Teste",
//         dataFim :"Teste",
//         descricao :"Teste",
//         tempo :"Teste",
//         solicitacao :"Teste",
//         atividade :"Teste",
//         shadowing :"Teste"
//     }
            
//     $.post(url, JSON.stringify(data), res => console.log(res))
// }