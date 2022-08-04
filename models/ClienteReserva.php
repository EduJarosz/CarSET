<?php
class CadMensalista {
    /* atributos do usuário */

    private $id;
    private $nome;
    private $sexo;
    private $dtn;
    private $rg;
    private $cpf;


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

    public function inserir(CadMensalista $user) {
        $usuarioDao = new ClienteReservaDao();
        if ($mensal = $usuarioDao->inserir($user)){
            return $mensal;
        }else {
            return null;
        }
    }
    
    function __construct() {
        
    }

}