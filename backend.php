<?php

Class Backend {
    public static function conectar() {
        // Configuração e conexão ao servidor e banco de dados.

        $nomeDoServidor = "localhost";
        $nomeDoUsuario = "root";
        $senha = "";
        $nomeDoBancoDeDados = "sitec_2023";
        $conexao = new mysqli($nomeDoServidor, $nomeDoUsuario, $senha, $nomeDoBancoDeDados);
        if ($conexao->connect_error)
            die("Falha na conexão: " . $conexao->connect_error);
        else
            return $conexao;
    }


    public static function sessionStart() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function restringirAcessoUsuario() {
        self::sessionStart();
        if (isset($_SESSION['idUsuario'])) {
            echo "<script>location.href='inicio.php';</script>";
            exit();
        }
    }

    public static function restringirAcessoVisitante() {
        self::sessionStart();
        if (! isset($_SESSION['idUsuario'])) {
            echo "<script>location.href='index.php';</script>";
            exit();
        }
    }

    public static function autenticar() {
        if (isset($_POST['botao_entrar'])) {
            $conexao = self::conectar();
            extract($_POST);

            $sql_busca = "SELECT * FROM usuario
                WHERE
                login = '$login'
            ";
            
            $resultadoSolicitacaoSqlBusca = $conexao->query($sql_busca);
            if ($resultadoSolicitacaoSqlBusca == true) {
                $vetorResultadoBusca = $resultadoSolicitacaoSqlBusca->fetch_array();
                $senha_hash = $vetorResultadoBusca['senha'];
                $senhaCorreta = password_verify($senha, $senha_hash);
                if ($senhaCorreta == true) {

                    $idUsuario = $vetorResultadoBusca['idUsuario'];
                    self::sessionStart();
                    $_SESSION['idUsuario'] = $idUsuario;

                    echo "Seja bem vindo!";
                    echo "<script>location.href='consulta.php';</script>";
                    exit();
                }
            }
        }
    }

    public static function salvar() {
        // Persistência dos dados do formulário no banco de dados.

        if (isset($_POST['botao_enviar'])) {
            $conexao = self::conectar();
        
            
            
            // Extração das informações do formulário para variáveis.
            
            extract($_POST);
            // $nome = $_POST['nome']; //Equivalentes.
            // $login = $_POST['login'];
            // $senha = $_POST['senha'];
        

        
            // Definição e execução da solicitação SQL (Tabela Usuario).
        
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
            $sql_usuario = "INSERT INTO usuario (
                login,
                senha
            ) VALUES (
                '$login',
                '$senha_hash'
            )";
            $solicitacaoSqlUsuarioExecutadaComSucesso = $conexao->query($sql_usuario);
            
        
        
            // Definição e execução da solicitação SQL (Tabela Pessoa).
        
            $idUsuario = $conexao->insert_id;
            $sql_pessoa = "INSERT INTO pessoa (
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
            $solicitacaoSqlPessoaExecutadaComSucesso = $conexao->query($sql_pessoa);
        
        
        
            // Exibição do resultado das solicitações e redirecionamento para consulta.
            
            if (($solicitacaoSqlUsuarioExecutadaComSucesso && $solicitacaoSqlPessoaExecutadaComSucesso) == true) {
                echo "Cadastro realizado com sucesso! Você será redirecionado para a página de login.";
                echo "<script>location.href='consulta.php';</script>";
                ob_end_flush();
                flush();
                usleep(1500000);
                exit();
            } else
                echo "Erro na inserção dos dados': " . $conexao->error;
            
        

            $conexao->close();
        }
    }

    public static function buscar() {
        $conexao = self::conectar();
        self::sessionStart();
        $idUsuario = $_SESSION['idUsuario'];

        $sql_busca = "SELECT * FROM pessoa WHERE idUsuario = '$idUsuario'";
        $solicitacaoSqlBuscaExecutadaComSucesso = $conexao->query($sql_busca);
        $vetorResultadoBusca = $solicitacaoSqlBuscaExecutadaComSucesso->fetch_array();
        return $vetorResultadoBusca;
    }
}
