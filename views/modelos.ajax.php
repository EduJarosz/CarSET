<?php

include_once'../models/conexao.php';
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );

	

	$fab_id =$_REQUEST['fab_id'];


	$sql = "SELECT * 
			FROM modelo
			WHERE mod_fab_id=$fab_id
			ORDER BY mod_nome";
	
	$res= Conexao::getInstance()->prepare($sql);
	$res->execute();

	while ($row=$res->fetch(PDO::FETCH_ASSOC) ) {
		$modelos[] = array(
			'mod_id'	=> $row['mod_id'],
			'mod_nome'			=> $row['mod_nome'],
		);
	}

	echo( json_encode( $modelos ) );