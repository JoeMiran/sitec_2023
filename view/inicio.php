<?php
    include_once '../controller/controller.php';
    restringirAcessoVisitante();
    $perfil = consultarPerfil();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link href="http://fonts.cdnfonts.com/css/low-gun-screen-expanded" rel="stylesheet">
        <title>Início</title>
    </head>
    <body>
            <div class="area-cabecalho">
                <div id="area-logo">
                    <h1><span class="roxo">SITEC </span><span class="ano">2023</span></h1>
                </div>
                
                <div id="area-menu">
                    <a href="inicio.php">Início</a> 
                    <a href="consulta.php">Consulta</a>  
                    <a href="exclusao.php">Exclusão</a>
                    <a href="sair.php">Sair</a>  
                </div>
           
            </div>

        <div class="container">

            <!-- Apresentação -->
            <div class="area_principal">
                <h2>Semana do ITEC 2023</h2>
                <h4>Desenvolvimento Web Full Stack.</h4>
                <img src="../img/itec.png">
                <p>
                    Esse minicurso tem por finalidade apresentar os conceitos básicos de desenvolvimento web full stack,
                    utilizando as tecnologias HTML, CSS, JavaScript, PHP e MySQL. Nosso objetivo é que ao final do minicurso,
                    você seja capaz de desenvolver um sistema web completo, desde a criação do banco de dados até a interface
                    de usuário. 
                </p>   
            </div>

            <!-- Boas vindas ao usuário -->
            <main class="area_usuario">
                <h1>Olá <span id="nome_usuario"><?php echo $perfil['nome'];?></span></h1>
                <h2>
                    Seja bem-vindx !
                </h2>
            </main>
        </div>

    </body>
</html>