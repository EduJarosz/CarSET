<?php

include_once '../models/EntradaAvulso.php';
include_once '../models/EntradaAvulsoDao.php';


	$_REQUEST['salvar'];
    $salvar = $_REQUEST['salvar'];


$entrada = new EntradaAvulso();
$avulsoDao = new EntradaAvulsoDao(); // instancia da classe dao

switch ($salvar) {

    case 'Salvar':
        $entrada->setVagaId($_POST['vagaId']);

        $entrada->setCliente($_POST['cliente']);
        $entrada->setCpf($_POST['cpf']);
        $entrada->setContato($_POST['tel']);
        $entrada->setSexo($_POST['sexo']);


        $entrada->setModelo($_POST['modelo']);
        $entrada->setFabricante($_POST['fabr']);
        $entrada->setPlaca($_POST['placa']);
        $entrada->setData($_POST['datae']);
        $entrada->setHora($_POST['horae']);


        if ($avulsoDao->inserir($entrada)) {
            $url = 'location: ../views/index.php?op=usuarios&sucesso=ok';
            header($url);
        }
        break;
}
