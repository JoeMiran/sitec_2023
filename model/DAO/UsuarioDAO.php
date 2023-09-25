<?php
include_once 'DAO.php';



Class UsuarioDAO extends DAO{



    public function inserir($usuario) {
        $conexao = $this->conectar();
        $sql = "INSERT INTO usuario (
            login,
            senha
        ) VALUES (
            '".$usuario->login."',
            '".$usuario->senha."'
        )";
        $conexao->query($sql);
        $idUsuario = $conexao->insert_id;
        $conexao->close();
        return $idUsuario;
    }
    
    
    
    public function selecionar($usuario) {
        $conexao = $this->conectar();
        $sql = "SELECT * 
                FROM usuario
                WHERE login = '".$usuario->login."'";
        $solicitacaoSqlExecutadaComSucesso = $conexao->query($sql);
        $conexao->close();
        if ($solicitacaoSqlExecutadaComSucesso) {
            return $solicitacaoSqlExecutadaComSucesso->fetch_array();
        }
    }
    
    
    
    public function deletar($usuario) {
        $conexao = $this->conectar();
        $sql = "DELETE 
                FROM usuario
                WHERE idUsuario = ".$usuario->idUsuario."";
        $resultadoDaSolicitacao = $conexao->query($sql);
        $conexao->close();
        return $resultadoDaSolicitacao;
    }




}