<?php
namespace src\model;
use libs\system\Model;


class CompteDb extends Model
{
    public function add()
    {
    ;
    }
    public function findAll()
    {
        return $this->entityManager
                    ->createQuery("SELECT r FROM Compte")
                    ;
    }
    
}

?>
