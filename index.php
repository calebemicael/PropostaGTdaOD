<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVISÃO DA OD CHARQUEADAS</title>
    <style>
        /* Estilos inline para o contêiner geral e divs */
        body {
            background-color: lightgray;
        }
        
        .container {
            background-color: white;
        }

        /* Estilos para a div de sumário à esquerda */
        .div-sumario{
            width: 100%;
            height: 800px;
            /* background-color: lightyellow; */
            /* Ajuste conforme necessário */
            /*background-color: red;*/
            float: left;
            overflow-y: auto;
            margin-right: 1%;
        }

        /* estilos da lista do sumario */
        .div-sumario ul, li {
            list-style:none;
            padding-left:6px;
            margin: 2px;
        }

        /* Estilos inline para as divs */
        .div-vigente {
            width: 100%;
            height: 800px;
            /* background-color: #f4f4f4; */
            /* Ajuste conforme necessário */
            /*background-color: red;*/
            float: left;
            overflow-y: auto;
            margin-right: 1%;
            /* Adiciona barra de rolagem vertical se necessário */
        }

        .div-proposta {
            width: 100%;
            height: 800px;
            /* background-color: lightyellow; */
            /* Ajuste conforme necessário */
            /*background-color: yellow;*/
            float: left;
            overflow-y: auto;
            overflow-x: auto;
            /* Adiciona barra de rolagem vertical se necessário */
        }

        

        /* Estilos específicos para as divs internas */
        /* .div-vigente>div, */
        /* .div-proposta>div { */
            /* margin-bottom: 10px; */
            /* Espaço entre as divs internas */
            /* height: 50px; */
            /* Altura mínima das divs internas */
        /* } */
    </style>
    <link rel="stylesheet" href="css/proposta.css">
    <link rel="stylesheet" href="css/vigente.css">
    <link rel="stylesheet" href="css/destaques.css">
</head>

<body>
<script>
    function achaItem(item, temV=true){
        // alert('diacho que nao funciona!!')
        // alert('#'+item+'p')
        if(temV){
            document.querySelector('#'+item+'v').scrollIntoView({ behavior: 'smooth' });
        }else{
            document.querySelector('#generico').scrollIntoView({ behavior: 'instant' });
        }
        // nao há necessidade de if temP aqui, o sumario é
        // construido com base na proposta.
        setTimeout(function() {
            document.querySelector('#'+item+'p').scrollIntoView({ behavior: 'smooth' });
        }, 1000); // Aguarda 2 segundos (ajuste conforme necessário)
    }
  </script>
    <div class="container">
        <p align='center' style='font-size: 50px; color:white; background-color:black;'> REVISÃO DA OD - PROPOSTA DO GRUPO DE TRABALHO </p>
        <table border='1'>
            <thead>
                <tr >
                    <th width="10%" align="center" style="background-color: lightblue;"> SUMÁRIO DA PROPOSTA</th>
                    <th width="45%" align="center" style="background-color: lightblue;"> PROPOSTA </th>
                    <th width="45%" align="center" style="background-color: lightgreen;"> VIGENTE </th>
                </tr>
            </thead>
            <tbody>
                <tr> 
                    <td> <?php include("sumario.php"); ?> </td>  
                    <td> <?php include("proposta.php"); ?> </td>
                    <td> <?php include("vigente.php"); ?></td>
                </tr>
                <tr> <td colspan=3>
                        <table width="100%" style="background-color: black; color: white; font-weight: bold;">
                            <tr> <td colspan=6 align='center'> LEGENDA </td></tr>
                            <tr>
                                <td class="exclusao">&nbsp;</td><td>removido</td>
                                <td class="alteracao">&nbsp;</td><td>alterado</td>
                                <td class="inclusao">&nbsp;</td><td>inclu&iacute;do</td>
                            </tr>
                        
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</body>

</html>