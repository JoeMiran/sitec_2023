<?php

include_once "index.php";

function verificaConta() {
    
    if(isset($_POST['botao_entrar'])) {
        // Conex�o com o banco de dados (substitua pelas suas credenciais)
        session_start();
        extract($_POST);

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sitec_2023";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Falha na conex�o: " . $conn->connect_error);
        }
        

        // Obt�m os valores do formul�rio (substitua os nomes dos campos conforme necess�rio)
        $login = $_POST['usuario'];
        $senha = $_POST['senha'];

        // Consulta SQL para verificar se o login e senha existem
        $sql = "SELECT * FROM usuarios WHERE usuario = '$login' AND senha = '$senha'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Login e senha existem no banco de dados
            // Redireciona para a p�gina de login (substitua pelo URL correto)
            header("Location: consulta.php");
            exit();
        } else {
            echo 
            '<script> 
                alert("Usu�rio n�o cadastrado!");
            </script>';
        }

        // Fecha a conex�o com o banco de dados
        $conn->close();
    }
}
?>