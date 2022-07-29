<!-- Arquivo só para fazer teste! Apagar ao ir a produção! -->
<!DOCTYPE html>
	<html>
	<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="index.js" defer></script>
        
        <title>Teste Get</title>
      
	</head>

	<body>

        <button ></button>

    

	</body>
</html>

<script>

    function testeGet(){
        $.ajax({
            url: "http://localhost/ProjetoAbeamv2/App/services/clientService.php",        
            type : 'GET',
            success: function(result) {  
                let temp = JSON.parse(result)
                alert()
        }
        }) 
        .fail(function(jqXHR, textStatus, msg){
            alert(msg);
        }); 
    }

</script>
