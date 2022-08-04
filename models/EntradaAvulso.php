<?php
class EntradaAvulso {
    /* atributos do usuário */

    private $id;
    private $vagaid;

    private $cliente;
    private $cpf;
    private $contato;
    private $sexo;

    
    private $modelo;
    private $fabricante;
    private $placa;

    private $hora;
    private $data;
    

    public function getId() {
        return $this->id;
    }

    public function getVagaId() {
        return $this->vagaid;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getContato() {
        return $this->contato;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function getHora() {
        return $this->hora;
    }

    public function getData() {
        return $this->data;
    }

    public function getSexo() {
        return $this->sexo;
    }








    public function setId($id) {
        $this->id = $id;
    }

    public function setVagaId($vagaid) {
        $this->vagaid = $vagaid;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setContato($contato) {
        $this->contato = $contato;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

     public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }


    public function inserir(EntradaAvulso $user) {
        $entradaAvulsoDao = new EntradaAvulsoDao();
        if ($entrada = $entradaAvulsoDao->inserir($user)){
            return $entrada;
        }else {
            return null;
        }
    }
    
    function __construct() {
        
    }

}