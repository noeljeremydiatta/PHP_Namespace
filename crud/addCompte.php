<?php
//Création de compte

require_once "../bootstrap.php";

$compte = new Compte();
$compte->setTyco("Courant");
$compte->setAgence("Dakar");
$compte->setRib(1234);
$compte->setNumcompte(567891011);
$compte->setMontant(1500000);
$compte->setSalaire(500000);
$compte->setProfession("Infographiste");
$compte->setFrais(17500);
$compte->setAgios(15000);

$entityManager->persist($compte);
$entityManager->flush();


echo $compte->getId();

?>