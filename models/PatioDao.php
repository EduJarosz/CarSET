<?php
	
	include_once 'conexao.php';
	include_once 'Patio.php';


class PatioDao{


	public function __construct() {

	}


	public function listar(){
		// SQL para selecionar os registros
		//$sql_mod = "SELECT   mod_nome FROM modelo ";
	  $sql_mod = "SELECT * FROM vaga LEFT JOIN patio ON (vaga.vag_numero = patio.pat_vag_id) AND (patio.pat_del != '*') LEFT JOIN veiculo ON (veiculo.vei_id = patio.pat_vei_id)";
	  			  

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
				$p->setVagnumero($row->vag_numero);
				$p->setEnthora($row->pat_ent_hora);
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