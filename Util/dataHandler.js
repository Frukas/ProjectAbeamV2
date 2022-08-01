function todaySaoPaulo(){
    const today = new Date()
           
    const todayBrazil = today.toLocaleString("pt-Br",{
    dateStyle: "short",
    timeStyle: "short",
    timeZone: "America/Sao_Paulo"      
  })    
    return todayBrazil.substring(0, 10)
}