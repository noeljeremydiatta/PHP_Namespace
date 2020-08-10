<?php
namespace src\controller;
use libs\system\Controller;
use src\model\CompteDb;

class CompteController extends Controller
{
    public function add()
    {
        return $this->view->load("comptes/add");
    }
    public function getAll()
    {
        $comptes_dao = new CompteDb();
        $comptes = $comptes_dao->findAll();
        return $this->view->load("comptes/getAll", $comptes);
    }
}

?>