<!DOCTYPE html>
	<html>
	<head>
    <script src="pages/operatorActivityInfo/script.js" defer></script>

		<title>Page Title</title>

	</head>
	<body>
    <h1 class="text-center m-4">Apontamento total Operadores</h1>    

    <div class="d-inline-flex mx-5">
      <input id="dataRegistro" class="form-control mx-1" type="date" id="dataTabela"/>
      <button onclick="loadTotalAtividadesOperador()" class="btn btn-primary mx-1">Refresh</button>         
    </div>


    <div id="tabela" class="mx-5 mt-3">
      <table class="table table-striped " >
        <thead>
          <tr>
          <th scope="col">No.</th>  
          <th scope="col">Operadores</th>
          <th scope="col">Tempo</th>      
          </tr>
        </thead>
        <tbody id="totalAtividadesOperador">               
        </tbody>
      </table> 
    </div>
          



    
</html>