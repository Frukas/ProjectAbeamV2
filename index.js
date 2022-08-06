$.when($.ready).then(() =>{    
  loadPage(`/projetoabeamv2/pages/register`)
})

function loadPage(page){
    $("#conteudo").empty()
    $("#conteudo").load(page)
}

function getTodaySaoPauloBrazilFormat(){
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

function getTodaySaoPauloDateFormat(){
  let day = new Date()    

  return  day.toLocaleString("sv-SE",{
      dateStyle: "short",
      timeStyle: "medium",
      timeZone: "America/Sao_Paulo"      
      }).substring(0, 10)
}