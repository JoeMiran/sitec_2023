
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="http://fonts.cdnfonts.com/css/low-gun-screen-expanded" rel="stylesheet">
        <title>Início</title>
    </head>
    <body>
        
        <div class="cabecalho">
            
            <div id="area-cabecalho">
                <div id="area-logo">
                    <h1><span class="roxo">SITEC </span><span class="ano">2023</span></h1>
                </div>
                
                <div id="area-menu">
                    <a href="">Início</a> 
                    <a href="formulario.php">Formulário</a> 
                    <a href="lista.php">Consulta</a>  
                </div>
           
            </div>
        
        </div>

        <div class="container">

            <!-- Apresentação -->
            <div class="area_principal">
                <h2>Semana do ITEC 2023</h2><br>
                <h4>Desenvolvimento Web Full Stack.</h4><br>
                <img src="img/itec.png"><br><br>
                <p>
                    Esse minicurso tem por finalidade apresentar os conceitos básicos de desenvolvimento web full stack,
                    utilizando as tecnologias HTML, CSS, JavaScript, PHP e MySQL. Nosso objetivo é que ao final do minicurso,
                    você seja capaz de desenvolver um sistema web completo, desde a criação do banco de dados até a interface
                    de usuário. 
                </p>   
            </div>

            <!-- Login -->
            <div class="area_login">
                <h2>LOGIN</h2>
                <form method="POST" action="login.php">
                    <input type="text" name="usuario" placeholder="Usuário" class="inputs" required><br><br>
                    <input type="password" name="senha" placeholder="Senha" class="inputs" required><br><br>
                    <div class="butoes" style="border: 1px solid red">
                        <button style="background-color: greenyellow;" type="submit">Entrar</button>
                        <button class="cadastrar" type="submit">Cadastrar</button>
                    </div>
                </form>
            </div>

        </div>

    </body>
</html>