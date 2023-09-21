<?php
    include_once 'backend.php';
    Backend::restringirAcessoVisitante();
    $dados = Backend::buscar();
?>

 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width" , initial-scale="1.0">
     <link rel="stylesheet" type="text/css" href="./css/style.css">
     <link href="http://fonts.cdnfonts.com/css/low-gun-screen-expanded" rel="stylesheet">
     <title>Consulta</title>
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
             <a href="sair.php">Sair</a>
         </div>
     </div>

     <div class="content">

         <fieldset>
            <legend>
                <h2 class="text">CONSULTAR DADOS CADASTRAIS</h2>
            </legend>
            <p>
                Nome: <?php echo($dados['nome'])?>
            </p>
            <p>
                E-mail: <?php echo($dados['email'])?>
            </p>
            <p>
                Telefone: <?php echo($dados['fone'])?>
            </p>
            <p>
                Sexo: <?php echo($dados['sexo'])?>
            </p>
            <p>
                Nascimento: <?php echo($dados['nascimento'])?>
            </p>
            <p>
                Estado: <?php echo($dados['estado'])?>
            </p>
            <p>
                Semestre: <?php echo($dados['semestre'])?>
            </p>
            <p>
                Informações Adicionais: <?php echo($dados['descricao'])?>
            </p>
         </fieldset>

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