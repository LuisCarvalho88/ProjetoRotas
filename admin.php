<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Área do administrador </title>
        <link rel="stylesheet" type="text/css" href="estilo.css"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">       
       
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">					Cadastre novas rotas aqui
                </a>
                <h6>Área excluvisa do administrador</h6>
			</div>
        </nav>  
        
        <div>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="admin.php">Admin</a>
            </li>
        </ul>

        <form method="post" action="controller.php">
            Cadastre a Partida:<br>
            <input type="text" placeholder="origem" name="origem"/>
            </br>
            Cadastre o Destino:<br>
            <input type="text" placeholder="destino" name="destino"/>
            </br>
            Cadastre o Valor:<br>
            <input type="text" placeholder="valor" name="valor"/>
            </br>
            <button type="submit">Criar</button>
        </form>
        </div>
                
    </body> 
</html>