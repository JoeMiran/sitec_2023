<?php
include_once 'DAO.php';



Class PessoaDAO extends DAO{



    public function inserir($pessoa) {
        $conexao = $this->conectar();
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
            '".$pessoa->idUsuario."',
            '".$pessoa->nome."',
            '".$pessoa->email."',
            '".$pessoa->fone."',
            '".$pessoa->sexo."',
            '".$pessoa->nascimento."',
            '".$pessoa->estado."',
            '".$pessoa->semestre."',
            '".$pessoa->descricao."'
        )";
        $resultadoDaSolicitacao = $conexao->query($sql);
        $conexao->close();
        return $resultadoDaSolicitacao;
    }
    
    

    public function selecionar($pessoa) {
        $conexao = $this->conectar();
        $sql = "SELECT * 
                FROM pessoa 
                WHERE idUsuario = '".$pessoa->idUsuario."'";
        $solicitacaoSqlExecutadaComSucesso = $conexao->query($sql);
        $conexao->close();
        if ($solicitacaoSqlExecutadaComSucesso) { 
            return $solicitacaoSqlExecutadaComSucesso->fetch_array();
        }
    }



    public function deletar($pessoa) {
        $conexao = $this->conectar();
        $sql = "DELETE 
                FROM pessoa
                WHERE idUsuario = '".$pessoa->idUsuario."'";
        $resultadoDaSolicitacao = $conexao->query($sql);
        $conexao->close();
        return $resultadoDaSolicitacao;
    }

    

}