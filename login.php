<?php
    include_once 'Backend.php';
    restringirAcessoUsuario();
    autenticarCredenciais();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Início</title>
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
        <div>
            <!-- Apresentação -->
            <div>
                <h2>Semana do ITEC 2023</h2>
                <h4>Desenvolvimento Web Full Stack.</h4>
                <img src="itec.png">
            </div>
            <!-- Login -->
            <main>
                <h2>LOGIN</h2>
                <form method="post" action="login.php">

                    <input type="text" name="login" placeholder="Login" required>

                    <input type="password" name="senha" placeholder="Senha" required>
                    
                    <div>
                        
                        <button name="botao_enviar" value="1" type="submit">Entrar</button>
                        
                        <a href="cadastro.php">Cadastrar</a>
                        
                    </div>
                </form>
            </main>
        </div>
    </body>
</html>