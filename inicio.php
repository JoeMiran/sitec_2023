<?php
    include_once 'Backend.php';
    $perfil = consultarPerfil();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Inicio</title>
    </head>
    <body>
        <div class="area-cabecalho">
            <div class="area-logo">
                <h1>SITEC 2023</h1>
            </div>      
            <div id="area-menu">
                <a href="login.php">Início</a> 
                <a href="sair.php">Sair</a> 
            </div>       
        </div>
        <div class="container">

            <!-- Apresentação -->
            <div class="area_principal">
                <h2>Semana do ITEC 2023</h2>
                <h4>Desenvolvimento Web Full Stack.</h4>
                <img src="itec.png">
            </div>

            <!-- Boas vindas ao usuário -->
            <main class="area_usuario">
                <h1>Olá <?php echo $perfil['login'];?> </h1>
                <h2>
                    Seja bem-vindx !
                </h2>
            </main>
        </div>
    </body>
</html>