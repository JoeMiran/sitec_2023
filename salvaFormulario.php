<?php
if (isset($_POST['botao_enviar'])) {
    session_start();
    extract($_POST);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sitec_2023";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexуo: " . $conn->connect_error);
    }
    
    $sql_pessoa = "INSERT INTO pessoa
    (
        nome,
        email,
        telefone,
        genero,
        nascimento,
        UF,
        semestre,
        descricao
    ) VALUES
    (
        '$nome',
        '$email',
        '$telefone',
        '$genero',
        '$nascimento',
        '$UF',
        '$semestre',
        '$descricao'
    )";
    
    if ($conn->query($sql_pessoa) === TRUE) {
        $last_inserted_id = $conn->insert_id; // Obtщm o ID da pessoa inserida

        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        
        $sql_usuario = "INSERT INTO usuario
        (
            idPessoa,
            login,
            senha
        ) VALUES
        (
            '$last_inserted_id',
            '$login',
            '$senha_hash'
        )";

        if ($conn->query($sql_usuario) === TRUE) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro na inserчуo na tabela 'usuario': " . $conn->error;
        }
    } else {
        echo "Erro na inserчуo na tabela 'pessoa': " . $conn->error;
    }

    $conn->close();
} 
?>