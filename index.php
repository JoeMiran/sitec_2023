<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link href="http://fonts.cdnfonts.com/css/low-gun-screen-expanded" rel="stylesheet">
    <title>Início</title>
</head>

<body>
    <div class="container"> <!-- Div que envolve todo o conteúdo da página. -->
        <!-- Apresentação -->
        <div class="area_principal"> <!--Seção de apresentação com informações básicas -->
            <h2>Semana do ITEC 2023</h2> <!-- Tag para Título de tamanho 2 -->
            <h4>Desenvolvimento Web Full Stack.</h4> <!--  Tag para Título de tamanho 4 -->
            <img src="img/itec.png"> <!-- Tag para adição de imagem -->
            <p> <!-- Tag paragrafo -->
                Esse minicurso tem por finalidade apresentar os conceitos básicos de desenvolvimento web full stack,
                utilizando as tecnologias HTML, CSS, JavaScript, PHP e MySQL. Nosso objetivo é que ao final do minicurso,
                você seja capaz de desenvolver um sistema web completo, desde a criação do banco de dados até a interface
                de usuário.
            </p>
        </div>

        <!-- Seção Login -->
        <div class="area_login">
            <h2>LOGIN</h2>
            <form class="formulario" method="post" action="index.php"> <!-- Formulário para login que envia dados para "index.php" usando o método POST. -->
                <input type="text" name="usuario" placeholder="Usuário" class="inputs" required> <!--  Campo de entrada de texto para o nome de usuário. -->
                <input type="password" name="senha" placeholder="Senha" class="inputs" required> <!--  Campo de entrada de texto para a senha. -->
                <div class="botoes">
                    <button class="botao_enviar" name="botao_enviar" value="1" type="submit" onclick="">Entrar</button>
                    <a href="cadastro.php" class="botao_cadastrar" type="submit">Cadastrar</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>