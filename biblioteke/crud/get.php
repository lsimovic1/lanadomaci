<?php

require '../../DB.php';
require '../Biblioteka.php';
$db = new DB('biblioteka');

$id = $_POST['id'];

$query = "select * from biblioteke where id=" . $id;
$data = $db->connection->query($query);

while ($row = $data->fetch_object()) {
    $biblioteka = new Biblioteka();
    $biblioteka->id = $row->id;
    $biblioteka->naziv = $row->naziv;
    $biblioteka->adresa = $row->adresa;
    $biblioteka->broj_knjiga = $row->broj_knjiga;
}

echo json_encode($biblioteka);
