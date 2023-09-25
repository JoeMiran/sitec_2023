<?php
include_once '../controller/controller.php';



Class Usuario {



    public function __construct(
        private $idUsuario = null, 
        private $login = null, 
        private $senha = null
    ) {}



    function inserir() {
        $conexao = conectar();
        $sql = "INSERT INTO usuario (
            login,
            senha
        ) VALUES (
            '".$this->login."',
            '".$this->senha."'
        )";
        $conexao->query($sql);
        $idUsuario = $conexao->insert_id;
        $conexao->close();
        return $idUsuario;
    }
    
    
    
    function selecionar() {
        $conexao = conectar();
        $sql = "SELECT * 
                FROM usuario
                WHERE login = '".$this->login."'";
        $solicitacaoSqlExecutadaComSucesso = $conexao->query($sql);
        $conexao->close();
        if ($solicitacaoSqlExecutadaComSucesso) {
            return $solicitacaoSqlExecutadaComSucesso->fetch_array();
        }
    }
    
    
    
    function deletar() {
        $conexao = conectar();
        $sql = "DELETE 
                FROM usuario
                WHERE idUsuario = ".$this->idUsuario."";
        $resultadoDaSolicitacao = $conexao->query($sql);
        $conexao->close();
        return $resultadoDaSolicitacao;
    }


}