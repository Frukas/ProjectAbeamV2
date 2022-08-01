
let vm = 0
let currentVm = 0
let startTime = 0
let startTimeFinal = 0
let endTimeFinal = 0
let currentTime = 0

function checkAlarm(temp)  {
    
    if(vm <= 0){
        vm = parseInt(document.getElementById("cbmin").value) ;
        currentVm = parseInt(document.getElementById("cbmin").value)        
    } 

    if (currentVm != parseInt(document.getElementById("cbmin").value)){

        vm +=  parseInt(document.getElementById("cbmin").value - currentVm)
        currentVm = parseInt(document.getElementById("cbmin").value)       
    }
    
    let tempVm = vm * 1000

    if (temp > tempVm ){
        AlertDIV()
        playAudio()  
        vm += parseInt(document.getElementById("cbmin").value);       
    }   
    
    currentVm = parseInt(document.getElementById("cbmin").value)
}

function iniciar(){ 

    let timeHourMinSec = new Date() 
    startTimeFinal =  getTimeSaoPaulo()
    
    
    if(startTime <= 0){
        startTime = Date.now() 
    } else{
        startTime = Date.now() - currentTime
    }  

    let posAlarmTime = 0

    document.getElementById("btnStart").disabled = true    
    
	interval = setInterval(() => {
        currentTime = Date.now() - startTime
        timeHourMinSec.setTime(currentTime) 
              
        document.getElementById("tempo").innerHTML = timeHourMinSec.toISOString().substring(19, 11)

        checkAlarm(currentTime)

    },1000);
}

function zerar(){
    startTime = 0
    currentTime = 0
}

function parar(){  
    endTimeFinal = getTimeSaoPaulo()
	clearInterval(interval);
	document.getElementById("btnStart").disabled = false;   
}


function playAudio() { 
    var x = document.getElementById("myAudio"); 
    x.play(); 
}

function pauseAudio() { 
    var x = document.getElementById("myAudio"); 
    x.pause(); 
}

function AlertDIV() {
  var x = document.getElementById("alerta");
    x.style.display = "block";
} 
function fecharDIV() {
  var x = document.getElementById("alerta");
    x.style.display = "none";
} 

function getCurrentTime(){
    return (currentTime /1000) | 0
}

function getTimeSaoPaulo(){
    let day = new Date()    

    return  day.toLocaleString("sv-SE",{
        dateStyle: "short",
        timeStyle: "medium",
        timeZone: "America/Sao_Paulo"      
        })
}

