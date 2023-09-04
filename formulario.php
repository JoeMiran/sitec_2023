<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="http://fonts.cdnfonts.com/css/straightler" rel="stylesheet">
        <title>Formulário</title>
    </head>
    <body>
        
        <div class="cabecalho">
            
            <div id="area-cabecalho">
                <div id="area-logo">
                    <h1><span class="roxo">SITEC</span><span class="branco">2023</span></h1>
                </div>
                
                <div id="area-menu">
                    <a href="index.php">Início</a> 
                    <a href="">Formulário</a> 
                    <a href="lista.php">Consulta</a>  
                </div>
           
            </div>
        
        </div>
        <div class="content">
            <form id="form">
                <h2 class="text">Praesent egestas</h2>
                <div>
                    <input type="text" placeholder="placeholder..." class="inputs required">
                    <span class="span-required">Praesent egestas Praesent egestas</span>
                </div>
                <div>
                    <input type="number" placeholder="placeholder..." class="inputs required">
                </div>
                <div>
                    <input type="text" placeholder="placeholder..." class="inputs required">
                    <span class="span-required">venenatis nunc eget, accumsan est.</span>
                </div>
                <p>venenatis nunc eget, accumsan est. Aenean non ultricies erat</p>
                <div class="box-select">
                    <div>
                        <input type="radio" id="B" value="B" name="alin">
                        <label for="B">OPCÇÃO1</label>
                    </div>
                    <div>
                        <input type="radio" id="S" value="S" name="alin">
                        <label for="S">OPCAO2</label>
                    </div>
                </div>
                <textarea class="inputs" name="descricao" id="descricao" cols="25" rows="10" placeholder="description..."></textarea><br>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </body>
</html>
