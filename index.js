let userId
let userName

//roda quando a página é carregada.
$.when($.ready).then(() =>{ 
  userId = $.cookie("id")
  userName = $.cookie("name")
  
  loadImgAndName()
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

function loadImgAndName(){
  let tag = `<img src="/projetoabeamv2/img/${userId}.png" width="30" height="30" class="d-inline-block align-top rounded-circle" alt=""><span class="mx-1">${userName}</span>`
  $("#userName").html(tag)
}

function logOut(){
  $.cookie('id', null, { path: '/ProjetoAbeamV2' }); 
  $.cookie('name', null, { path: '/ProjetoAbeamV2' });
  
  window.location.replace("/ProjetoAbeamV2/Pages/login")   
}