<?php 
    include_once 'Backend.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

 <head>
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Sair</title>
 </head>

 <body>
     <div class="area-cabecalho">
         <div id="area-logo">
             <h1><span href="login.php" class="roxo">SITEC </span><span class="ano">2023</span></h1>
         </div>
     </div>

     <div class="sucesso">
        <h2>Você saiu do seu perfil.</h2> 
        <h3>Você está sendo redirecionado para a página inicial.</h3> 
     </div>  
 </body>

</html>

<?php 
    $controller->sairPerfil();