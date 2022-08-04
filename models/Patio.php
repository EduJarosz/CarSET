<?php
class Patio {
    /* atributos do usuário */

    private $patid;
    private $vagid;
    private $plaid;
    private $veiid;
    private $entdata;
    private $enthora;
    private $saidata;
    private $saihora;
    private $reserva;
    private $vagnumero;
    private $veiplaca;
    private $cli;


    public function getPatid() {
        return $this->patid;
    }

    public function getVagid() {
        return $this->vagid;
    }

    public function getPlaid() {
        return $this->plaid;
    }

    public function getVeiid() {
        return $this->veiid;
    }

    public function getEntdata() {
        return $this->entdata;
    }

    public function getEnthora() {
        return $this->enthora;
    }

    public function getSaidata() {
        return $this->saidata;
    }

    public function getSaihora() {
        return $this->saihora;
    }

    public function getReserva() {
        return $this->reserva;
    }

    public function getVagnumero() {
        return $this->vagnumero;
    }

      public function getVeiplaca() {
        return $this->veiplaca;
    }
    
    public function getCli() {
        return $this->cli;
    }





    public function setPatid($patid) {
        $this->patid = $patid;
    }

    public function setVagid($vagid) {
        $this->vagid = $vagid;
    }

    public function setPlaid($plaid) {
        $this->plaid = $plaid;
    }

    public function setVeiid($veiid) {
        $this->veiid = $veiid;
    }

    public function setEntdata($entdata) {
        $this->entdata = $entdata;
    }

    public function setEnthora($enthora) {
        $this->enthora = $enthora;
    }

    public function setSaidata($saidata) {
        $this->saidata = $saidata;
    }

    public function setSaihora($saihora) {
        $this->saihora = $saihora;
    }

     public function setReserva($reserva) {
        $this->reserva = $reserva;
    }
    
     public function setVagnumero($vagnumero) {
        $this->vagnumero = $vagnumero;
    }

    public function setVeiplaca($veiplaca) {
        $this->veiplaca = $veiplaca;
    }

    public function setCli($cli) {
        $this->cli = $cli;
    }
}
    