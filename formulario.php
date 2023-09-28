<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link href="http://fonts.cdnfonts.com/css/straightler" rel="stylesheet">
    <title>FormulÃ¡rio</title>
</head>

<body>

    <div class="area-cabecalho">
        <div id="area-logo">
            <h1><span class="roxo">SITEC </span><span class="ano">2023</span></h1>
        </div>      
        <div id="area-menu">
            <a href="index.php">Iní­cio</a> 
            <a href="formulario.php">Formulário</a> 
            <a href="consulta.php">Consulta</a>  
        </div>
           
    </div>
    <div class="content">
        <form id="form">
            <h2 class="text">FORMULÁRIO DE CADASTRO</h2>
            <div>
                <input type="text" placeholder="Nome..." class="inputs required">
            </div>
            <div>
                <input type="text" placeholder="E-mail..." class="inputs required">
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
                <label class="inputs required" for="dtnasc">Nascimento:</label>
                <input type='date' id='dtnasc' name='dtnasc' class="inputs required">
            </div>
            <div class="inputs required">
                <label class="inputs" name = "estado" class="inputs required">
                Estado:</label>
                <select id="estado" name="UF">
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
                <input type="number" required pattern="[0-10]{2}" placeholder="Semestre..." class="inputs required">
            </div>
            <div>
                <input type="text" name="login" id="login" placeholder="Login..." class="inputs required">
            </div>
            <div>
                <input type="password" name="senha" id="senha" placeholder="Senha..." class="inputs required">
            </div>
            <textarea class="inputs" name="descricao" id="descricao" cols="25" rows="10" placeholder="InformaÃ§Ãµes Adicionais..."></textarea><br>
            <button class="botao_enviar" type="submit">Enviar</button>
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