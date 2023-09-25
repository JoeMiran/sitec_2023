<?php 
    include_once '../controller/Controller.php';
    $controller = new Controller();
    $controller->restringirAcessoVisitante();
    $controller->validarToken();
    $controller->editarPerfil();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="http://fonts.cdnfonts.com/css/straightler" rel="stylesheet">
    <title>Edição</title>
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
            <a href="edicao.php">Edição</a>
            <a href="sair.php">Sair</a>  
        </div>       
    </div>

    <div class="content">
        <form method="post" action="edicao.php" id="form">
            <h2 class="text">FORMULÁRIO DE EDIÇÃO</h2>
            <?php $controller->gerarToken();?>
            
            <div>
                <input type="text" name="nome" placeholder="Nome..." class="inputs required">
            </div>
            
            <div>
                <input type="text" name="email" placeholder="E-mail..." class="inputs required">
            </div>

            <div>
                <input type="tel" id="fone" name="fone" required pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="11 99999-9999" class="inputs required">
            </div>

            <div class="inputs required">
                <p>Sexo:</p>
                <input type="radio" id="sexo-m" name="sexo" value="Masculino">
                <label for="sexo-m">Masculino</label>
                <input type="radio" id="sexo-f" name="sexo" value="Feminino">
                <label for="sexo-f">Feminio</label>
            </div>

            <div class="inputs required">
                <label class="inputs required" for="nascimento">Nascimento:</label>
                <input type='date' id='dtnasc' name='nascimento' class="inputs required">
            </div>

            <div class="inputs required">
                <label class="inputs required" for="estado">Estado:</label>
                <select id="estado" name="estado" class="inputs required">
                    <option value="PA">PA</option>
                    <option value="AM">AM</option>
                    <option value="AL">AL</option>
                    <option value="AC">AC</option>
                    <option value="PR">PR</option>
                    <option value="RJ">RJ</option>
                    <option value="SP">SP</option>
                    <option value="MA">MA</option>
                </select>
            </div>

            <div>
                <input type="number" name="semestre" required pattern="[0-10]{2}" placeholder="Semestre..." class="inputs required">
            </div>

            <div>
                <input type="password" name="senha" id="senha" minlength="8" placeholder="Senha..." class="inputs required">
            </div>

            <textarea class="inputs" name="descricao" id="descricao" cols="25" rows="10" maxlength="100" ="Informações Adicionais..."></textarea><br>

            <button name="botao_enviar" value="1" class="botao_enviar" type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>