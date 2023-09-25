<?php 
    include_once '../controller/Controller.php';
    $controller = new Controller();
    $controller->restringirAcessoVisitante();
    $controller->validarToken();
    $controller->excluirPerfil();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="http://fonts.cdnfonts.com/css/low-gun-screen-expanded" rel="stylesheet">
    <title>Exclusão</title>
</head>

<body>
    <div class="area-cabecalho">
        <div id="area-logo">
             <h1><span href="login.php" class="roxo">SITEC </span><span class="ano">2023</span></h1>
        </div>
        <div id="area-menu">
            <a href="inicio.php">Início</a> 
            <a href="consulta.php">Consulta</a>  
            <a href="exclusao.php">Exclusão</a>
            <a href="edicao.php">Edição</a>
            <a href="sair.php">Sair</a>  
        </div>
    </div>
    
    <div class="atencao">
        <h2>VOCÊ TEM CERTEZA QUE DESEJA EXCLUIR SEU PERFIL?</h2> 
        <h3>Todos os seus dados serão apagados permanentemente.</h3> 

        <form class="formulario" method="post" action="exclusao.php">
            <?php $controller->gerarToken();?>
    
            <div class="botoes_exclusao">
                
                <button name="botao_enviar" value="1" class="botao_excluir" type="submit">EXCLUIR</button>
                
                <a class="botao_cancelar" href="inicio.php">CANCELAR</a>
                
            </div>
        </form>
    </div>  
</body>

</html>