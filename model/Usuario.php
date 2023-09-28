<?php



Class Usuario {



    public function __construct(private $login = null, private $senha = null) {}



    public function conectar() {
        $conexao = new mysqli('localhost', 'root', '', 'sitec_2023');
    
        if ($conexao->connect_error)
            exit("Falha na conexão: ".$conexao->connect_error);
        else
            return $conexao;
    }



    public function selecionarPerfil(){
        $conexao = $this->conectar();
        $sql = "SELECT * 
                FROM usuario
                WHERE login = '".$this->login."'";
        $resultado = $conexao->query($sql);
        $conexao->close();
        $perfil = $resultado->fetch_array();
        return $perfil;
    }
    


    public function cadastrarPerfil(){
        $conexao = $this->conectar();
        $sql = "INSERT INTO usuario (
            login,
            senha
        ) VALUES (
            '".$this->login."',
            '".$this->senha."'
        )";
        $conexao->query($sql);
        $conexao->close();
    }



}