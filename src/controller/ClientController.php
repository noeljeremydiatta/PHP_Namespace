<?php
namespace src\controller;
use libs\system\Controller;
use src\model\ClientDb;

class ClientController extends Controller
{
    public function add()
    {
        return $this->view->load("clients/add");
    }
    public function getAll()
    {
        $clients_dao = new ClientDb();
        $clients = $clients_dao->findAll();
        return $this->view->load("clients/getAll", $clients);
    }
}

?>