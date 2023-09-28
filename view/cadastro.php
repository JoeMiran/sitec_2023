<?php 
    include_once '../controller/Controller.php';
    (new Controller)->cadastrarPerfil();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="http://fonts.cdnfonts.com/css/low-gun-screen-expanded" rel="stylesheet">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div>
            <a href="login.php">Início</a>
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
    </div>
</body>

</html>