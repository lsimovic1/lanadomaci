<?php

require('../../DB.php');
require('../Biblioteka.php');
$db = new DB('biblioteka');

$biblioteka = new Biblioteka();
$biblioteka->id = $_POST['id'];
$biblioteka->naziv = $_POST['naziv'];
$biblioteka->adresa = $_POST['adresa'];
$biblioteka->broj_knjiga = $_POST['broj_knjiga'];

$query = "update biblioteke set naziv='$biblioteka->naziv', adresa='$biblioteka->adresa', 
                broj_knjiga='$biblioteka->broj_knjiga' where id=$biblioteka->id";
$db->connection->query($query);

if ($db) {
    echo 'Biblioteka je uspešno izmenjena!';
} else {
    echo 'Došlo je do greške! Biblioteka nije izmenjena!';
}