<?php
include_once '../controller/controller.php';



Class Pessoa {



    public function __construct(
        private $idPessoa = null, 
        private $idUsuario = null, 
        private $nome = null, 
        private $email = null, 
        private $fone = null, 
        private $sexo = null, 
        private $nascimento = null, 
        private $estado = null, 
        private $semestre = null, 
        private $descricao = null
    ) {}



    public function inserir() {
        $conexao = conectar();
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
            '".$this->idUsuario."',
            '".$this->nome."',
            '".$this->email."',
            '".$this->fone."',
            '".$this->sexo."',
            '".$this->nascimento."',
            '".$this->estado."',
            '".$this->semestre."',
            '".$this->descricao."'
        )";
        $resultadoDaSolicitacao = $conexao->query($sql);
        $conexao->close();
        return $resultadoDaSolicitacao;
    }
    
    

    public function selecionar() {
        $conexao = conectar();
        $sql = "SELECT * 
                FROM pessoa 
                WHERE idUsuario = '".$this->idUsuario."'";
        $solicitacaoSqlExecutadaComSucesso = $conexao->query($sql);
        $conexao->close();
        if ($solicitacaoSqlExecutadaComSucesso) { 
            return $solicitacaoSqlExecutadaComSucesso->fetch_array();
        }
    }



    public function deletar() {
        $conexao = conectar();
        $sql = "DELETE 
                FROM pessoa
                WHERE idUsuario = '".$this->idUsuario."'";
        $resultadoDaSolicitacao = $conexao->query($sql);
        $conexao->close();
        return $resultadoDaSolicitacao;
    }

    
    
}