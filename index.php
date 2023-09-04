
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="http://fonts.cdnfonts.com/css/straightler" rel="stylesheet">
        <title>Início</title>
    </head>
    <body>
        
        <div class="cabecalho">
            
            <div id="area-cabecalho">
                <div id="area-logo">
                    <h1><span class="roxo">SITEC</span><span class="branco">2023</span></h1>
                </div>
                
                <div id="area-menu">
                    <a href="">Início</a> 
                    <a href="formulario.php">Formulário</a> 
                    <a href="lista.php">Consulta</a>  
                </div>
           
            </div>
        
        </div>

        <div class="container">

            <div class="area_principal">
                <!--Abertura das postagem -->
                    <h2>LOREM IPSUM</h2><br>
                    <h4>sapien, quis euismod lacus lorem vel justo.</h4><br>
                    <img width="660px" src="Imagem/imagem0.png"><br><br>
                    <p>
                        Phasellus non malesuada arcu. Phasellus efficitur vestibulum arcu eu aliquet. Duis euismod nunc id feugiat tempor. In hac habitasse platea dictumst.
                    </p><br>
                    <p>
                        bi quis tempor ante. Cras vitae diam magna. Donec dictum lobortis facilisis. Nullam et egestas lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>	
            </div>

            <!-- Login -->
            <div class="area_login" style="border: 1px solid red;">
                <h2>LOGIN</h2>
                <form method="POST" action="login.php">
                    <input type="text" name="usuario" placeholder="Usuário" class="inputs" required><br><br>
                    <input type="password" name="senha" placeholder="Senha" class="inputs" required><br><br>
                    <button type="submit">Entrar</button>
                </form>
            </div>

        </div>

    </body>
</html>