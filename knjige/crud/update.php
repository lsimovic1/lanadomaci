<?php

require('../../DB.php');
require('../Knjiga.php');
$db = new DB('biblioteka');

$knjiga = new Knjiga();
$knjiga->id = $_POST['id'];
$knjiga->delo = $_POST['delo'];
$knjiga->autor = $_POST['autor'];
$knjiga->biblioteka_id = $_POST['biblioteka'];

$query = "update knjige set delo='$knjiga->delo', autor='$knjiga->autor',
            biblioteka_id='$knjiga->biblioteka_id' where id=$knjiga->id";
$db->connection->query($query);

if ($db) {
    echo 'Knjiga je uspešno izmenjen!';
} else {
    echo 'Došlo je do greške! Knjiga nije izmenjen!';
}
