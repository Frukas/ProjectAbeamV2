<!DOCTYPE html>
	<html>
	
	<head>
        <!-- <script src="pages/register/script.js?q=1" defer></script> -->
		<script src="pages/register/script.js?n=1?" defer></script>
		<script src="pages/register/cronometro.js?n=1" defer></script>
		<title>Page Title</title>
	</head>
	
	<body>
		<h2 class="m-4 fw-semibold text-center">Apontamento de Atividade</h2>


		<div class="border-bottom border-opacity-25 p-2 mx-5">
			<select class="form-select  mb-2" id="clienteSelect" onChange="getServicos()" ></select>
			<select class="form-select  mb-2" id="servicosSelect" style="display:none;"></select>
		</div>
		
		<div class="text-center">			
			<p id="tempo" name="tempo" class="fs-1 m-2">00:00:00</p>
			<button id="btnStart" onclick="iniciar()" class="btn btn-success  fs-5 px-3" name="tempo">Start</button>
			<button id="btnPause" onclick="parar()" class="btn btn-danger fs-5  px-3">Stop</button>
		</div>

		<div class="mt-2 mx-5 row">
			<div class="col">
				<label class="fs-6 form-label">Comentários</label>
				<input class="form-control" type="text" id="comentarios"></input>
			</div>

			<div class="col-md-2">
				<label class="fs-6 form-label">Solicitações</label>
				<input class="form-control" type="number"  id="solicitacoes"></input>
			</div>

			<div class="col-md-2">
				<label class="fs-6 form-label">Atividades</label>
				<input class="form-control" type="number"  id="atividades"></input>
			</div>
		</div>	
		
		<div class="text-center m-2">			
			<input class="form-check-input  fs-6 " id="kengaku" type="checkbox" value="Shadowning">Kengaku</input>			
		</div>

		<div class="text-center mx-5 ">
			<button class="btn btn-primary w-100 " onClick="finalizarAtividade()">Finalizar Atividade</button>
		</div>
		
		
	</body>

	<footer>
		<div class="border-top border-opacity-25 m-5 text-center ">
			<div class="m-2 fs-5">Proximo alerta em 
				<select id="cbmin">						  
					<option value='300'>5</option>
					<option  value='900'>15</option>
					<option value='1800'>30</option>
					<option value='3600'>60</option>
				</select> 
			minutos</div> 
		</div>

		<audio id="myAudio">
			<source src="https://s3.amazonaws.com/gaitotool/alert.wav" type="audio/wav">
			Your browser does not support the audio element.
		</audio>		
	</footer>

</html>

