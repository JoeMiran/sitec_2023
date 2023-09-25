<?php
include_once '../model/usuario.php';
include_once '../model/pessoa.php';



function consultarPerfil() {
    comecarSessao();
    $pessoa = new Pessoa(idUsuario: $_SESSION['idUsuario']);
    return $pessoa->selecionar();
}



function excluirPerfil() {
    if (isset($_POST['botao_excluir'])) {
        validarToken($_POST['token']);
        comecarSessao();
        $usuario = new Usuario(idUsuario: $_SESSION['idUsuario']);
        $pessoa = new Pessoa(idUsuario: $_SESSION['idUsuario']);
        if ($usuario->deletar() && 
            $pessoa->deletar())
            redirecionar('exclusaoSucesso.php');
    }
}



function cadastrarPerfil() {
    if (isset($_POST['botao_enviar'])) {
        validarToken($_POST['token']);
        extract($_POST);
        $usuario = new Usuario(login: $login, senha: password_hash($senha, PASSWORD_DEFAULT));
        $idUsuario = $usuario->inserir();
        $pessoa = new Pessoa(idUsuario: $idUsuario, nome: $nome, email: $email, 
                            fone: $fone, sexo: $sexo, nascimento: $nascimento, 
                            estado: $estado, semestre: $semestre, descricao: $descricao);
        if ($pessoa->inserir()) 
            redirecionar('cadastroSucesso.php');
    }
}



function autenticarCredenciais() {
    if (isset($_POST['botao_entrar'])) {
        validarToken($_POST['token']);
        extract($_POST);
        $usuario = new Usuario(login: $login);
        $vetorDadosUsuario = $usuario->selecionar();
        if ($vetorDadosUsuario) {
            if (password_verify($senha, $vetorDadosUsuario['senha'])) {
                comecarSessao();
                $_SESSION['idUsuario'] = $vetorDadosUsuario['idUsuario'];
                redirecionar('loginSucesso.php');
            }
        }
        echo "<script>alert('Senha e/ou login errados ou o usuário não existe.');</script>";
    }
}



function restringirAcessoUsuario() {
    comecarSessao();
    if (isset($_SESSION['idUsuario']))
        redirecionar('inicio.php');
}
    
    

function restringirAcessoVisitante() {
    comecarSessao();
    if (! isset($_SESSION['idUsuario'])) 
        redirecionar('index.php');
}



function gerarToken() {
    comecarSessao();
    $_SESSION['token'] = md5(uniqid(mt_rand(), true));
    echo "<input name='token' value='".$_SESSION['token']."' type= 'hidden'>";
}



function validarToken($token) {
    comecarSessao();
    if (! (isset($_SESSION['token']) && $_SESSION['token'] == $token)) {
        header($_SERVER['SERVER_PROTOCOL'].' 405 Method Not Allowed');
        echo '<script>alert("405 Método não permitido.")</script>';
        redirecionar('index.php');
    }
}



function conectar() {
    $nomeDoServidor = "localhost";
    $nomeDoUsuario = "root";
    $senha = "";
    $nomeDoBancoDeDados = "sitec_2023";
    $conexao = new mysqli($nomeDoServidor, $nomeDoUsuario, $senha, $nomeDoBancoDeDados);
    if ($conexao->connect_error)
        exit("Falha na conexão: ".$conexao->connect_error);
    else
        return $conexao;
}



function redirecionar($pagina) {
    echo "<script>location.href='".$pagina."';</script>";
    exit();
}



function comecarSessao() {
    if (session_status() === PHP_SESSION_NONE)
        session_start();
}


    
function atraso($segundos) {
    ob_end_flush();
    flush();
    sleep($segundos);
}