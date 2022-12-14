<?php

class Conexao {

    private $con;
    public static $instance;

    public function __construct() {
        //$this->conectar();
    }
	/* exemplo1 */
    public function conectar() {
        $host = 'localhost';
        $banco = 'car_set';
        $user = 'root';
        $senha = '';
        try {
            $this->con = new PDO("mysql:host=" . $host . ";dbname=" . $banco . "", "" . $user . "", "" . $senha . "");
        } catch (Exception $ex) {
            print_r($ex);
        }
        return $this->con;
    }
	/* exemplo2 */
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=car_set', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }

        return self::$instance;
    }

}
