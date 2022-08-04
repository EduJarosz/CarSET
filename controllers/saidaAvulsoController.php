<?php

include_once '../models/SaidaAvulso.php';
include_once '../models/SaidaAvulsoDao.php';


	$_REQUEST['salvar'];
    $salvar = $_REQUEST['salvar'];


$saida = new SaidaAvulso();
$avulsoDao = new SaidaAvulsoDao(); // instancia da classe dao

switch ($salvar) {

    case 'Salvar':

        $saida->setVagaId($_POST['vagaId']);
        $saida->setData($_POST['datas']);
        $saida->setHora($_POST['horas']);
        
    
        if ($avulsoDao->inserir($saida)) {
            $url = 'location: ../views/caixa.php?op=usuarios&sucesso=ok';
            header($url);
        }

        break;

}