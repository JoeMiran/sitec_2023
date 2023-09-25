<?php
include_once '../config/Config.php';



abstract Class DAO{



    abstract protected function inserir($dto);
    abstract protected function selecionar($dto);
    abstract protected function atualizar($dto);
    abstract protected function deletar($dto);



    public function conectar() {
        $conexao = new mysqli(Config::$nomeDoServidor, Config::$nomeDoUsuario, 
                            Config::$senha, Config::$nomeDoBancoDeDados);
        if ($conexao->connect_error)
            exit("Falha na conexão: ".$conexao->connect_error);
        else
            return $conexao;
    }



}