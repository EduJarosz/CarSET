<?php
class CadastroFuncionario {
    /* atributos do usuário */

    private $id;
    private $nome;
    private $sexo;
    private $dtn;
    private $rg;
    private $cpf;
    private $cargo;


    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getDtn() {
        return $this->dtn;
    }

    public function getRg() {
        return $this->rg;
    }

     public function getCpf() {
        return $this->cpf;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setDtn($dtn) {
        $this->dtn = $dtn;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

     public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

     public function setCargo($cargo) {
        $this->cargo = $cargo;
    }    

    public function inserir(CadastroFuncionario $user) {
        $usuarioDao = new CadastroFuncionarioDao();
        if ($func = $usuarioDao->inserir($user)){
            return $func;
        }else {
            return null;
        }
    }
    
    function __construct() {
        
    }

}