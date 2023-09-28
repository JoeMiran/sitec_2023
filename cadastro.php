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
        <div> 
            <a href="index.php">Início</a> 
            <a href="cadastro.php">Cadastro</a> 
        </div>
        <div>
            <form class="formulario" method="post" action="cadastro.php" id="form">
                <h2 class="text">FORMULÁRIO DE CADASTRO</h2>

                <div>
                    <input type="text" name="login" id="login" placeholder="Login...">
                </div>

                <div>
                    <input type="password" name="senha" id="senha" placeholder="Senha...">
                </div>

                <button name="botao_enviar" value="1" class="botao_enviar" type="submit">Enviar</button>
            </form>
        </div>
    </body>

</html>