<?php

require '../../DB.php';
require '../Knjiga.php';
$db = new DB('biblioteka');

$id = $_POST['id'];

$query = "select * from knjige where id=" . $id;
$data = $db->connection->query($query);

while ($row = $data->fetch_object()) {
    $knjiga = new Knjiga();
    $knjiga->id = $row->id;
    $knjiga->delo = $row->delo;
    $knjiga->autor = $row->autor;
    $knjiga->biblioteka_id = $row->biblioteka_id;
}

echo json_encode($knjiga);
