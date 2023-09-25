<?php



Class Pessoa{


    public function __construct(
        public $idPessoa = null, 
        public $idUsuario = null, 
        public $nome = null,
        public $email = null, 
        public $fone = null, 
        public $sexo = null,
        public $nascimento = null, 
        public $estado = null,
        public $semestre = null, 
        public $descricao = null
    ) {}



}