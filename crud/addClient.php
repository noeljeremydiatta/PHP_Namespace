<?php
//Création d'un nouveau client

require_once "../bootstrap.php";

$client = new Client();
$client->setStacli("nouveau");
$client->setTypecli("physique");
$client->setNom("DIATTA");
$client->setPrenom("NOEL JEREMY");
$client->setAdresse("Nord Foire");
$client->setEmail("jeremydiatta@gmail.com");
$client->setTelephone("+221772860551");
$client->setNomem("EFD TECH");
$client->setRaison("Prestations info");
$client->setAdem("VDN");

$entityManager->persist($client);
$entityManager->flush();

echo $client->getId_client();

?>