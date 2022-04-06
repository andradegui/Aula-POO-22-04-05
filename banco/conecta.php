<?php

require_once(__DIR__ . '/config.php');

class BD extends PDO {

    public function __construct(string $db_dsn, string $db_user, string $db_pass){
        /*
        Posso controlar os dados passados 
        por parâmetros ou fazer qualquer outra coisa
        */ 

        parent::__construct($db_dsn, $db_user, $db_pass);


    }
}

$bd = new BD($bd_dsn, $bd_user, $bd_pass);



