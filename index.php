<!DOCTYPE html>

<html>
    <head>
          
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Viagem sem preocupação </title>
        <link rel="stylesheet" type="text/css" href="estilo.css"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">    
       
    </head>

    <body> 
        <!-- <input id="inputImage" type="file" onchange="pegaArquivo(this.files)">
        <div id="imgLocal"></div><br> -->

        <!-- input para selecionar o arquivo csv manualmente -->
        <!-- <input type="file" id="inputCSV" onchange="pegaCSV(this)"></br>
        <div id="CSVsaida"></div> -->

        <nav class="navbar navbar-light bg-light">
			<div class="container">
                <h4 class="titulo-home">Viagem fácil</h4>       
        
                <h7>Encontre o sua rota ideal e compare os melhores preços</h7>
			</div>
        </nav>

        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="admin.php">Admin</a>
            </li>
        </ul>

        <form method="post" action="controller.php?acao=iserir">
            Origem:<br>
            <input type="text" placeholder="origem" name="origem">
            </br>
            Destino:<br>
            <input type="text" placeholder="destino" name="destino">
            </br>
            Valor:<br>
            <input type="text" placeholder="valor" name="valor">        
            </br>
            <button type="submit">Buscar</button>
        </form>

    </body>
    <!-- <script src="script.js"></script> -->
</html>


