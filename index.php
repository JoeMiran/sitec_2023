<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link href="http://fonts.cdnfonts.com/css/low-gun-screen-expanded" rel="stylesheet">
        <title>Início</title>
    </head>
    <body>
            <div class="area-cabecalho">
                <div id="area-logo">
                    <h1><span class="roxo">SITEC </span><span class="ano">2023</span></h1>
                </div>
                
                <div id="area-menu">
                    <a href="index.php">Início</a> 
                    <a href="formulario.php">Formulário</a> 
                    <a href="consulta.php">Consulta</a>  
                </div>
           
            </div>

        <div class="container">

            <!-- Apresentação -->
            <div class="area_principal">
                <h2>Semana do ITEC 2023</h2>
                <h4>Desenvolvimento Web Full Stack.</h4>
                <img src="img/itec.png">
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
                <form class="formulario" method="POST" action="index.php">
                    <input type="text"  name="usuario" placeholder="Usuário" class="inputs" required>
                    <input type="password" name="senha" placeholder="Senha" class="inputs" required>
                    <span class="erro_login"></span>
                </form>
                <div class="botoes">
                        <button class="botao_entrar" type="submit" value="entrar" onclick="consultarConta(event)">Entrar</button>
                        <button class="botao_cadastrar" type="submit" value="cadastrar" onclick="cadastrarConta(event)">Cadastrar</button>
                </div>
            </main>
        </div>

        <script>

            function cadastrarConta(event) {
                event.preventDefault();
                window.location.href = "formulario.php";
            }

            function consultarConta(event) {
                
                const usuario = document.querySelector('input[name="usuario"]').value;
                const senha = document.querySelector('input[name="senha"]').value;

                if(senha.length < 8 || usuario.length < 5) {
                    const erroLogin = document.querySelector('.erro_login');
                    erroLogin.innerHTML = "Usuário ou senha inválidos!";
                    event.preventDefault();
                } else {
                    window.location.href = "consulta.php";
                }
            }

        </script>

    </body>
</html>