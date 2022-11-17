<?php

require '../../DB.php';
require '../Knjiga.php';
$db = new DB('biblioteka');

$knjiga = new Knjiga();
$knjiga->delo = $_POST['delo'];
$knjiga->autor = $_POST['autor'];
$knjiga->biblioteka_id = $_POST['biblioteka'];

$query = "insert into knjige (delo, autor, biblioteka_id) 
    values ('$knjiga->delo', '$knjiga->autor',  '$knjiga->biblioteka_id')";

if ($db->connection->query($query)) {
    echo "Knjiga je uspešno sačuvan!";
} else {
    echo "Došlo je do greške! Knjiga nije sačuvan!";
}