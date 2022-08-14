<!DOCTYPE html>
	<html>
	
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
    	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    	<script src="../../loginCheck.js" > </script>
		<script src="pages/manualRegister/script.js" defer></script>

		<title>Page Title</title>
	</head>
	
	<body>
		<h2 class="m-4 fw-semibold text-center">Apontamento Manual de Atividade</h2>

		<div class="border-bottom border-opacity-25 p-2 mx-5">
			<select class="form-select  mb-2" id="clienteSelect" onChange="getServicos()" ></select>
			<select class="form-select  mb-2" id="servicosSelect" style="display:none;"></select>
		</div>

		<div class="mt-2 mx-5 row">

			<div class="col-2">
				<label class="fs-6 form-label">Data</label>
				<input class="form-control" type="date" id="data"></input>
			</div>

			<div class="col-2">
				<label class="fs-6 form-label">Tempo</label>
				<input class="form-control" type="number" id="tempo" min="0"></input>
			</div>
			<div class="col-6">
				<label class="fs-6 form-label">Comentários</label>
				<input class="form-control" type="text" id="comentarios"></input>
			</div>

			<div class="col-1">
				<label class="fs-6 form-label">Solicitações</label>
				<input class="form-control" type="number"  id="solicitacoes" min="0"></input>
			</div>

			<div class="col-1">
				<label class="fs-6 form-label">Atividades</label>
				<input class="form-control" type="number"  id="atividades" min="0"></input>
			</div>
		</div>	
		
		<div class="text-center m-2">			
			<input class="form-check-input  fs-6 " id="kengaku" type="checkbox" value="Shadowning">Kengaku</input>			
		</div>

		<div class="text-center mx-5 ">
			<button class="btn btn-primary w-100 " onClick="finalizarAtividade()">Finalizar Atividade</button>
		</div>

	</body>		
</html>

