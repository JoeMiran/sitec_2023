<!DOCTYPE html>
<html lang="pt-br">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width" , initial-scale="1.0">
     <link rel="stylesheet" type="text/css" href="../css/style.css">
     <link href="http://fonts.cdnfonts.com/css/low-gun-screen-expanded" rel="stylesheet">
     <title>Exclusão bem-sucedida</title>
 </head>

 <body>
     <div class="area-cabecalho">
         <div id="area-logo">
             <h1><span href="index.php" class="roxo">SITEC </span><span class="ano">2023</span></h1>
         </div>
     </div>

     <div class="sucesso">
        <h2>EXCLUSÃO REALIZADA COM SUCESSO!</h2> 
        <h3>Você está sendo redirecionado para a página inicial.</h3> 
     </div>  
 </body>

</html>

<?php 
    include_once '../controller/Controller.php';
    (new Controller())->sairPerfil();