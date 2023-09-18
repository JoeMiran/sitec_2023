<?php 

include_once 'salvaFormulario.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="http://fonts.cdnfonts.com/css/straightler" rel="stylesheet">
    <title>Formulário</title>
</head>

<body>
    <div class="area-cabecalho">
         <div id="area-logo">
             <h1><span class="roxo">SITEC </span><span class="ano">2023</span></h1>
         </div>

         <div id="area-menu">
             <a href="index.php">Início</a>
             <a href="">Formulário</a>
             <a href="consulta.php">Consulta</a>
         </div>
     </div>

    <div class="content">
        <form id="form" action="salvaFormulario.php" method="POST">
            <h2 class="text">Cadastro</h2>
            <div>
                <input type="text" placeholder="Nome..." class="inputs required" name="nome">

            </div>
            <div>
                <input type="text" placeholder="E-mail..." class="inputs required" name="email">

            </div>
            <div>
                <input type="tel" id="fone" name="telefone" required pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="11 99999-9999" class="inputs required">
            </div>
            <div class="inputs required">
                <p>Gênero:</p>
                <input type="radio" id="genero-m" name="genero" value="Masculino">
                <label for="genero-m">Masculino</label><br>
                <input type="radio" id="genero-f" name="genero" value="Feminino">
                <label for="genero-f">Feminio</label>
            </div>
            <div class="inputs required">
                <label class="inputs required" for="nascimento">Nascimento:</label>
                <input type='date' id='nascimento' name='nascimento' class="inputs required">
            </div>
            <div class="inputs required">
                <label class="inputs required" for="UF">Estado:</label>
                <select id="UF" name="UF" class="inputs required">
                    <option value="SP">PA</option>
                    <option value="RJ">AM</option>
                    <option value="PB">AL</option>
                    <option value="PB">AC</option>
                    <option value="PB">PR</option>
                    <option value="PB">RJ</option>
                    <option value="PB">SP</option>
                    <option value="PB">MA</option>
                </select>
            </div>
            <div>
                <input type="number" name="semestre" pattern="[0-10]{2}" placeholder="Semestre..." class="inputs required">
            </div>
            <div>
                <input type="text" name="login" id="login" placeholder="Login..." class="inputs required">

            </div>
            <div>
                <input type="password" name="senha" id="senha" placeholder="Senha..." class="inputs required">

            </div>
            <textarea class="inputs" name="descricao" id="descricao" cols="25" rows="10" placeholder="Informações Adicionais..."></textarea><br>
            <input class="botao_enviar" name="botao_enviar" type="submit"></input>
        </form>
    </div>

    <script>
         // Quando um link ou botão é clicado
         document.querySelectorAll('a, button').forEach(link => {
             link.addEventListener('click', (event) => {
                 event.preventDefault(); // Impede o comportamento padrão de seguir o link imediatamente
                 const destination = link.getAttribute('href'); // Obtém o destino do link
                 document.querySelector('body').classList.add('exiting'); // Adiciona a classe .exiting
                 setTimeout(() => {
                     window.location.href = destination; // Redireciona para o destino após a transição
                 }, 500); // Tempo da transição em milissegundos (0,5 segundos)
             });
         });
     </script>

</body>

</html>