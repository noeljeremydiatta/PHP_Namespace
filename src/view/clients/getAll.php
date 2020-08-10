<?php
//print_r ($data);
foreach($data as $client)
{
    echo $client->getId_client(),"".$client->getNom."<br/>";
}

?>