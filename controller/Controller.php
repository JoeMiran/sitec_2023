<?php
include_once '../model/Usuario.php';



Class Controller {
    
    
    
    function redirecionar($pagina) {
        echo "<script>location.href='".$pagina."';</script>";
        exit();
    }
    
    
    
    function sairPerfil(){
        session_start();
        $_SESSION = array();
        $this->redirecionar('login.php');
    }
    
    
        
    function consultarPerfil() {
        session_start();
        $login = $_SESSION['login'];
        $perfil = (new Usuario(login: $login))->selecionarPerfil();
        return $perfil;
    }
    
    
    
    function cadastrarPerfil() {
        if (isset($_POST['botao_enviar'])) {
            extract($_POST);
            (new Usuario(login: $login, senha: $senha))->cadastrarPerfil();
            $this->redirecionar('login.php');
        }
    }
    
    
    
    function autenticarCredenciais() {
        if (isset($_POST['botao_enviar'])) {
            extract($_POST);
            $perfil = (new Usuario(login: $login))->selecionarPerfil();
            if ($perfil['senha'] == $senha) {
                session_start();
                $_SESSION['login'] = $login;
                $this->redirecionar('inicio.php');
            }
        }
    }



}