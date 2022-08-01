$.when($.ready).then(() =>{    
    $("#today").html(todaySaoPaulo())  
})

function loadPage(page){
    $("#conteudo").empty()
    $("#conteudo").load(page)
}

function todaySaoPaulo(){
    const tdy = new Date()
           
    const todaySaoPaulo = tdy.toLocaleString("pt-Br",{
    dateStyle: "short",
    timeStyle: "short",
    timeZone: "America/Sao_Paulo"      
  })    
    return todaySaoPaulo.substring(0, 10)
}

function hourSaoPaulo(){
    const tdy = new Date()
           
    const todaySaoPaulo = tdy.toLocaleString("pt-Br",{
    dateStyle: "short",
    timeStyle: "short",
    timeZone: "America/Sao_Paulo"      
  })    
    return todaySaoPaulo.substring(19, 11)
}