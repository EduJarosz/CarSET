<?php
class SaidaAvulso {
    /* atributos do usuário */

    private $id;
    private $vagaId;
    private $cpf;
    private $placa;
    private $hora;
    private $data;
    private $cli;

    public function getId() {
        return $this->id;
    }

    public function getVagaId() {
        return $this->vagaId;
    }

    public function getCpf() {
        return $this->cpf;
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

    public function getCli() {
        return $this->cli;
    }





    public function setId($id) {
        $this->id = $id;
    }

    public function setVagaId($vagaId) {
        $this->vagaId = $vagaId;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
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

    public function setCli($cli) {
        $this->cli = $cli;
    }

    
}