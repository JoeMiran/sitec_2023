<?php



function conectar() {
    $conexao = new mysqli(hostname: 'localhost', username: 'root', 
                        password: '', database: 'sitec_2023');
    if ($conexao->connect_error)
        exit("Falha na conexão: ".$conexao->connect_error);
    else
        return $conexao;
}



function sairPerfil(){
    session_start();
    $_SESSION = array();
    echo "<script>location.href='index.php';</script>";
    exit();
}


    
function consultarPerfil() {
    session_start();
    $login = $_SESSION['login'];
    $conexao = conectar();
    $sql = "SELECT * 
            FROM usuario
            WHERE login = '".$login."'";
    $resultado = $conexao->query($sql);
    $conexao->close();
    $perfil = $resultado->fetch_array();
    return $perfil;
}



function cadastrarPerfil() {
    if (isset($_POST['botao_enviar'])) {
        extract($_POST);
        $conexao = conectar();
        $sql = "INSERT INTO usuario (
            login,
            senha
        ) VALUES (
            '".$login."',
            '".$senha."'
        )";
        $conexao->query($sql);
        $conexao->close();
        echo "<script>location.href='index.php';</script>";
        exit();
    }
}



function autenticarCredenciais() {
    if (isset($_POST['botao_enviar'])) {
        extract($_POST);
        $conexao = conectar();
        $sql = "SELECT * 
                FROM usuario
                WHERE login = '".$login."'";
        $resultado = $conexao->query($sql);
        $conexao->close();
        $dados = $resultado->fetch_array();
        if ($dados['senha'] == $senha) {
            session_start();
            $_SESSION['login'] = $login;
            echo "<script>location.href='inicio.php';</script>";
            exit();
        }
    }
}