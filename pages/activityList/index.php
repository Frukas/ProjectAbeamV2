<!DOCTYPE html>
	<html>
	<head>
    <script src="pages/activityList/script.js" defer></script>

		<title>Page Title</title>

	</head>
	<body>
    <h1 class="text-center m-4">Apontamentos</h1>    

    <div class="d-inline-flex mx-5">
      <input id="dataRegistro" class="form-control mx-1" type="date" id="dataTabela"/>
      <button onclick="loadTabela()" class="btn btn-primary mx-1">OK</button>         
    </div>    

    <div id="tabela" class="mx-5 mt-3">
      <table  class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Início</th>
                    <th scope="col">Fim</th>
                    <th scope="col">Tempo</th>
                    <th scope="col">Atividades</th>
                    <th scope="col">Solicitações</th>      
                </tr>
            </thead>
            <tbody id="dadosDaTabela">
            <tbody/>
        </table>
    </div>
	</body>
</html>