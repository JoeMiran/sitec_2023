<?php

if (isset($_POST['botao_enviar'])) {
    session_start();
    extract($_POST);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sitec_2023";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $sql = " INSERT INTO sitec_2023
    (
        nome,
        email,
        telefone,
        genero,
        nascimento,
        UF,
        semestre,
        usuario,
        senha,
        descricao

    ) VALUES 
    ("
}

?>