<?php
require_once "config/autoload.php";
use src\controller\ClientController;
use src\controller\CompteController;
$clients_dao = new src\controller\ClientController();
$clients_dao->add();
$clients_dao->getAll();

$clients_dao = new src\controller\ClientController();
$clients_dao->add();
$clients_dao->getAll();

?>