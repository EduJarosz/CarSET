<?php

include_once 'conexao.php';
include_once 'SaidaAvulso.php';
include_once 'Patio.php';

class SaidaAvulsoDao {

    public static $instance;

    public function __construct() {

        
    }

  
    public function inserir(SaidaAvulso $user) {

        $vagaId = $_REQUEST["vagaId"];
        
        $sql = "UPDATE patio SET pat_sai_data = :pat_sai_data WHERE pat_vag_id = $vagaId";

        //UPDATE patio SET pat_vag_id=1, pat_pla_id=1, pat_vei_id=1, pat_ent_data=1, pat_ent_hora=1, pat_sai_data=1, pat_sai_hora=1, pat_reserva=1, pat_del=1 WHERE 1

        $rs = Conexao::getInstance()->prepare($sql);
        $rs->bindValue(":pat_sai_data", $user->getData());
       
        

        if ($rs->execute()) {

        	$sql = "UPDATE patio SET pat_sai_hora = :pat_sai_hora WHERE pat_vag_id = $vagaId";

        	$rs = Conexao::getInstance()->prepare($sql);
        	$rs->bindValue(":pat_sai_hora", $user->getHora());
        	

        	if($rs->execute()) {

        		$sql = "UPDATE patio SET pat_del = :pat_del WHERE pat_vag_id = $vagaId";

        		$rs = Conexao::getInstance()->prepare($sql);
	        	$rs->bindValue(":pat_del", $user = "*");

                $rs->execute();


        	}
            return true;
        } else {
            return false;
        }


    }




                    public function listar(){

                        // SQL para selecionar os registros
                        //$sql_mod = "SELECT   mod_nome FROM modelo ";
                      $sql_mod = "SELECT * FROM patio LEFT JOIN cliente ON (cliente.cli_nome = patio.pat_cli_id) LEFT JOIN veiculo ON (veiculo.vei_id = patio.pat_vei_id) WHERE (patio.pat_vag_id = 1)";
                                  

                        /* "SELECT * FROM patio INNER JOIN vaga ON (patio.vag_numero = vaga.vag_numero) INNER JOIN veiculo ON (patio.vei_placa = veiculo.vei_placa)"; */
                    
                        // seleciona os registros
                        $res= Conexao::getInstance()->prepare($sql_mod);
                        
                        if($res->execute()){

                            $lista = array();
                            $cont = 0;
                            while($row = $res->fetch(PDO::FETCH_OBJ)){
                                /*ECHO "<PRE>";
                                print_r($row);*/

                                $p = new Patio();
                                $p->setCli($row->cli_nome);
                                $p->setEnthora($row->pat_ent_hora);
                                $p->setSaihora($row->pat_sai_hora);
                                $p->setVeiplaca($row->vei_placa);

                                $lista[$cont] = $p;
                                $cont++;

                            }

                            return $lista;

                        }else{
                            echo "erro";

                        }
                    
        }










}