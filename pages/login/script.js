function autenticacao(){
    
    let data =  $("#user").val()
    let pass = $("#password").val()
    let expireDate = new Date();
    expireDate.setTime(expireDate.getTime() + 24 * 60 * 60 * 1000);

    let url = `http://localhost/ProjetoAbeamv2/App/services/loginService.php?user=${data}&password=${pass}`    

        $.getJSON(url, (result) =>{
            
            if(result.length < 1){
                console.log("Falha de Login")
                $("#alerta").show()
            }else{

                $.cookie('id', result[0].idOperador, { expires: expireDate, path: '/ProjetoAbeamV2' }); 
                $.cookie('name', result[0].nomeOp, { expires: expireDate, path: '/ProjetoAbeamV2' });                

                window.location.replace("/ProjetoAbeamV2/")
            }          
    })    
}