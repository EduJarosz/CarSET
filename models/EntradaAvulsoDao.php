<?php

include_once 'conexao.php';
include_once 'EntradaAvulso.php';


class EntradaAvulsoDao {

    public static $instance;

    public function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new EntradaAvulsoDao();

        return self::$instance;
    }


   
    public function inserir(EntradaAvulso $user) {
        
        $sql = ("INSERT INTO cliente (cli_nome, cli_contato, cli_sexo, cli_cpf) VALUES (:cli_nome, :cli_contato, :cli_sexo, :cli_cpf)");
        $rs = Conexao::getInstance()->prepare($sql);
        $rs->bindValue(":cli_nome", $user->getCliente());
        $rs->bindValue(":cli_cpf", $user->getCpf());
        $rs->bindValue(":cli_contato", $user->getContato());
        $rs->bindValue(":cli_sexo", $user->getSexo());




        if ($rs->execute()) {

            $id =  $rs = Conexao::getInstance()->lastInsertId($sql);

            $sql = ("INSERT INTO  veiculo (vei_placa, vei_cli_id) VALUES (:vei_placa, :vei_cli_id)");
            $prepare = Conexao::getInstance()->prepare($sql);
            $prepare->bindValue(':vei_placa', $user->getPlaca());
            $prepare->bindValue(':vei_cli_id', $id);

                        

            if ($prepare->execute()) {

                $id =  $rs = Conexao::getInstance()->lastInsertId($sql);

                $sql = ("INSERT INTO  patio (pat_vag_id, pat_ent_data, pat_ent_hora, pat_vei_id) VALUES (:pat_vag_id, :pat_ent_data, :pat_ent_hora, :pat_vei_id)");
                $prepare = Conexao::getInstance()->prepare($sql);
                $prepare->bindValue(':pat_vag_id', $user->getVagaId());
                $prepare->bindValue(':pat_ent_data', $user->getData());
                $prepare->bindValue(':pat_ent_hora', $user->getHora());
                $prepare->bindValue(':pat_vei_id', $id);

               
                
            }

            if ($prepare->execute()) {
                echo "Permissões gravadas";
            }else{
                echo 'Permissões não gravadas';
                
            }







            return true;
        } else {
            return false;
        }
    }
}