<?php

include_once '../models/ClienteReserva.php';
include_once '../models/ClienteReservaDao.php';


	$_REQUEST['Salvar'];
    $Salvar = $_REQUEST['Salvar'];


$mensal = new CadMensalista();
$userDao = new ClienteReservaDao(); // instancia da classe dao

switch ($Salvar) {

    case 'Salvar':

      
        $mensal->setNome($_POST['nome']);
        $mensal->setSexo($_POST['sexo']);
        $mensal->setDtn($_POST['dtn']);
        $mensal->setRg($_POST['rg']);
        $mensal->setCpf($_POST['cpf']);


        if ($userDao->inserir($mensal)) {
            $url = 'location: ../views/index.php?op=usuarios&sucesso=ok';
            header($url);
        }
        break;
}
