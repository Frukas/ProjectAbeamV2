
<!DOCTYPE html>
	<html>
	<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="index.js" defer></script>
        
        <title>Page Title</title>

        <nav class="navbar navbar-expand-lg bg-light list-unstyled p-2 ">
            <li class="nav-item dropdown ms-3">
                <div class="nav-link dropdown-toggle navbar-brand " role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" onclick="loadPage(`/projetoabeamv2/pages/register/register.php`)" href="#">Apontar</a></li>
                    <li><a class="dropdown-item" onclick="loadPage(`/projetoabeamv2/pages/teste/test.php`)" href="#">Teste de Load</a></li>
                    <!-- <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                </ul>
            </li>
            <div class="me-2 float-left">
                    <div id="today"></div> 
            </div>
        </nav>
	</head>

	<body>

    <div id="conteudo"></div>

	</body>
</html>

