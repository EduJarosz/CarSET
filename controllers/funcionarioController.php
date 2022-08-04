<?php

include_once '../models/CadastroFuncionario.php';
include_once '../models/CadastroFuncionarioDao.php';


	$_REQUEST['Salvar'];
    $Salvar = $_REQUEST['Salvar'];


$func = new CadastroFuncionario();
$funcDao = new CadastroFuncionarioDao(); // instancia da classe dao

switch ($Salvar) {

    case 'Salvar':

      
        $func->setNome($_POST['nome']);
        $func->setSexo($_POST['sexo']);
        $func->setDtn($_POST['dtn']);
        $func->setRg($_POST['rg']);
        $func->setCpf($_POST['cpf']);
        $func->setCargo($_POST['cargo']);


        if ($funcDao->inserir($func)) {
            $url = 'location: ../views/index.php?op=usuarios&sucesso=ok';
            header($url);
        }
        break;
}
