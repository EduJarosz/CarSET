<?php

include_once '../models/conexao.php';
include_once '../models/CadastroFuncionario.php';

class CadastroFuncionarioDao {

    public static $instance;

    public function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new CadastroFuncionarioDao();

        return self::$instance;
    }

    /* cadastrar usuario */
    public function inserir(CadastroFuncionario $user) {
        
        $sql = "INSERT INTO funcionario (fun_nome, fun_sexo, fun_dtn, fun_rg, fun_cpf, fun_cargo) VALUES (:fun_nome,:fun_sexo,:fun_dtn,:fun_rg,:fun_cpf,:fun_cargo)";
        $rs = Conexao::getInstance()->prepare($sql);
        $rs->bindValue(":fun_nome", $user->getNome());
        $rs->bindValue(":fun_sexo", $user->getSexo());
        $rs->bindValue(":fun_dtn", $user->getDtn());
        $rs->bindValue(":fun_rg", $user->getRg());
        $rs->bindValue(":fun_cpf", $user->getCpf());
        $rs->bindValue(":fun_cargo", $user->getCargo());        

        
        if ($rs->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
