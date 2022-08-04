<?php
class Usuario {
    /* atributos do usuário */

    private $id;
    private $nome;
    private $user;
    private $senha;
    private $permissao;
    private $contato;
    private $sexo;
    private $dtn;
    private $cpf;


    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getUser() {
        return $this->user;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getPermissao() {
        return $this->permissao;
    }

    public function getContato() {
        return $this->contato;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getDtn() {
        return $this->dtn;
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

    public function setUser($user) {
        $this->user = $user;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setPermissao($permissao) {
        $this->permissao = $permissao;
    }

    public function setContato($contato) {
        $this->contato = $contato;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

     public function setDtn($dtn) {
        $this->dtn = $dtn;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }


     
    public function localizar(Usuario $usuario) {
        $usuarioDao = new UsuarioDao();
        if ($usuario = $usuarioDao->localizar($user)){
            return $usuario;
        }else {
            return null;
        }
    }
    
    function __construct() {
        
    }

}