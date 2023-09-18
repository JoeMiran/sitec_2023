<?php 

include_once "salvaFormulario.php";

if(isset($_POST['botao_entrar'])) { //Se o botão entrar for clicado

session_start(); //Inicia uma sessão para armazenar os dados do usuário logado
extract($_POST); //Extrai os dados do formulário para armazenar em variáveis com o mesmo nome dos campos
$sql_verificacarCrendenciais = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";//Verificando se as credenciais login e senha 
$result = $conn->query($sql_verificacarCrendenciais); //Armazenando resultado da query

if ($result->num_rows > 0) { //Se o resultado da buscar tiver pelo menos uma linha
    $row = $result->fetch_assoc(); //Armazena os dados da linha em um array
    $senha_hash = $row["senha"]; //Armazena a senha criptografada
    $idPessoa = $row["idPessoa"]; //Armazena o id da pessoa

    //Comparando a senha criptografada com a senha digitada na entrada
    if (password_verify($senha, $senha_hash)) {
        //Se a senha estiver correta, recupera os dados da pessoa e redireciona para a página de consulta
        $sql_selecionarDadosPessoa = "SELECT * FROM pessoa WHERE id = '$idPessoa'";
        $result_pessoa = $conn->query($sql_selecionarDadosPessoa); //Armazenando resultado da query

        if ($result_pessoa->num_rows > 0) {
            $row_pessoa = $result_pessoa->fetch_assoc();
        } else {
            echo 'Essa pessoal não tem nada cadastrado';
        }

    } else {
        echo 'senha incorreta';
    }

} else {
    echo 'usuário não cadastrado. Faça seu cadastro';
}

$conn->close();
}
?>