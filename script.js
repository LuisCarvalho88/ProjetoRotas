/* alert('Seja bem vindo ao seu site de viagens, nós lhe mostraremos as melhores rotas com o melhor valor. Vamos iniciar sua experiência...')
document.getElementById('nome').value='Oi' */

/*var texto = 'nome'*/

//function para pegar arquivo CSV
/* function pegarArquivo(arquivoSelecionado) {
    if(arquivoSelecionado.files){
       var file = arquivoSelecionado.files[0];
       document.getElementById('atributos').innerHTML =
            '  nome do arquivo: '+file.name +
            ';  tipo do arquivo: '+file.type +
            ';  tamanho do arquivo: '+file.size + ' bytes'
    }   
} */

//função para mostrar arquivo cvs                        
/* function leCSV(evt) {

    var fileArr = evt.target.result.split('\n');
    var strDiv = '<table>';
  
    for (var i=0; i<fileArr.length; i++) {
         strDiv += '<tr>';
         var fileLine = fileArr[i].split(',');
             for (var j=0; j<fileLine.length; j++) {
                  strDiv += '<td>'+fileLine[j].trim()+'</td>';
        }
        strDiv += '</tr>';
    }
  
        strDiv += '</table>';
        var CSVsaida = document.getElementById('CSVsaida');
        CSVsaida.innerHTML = strDiv;
  } */