<?php 
    include_once 'Backend.php';
    cadastrarPerfil();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Cadastro</title>
    </head>
    <body>
        <div class="area-cabecalho">
            <div class="area-logo">
                <h1>SITEC 2023</h1>
            </div>      
            <div id="area-menu">
                <a href="login.php">Início</a> 
                <a href="cadastro.php">Cadastro</a> 
            </div>       
        </div>
        <div class="content">
            <form method="post" action="cadastro.php" id="form">
                <h2 class="text">FORMULÁRIO DE CADASTRO</h2>

                <div>
                    <input type="text" name="login" id="login" placeholder="Login..." class="inputs required">
                </div>

                <div>
                    <input type="password" name="senha" id="senha" placeholder="Senha..." class="inputs required">
                </div>

                <button name="botao_enviar" value="1" class="botao_enviar" type="submit">Enviar</button>
            </form>
        </div>
    </body>

</html>