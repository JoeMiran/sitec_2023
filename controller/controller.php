<?php
include_once '../lib/LibUtil.php';
include_once '../model/DTO/Usuario.php';
include_once '../model/DTO/Pessoa.php';
include_once '../model/DAO/UsuarioDAO.php';
include_once '../model/DAO/PessoaDAO.php';



Class Controller {



    public function atrasarRedirecionarIndex() {
        LibUtil::atrasar(2);
        LibUtil::redirecionar('login.php');
    }



    public function atrasarRedirecionarInicio() {
        LibUtil::atrasar(2);
        LibUtil::redirecionar('inicio.php');
    }



    public function restringirAcessoUsuario() {
        LibUtil::comecarSessao();
        if (isset($_SESSION['idUsuario']))
            LibUtil::redirecionar('inicio.php');
    }
        
        
    
    public function restringirAcessoVisitante() {
        LibUtil::comecarSessao();
        if (! isset($_SESSION['idUsuario'])) 
            LibUtil::redirecionar('login.php');
    }



    public function restringirAcessoTransicao() {
        LibUtil::comecarSessao();
        if (! isset($_SESSION['Transicao'])) 
            LibUtil::redirecionar('login.php');
        else
            unset($_SESSION['Transicao']);
    }
    
    
    
    public function gerarToken() {
        LibUtil::comecarSessao();
        $_SESSION['token'] = md5(uniqid(mt_rand(), true));
        echo "<input name='token' value='".$_SESSION['token']."' type= 'hidden'>";
    }
    
    
    
    public function validarToken() {
        if (isset($_POST['botao_enviar'])) {
            LibUtil::comecarSessao();
            if (! (isset($_SESSION['token']) && $_SESSION['token'] == $_POST['token'])) {
                header($_SERVER['SERVER_PROTOCOL'].' 405 Method Not Allowed');
                echo '<script>alert("405 Método não permitido.")</script>';
                LibUtil::redirecionar('login.php');
            }
        }
    }
        
    
    
    public function sairPerfil(){
        LibUtil::comecarSessao();
        $_SESSION = array();
        LibUtil::atrasar(2);
        LibUtil::redirecionar('login.php');
    }
    
    
        
    public function consultarPerfil() {
        LibUtil::comecarSessao();
        $pessoa = new Pessoa(idUsuario: $_SESSION['idUsuario']);
        return (new PessoaDAO())->selecionar($pessoa);
    }
    
    
    
    public function excluirPerfil() {
        if (isset($_POST['botao_enviar'])) {
            LibUtil::comecarSessao();
            $usuario = new Usuario(idUsuario: $_SESSION['idUsuario']);
            $pessoa = new Pessoa(idUsuario: $_SESSION['idUsuario']);
            if ((new UsuarioDAO())->deletar($usuario) && 
                (new PessoaDAO())->deletar($pessoa))
                $_SESSION['Transicao'] = true;
                LibUtil::redirecionar('exclusaoSucesso.php');
        }
    }
    
    
    
    public function cadastrarPerfil() {
        if (isset($_POST['botao_enviar'])) {
            extract($_POST);
            $usuario = new Usuario(login: $login, senha: password_hash($senha, PASSWORD_DEFAULT));
            $idUsuario = (new UsuarioDAO)->inserir($usuario);
            $pessoa = new Pessoa(idUsuario: $idUsuario, nome: $nome, email: $email, 
                                fone: $fone, sexo: $sexo, nascimento: $nascimento, 
                                estado: $estado, semestre: $semestre, descricao: $descricao);
            if ((new PessoaDAO)->inserir($pessoa)) {
                LibUtil::comecarSessao();
                $_SESSION['Transicao'] = true;
                LibUtil::redirecionar('cadastroSucesso.php');
            }
        }
    }
    
    
    
    public function autenticarCredenciais() {
        if (isset($_POST['botao_enviar'])) {
            extract($_POST);
            $usuario = new Usuario(login: $login);
            $vetorDadosUsuario = (new UsuarioDAO)->selecionar($usuario);
            if ($vetorDadosUsuario) {
                if (password_verify($senha, $vetorDadosUsuario['senha'])) {
                    LibUtil::comecarSessao();
                    $_SESSION['idUsuario'] = $vetorDadosUsuario['idUsuario'];
                    $_SESSION['Transicao'] = true;
                    LibUtil::redirecionar('loginSucesso.php');
                }
            }
            echo "<script>alert('Senha e/ou login errados ou o usuário não existe.');</script>";
        }
    }



}    

