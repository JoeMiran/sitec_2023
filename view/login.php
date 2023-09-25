<?php
    include_once '../controller/Controller.php';
    $controller = new Controller();
    $controller->restringirAcessoUsuario();
    $controller->validarToken();
    $controller->autenticarCredenciais();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link href="http://fonts.cdnfonts.com/css/low-gun-screen-expanded" rel="stylesheet">
        <script type="text/javascript" src="../script/validacao.js"></script>
        <title>Início</title>
    </head>
    <body>
            <div class="area-cabecalho">
                <div id="area-logo">
                    <h1><span class="roxo">SITEC </span><span class="ano">2023</span></h1>
                </div>
                
                <div id="area-menu">
                    <a href="login.php">Início</a> 
                    <a href="cadastro.php">Cadastro</a> 
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

            <!-- Login -->
            <main class="area_login">
                <h2>LOGIN</h2>
                <form class="formulario" method="post" action="login.php">
                    <?php $controller->gerarToken();?>

                    <input type="text" name="login" placeholder="Login" class="inputs" required>

                    <input type="password" name="senha" placeholder="Senha" class="inputs" required>
                    
                    <div class="botoes">
                        
                        <button name="botao_enviar" value="1" class="botao_entrar" type="submit" onclick="validarEntrada(event)">Entrar</button>
                        
                        <a class="botao_cadastrar" href="cadastro.php">Cadastrar</a>
                        
                    </div>
                    <span class="erro_login"></span>
                </form>
            </main>
        </div>
    </body>
</html>