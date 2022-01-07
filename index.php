<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Função Primo</title>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript">
            $(document).on('click', "#btnEnviarDados", function () {
               var inicio = $("#inicio").val();
               var fim = $("#fim").val();
               
                // criando as variáveis
                var url = "primo.php";
                var data = {inicio:inicio, fim: fim};

                $.post(
                 url, //Required URL of the page on server
                 data,
                 function(response,status)
                 {
                   // tratando o status de retorno. Sucesso significa que o envio e retorno foi executado com sucesso.
                   if(status == "success")
                   {
                      // pegando os dados jSON
                      var obj = eval(response);
                      
                     $("#result").html(
                       "Números primo do intervalo "+inicio+" e "+ fim +" : " + obj
                     );
                   }    	
                 }
                );
            });
        </script>
    </head>
    <body>
        <h2>Função Primo</h2>
        <h3>Verifique os números primo em um intervalo</h3>
        <form>
            <label>valor inicial:</label>
            <input id="inicio" type="number" name="vlr_inicio"/>
            <label>valor final:</label>
            <input id="fim" type="number" name="vlr_fim"/>
            <input id="btnEnviarDados" type="button" value="Enviar"/>
        </form>
        
        <div id="result">
            
        </div>
    </body>
</html>
