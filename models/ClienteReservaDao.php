<?php

include_once '../models/conexao.php';
include_once '../models/ClienteReserva.php';

class ClienteReservaDao {

    public static $instance;

    public function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new UsuarioDao();

        return self::$instance;
    }

    /* cadastrar usuario */
    public function inserir(CadMensalista $user) {
        
        $sql = "INSERT INTO cli_reserva (cli_nome, cli_sexo, cli_dtn, cli_rg, cli_cpf) VALUES (:cli_nome,:cli_sexo,:cli_dtn,:cli_rg,:cli_cpf)";
        $rs = Conexao::getInstance()->prepare($sql);
        $rs->bindValue(":cli_nome", $user->getNome());
        $rs->bindValue(":cli_sexo", $user->getSexo());
        $rs->bindValue(":cli_dtn", $user->getDtn());
        $rs->bindValue(":cli_rg", $user->getRg());
        $rs->bindValue(":cli_cpf", $user->getCpf());

        
        if ($rs->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
