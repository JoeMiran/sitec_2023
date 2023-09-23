<?php


Class Backend {
    
    
    
    public static function cadastrarDados() {
        if (isset($_POST['botao_enviar'])) {
            self::validarToken($_POST['token']);
            $idUsuario = self::inserirUsuario();
            if (self::inserirPessoaComIdUsuario($idUsuario)) 
                self::redirecionar('cadastroSucesso.php');
        }
    }
    
    
    
    public static function consultarDados() {
        self::sessionStart();
        return self::selecionarPessoaComIdUsuario($_SESSION['idUsuario']);
    }

    
    
    public static function autenticarUsuario() {
        if (isset($_POST['botao_entrar'])) {
            self::validarToken($_POST['token']);
            extract($_POST);
            $vetorDadosUsuario = self::selecionarUsuarioComLogin($login);
            if ($vetorDadosUsuario) {
                if (password_verify($senha, $vetorDadosUsuario['senha'])) {
                    self::sessionStart();
                    $_SESSION['idUsuario'] = $vetorDadosUsuario['idUsuario'];
                    self::redirecionar('loginSucesso.php');
                }
            }
            echo "<script>alert('Senha e/ou login errados ou o usuário não existe.');</script>";
        }
    }
    


    public static function inserirUsuario() {
        extract($_POST);
        $conexao = self::conectar();
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuario (
            login,
            senha
        ) VALUES (
            '$login',
            '$senhaHash'
        )";
        $conexao->query($sql);
        $idUsuario = $conexao->insert_id;
        $conexao->close();
        return $idUsuario;
    }

 
    
    public static function inserirPessoaComIdUsuario($idUsuario) {
        extract($_POST);
        $conexao = self::conectar();
        $sql = "INSERT INTO pessoa (
            idUsuario,
            nome,
            email,
            fone,
            sexo,
            nascimento,
            estado,
            semestre,
            descricao
        ) VALUES (
            '$idUsuario',
            '$nome',
            '$email',
            '$fone',
            '$sexo',
            '$nascimento',
            '$estado',
            '$semestre',
            '$descricao'
        )";
        $resultadoDaSolicitacao = $conexao->query($sql);
        $conexao->close();
        return $resultadoDaSolicitacao;
    }
    
    

    public static function selecionarPessoaComIdUsuario($idUsuario) {
        $conexao = self::conectar();
        $sql = "SELECT * 
                FROM pessoa 
                WHERE idUsuario = ".$idUsuario."";
        $solicitacaoSqlExecutadaComSucesso = $conexao->query($sql);
        $conexao->close();
        if ($solicitacaoSqlExecutadaComSucesso) { 
            $vetorResultado = $solicitacaoSqlExecutadaComSucesso->fetch_array();
            return $vetorResultado;
        }
    }
    
    
    
    public static function selecionarUsuarioComLogin($login) {
        $conexao = self::conectar();
        $sql = "SELECT * 
                FROM usuario
                WHERE login = '".$login."'";
        $solicitacaoSqlExecutadaComSucesso = $conexao->query($sql);
        $conexao->close();
        if ($solicitacaoSqlExecutadaComSucesso) {
            $vetorResultado = $solicitacaoSqlExecutadaComSucesso->fetch_array();
            return $vetorResultado;
        }
    }
    


    public static function restringirAcessoUsuario() {
        self::sessionStart();
        if (isset($_SESSION['idUsuario']))
            self::redirecionar('inicio.php');
    }
        
        

    public static function restringirAcessoVisitante() {
        self::sessionStart();
        if (! isset($_SESSION['idUsuario'])) 
            self::redirecionar('index.php');
    }



    public static function gerarToken() {
        self::sessionStart();
        $_SESSION['token'] = md5(uniqid(mt_rand(), true));
        echo "<input name='token' value='".$_SESSION['token']."' type= 'hidden'>";
    }



    public static function validarToken($token) {
        self::sessionStart();
        if (! (isset($_SESSION['token']) && $_SESSION['token'] == $token)) {
            header($_SERVER['SERVER_PROTOCOL'].' 405 Method Not Allowed');
            exit;
        }
    }


    
    public static function conectar() {
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
    
    
    
    public static function redirecionar($pagina) {
        echo "<script>location.href='".$pagina."';</script>";
        exit();
    }
    
    
    
    public static function sessionStart() {
        if (session_status() === PHP_SESSION_NONE)
            session_start();
    }
    

     
    public static function atraso($segundos) {
        ob_end_flush();
        flush();
        sleep($segundos);
    }
    
    
        
}    