<?php
    include_once 'backend.php';
    Backend::restringirAcessoVisitante();
    $dados = Backend::consultarDados();
?>

 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width" , initial-scale="1.0">
     <link rel="stylesheet" type="text/css" href="./css/style.css">
     <link href="http://fonts.cdnfonts.com/css/low-gun-screen-expanded" rel="stylesheet">
     <title>Consulta</title>
 </head>

 <body>
     <div class="area-cabecalho">
         <div id="area-logo">
             <h1><span class="roxo">SITEC </span><span class="ano">2023</span></h1>
         </div>

         <div id="area-menu">
             <a href="inicio.php">Início</a>
             <a href="consulta.php">Consulta</a>
             <a href="sair.php">Sair</a>
         </div>
     </div>

     <div class="content">

         <fieldset>
            <legend>
                <h2 class="text">CONSULTAR DADOS CADASTRAIS</h2>
            </legend>
            <p>
                <strong>Nome:</strong>
                <?php echo($dados['nome'])?>
            </p><br>
            <p>
                <strong>Email:</strong>
                <?php echo($dados['email'])?>
            </p><br>
            <p>
                <strong>Telefone:</strong>
                <?php echo($dados['fone'])?>
            </p><br>
            <p>
                <strong>Sexo: </strong>
                <?php echo($dados['sexo'])?>
            </p><br>
            <p>
                <strong>Nascimento: </strong>
                <?php echo($dados['nascimento'])?>
            </p><br>
            <p>
                <strong>Estado: </strong>
                <?php echo($dados['estado'])?>
            </p><br>
            <p>
                <strong>Semestre:</strong>
                <?php echo($dados['semestre'])?>
            </p><br>
            <p>
                <strong>Informações Adicionais: </strong>
                <?php echo($dados['descricao'])?>
            </p><br>
         </fieldset>

     </div>
 </body>

 </html>