<?php

require '../../DB.php';
$db = new DB('biblioteka');

$id = $_POST['id'];

$query = "delete from biblioteke where id=" . $id;

if ($db->connection->query($query)) {
    echo 'Biblioteka je uspešno obrisana!';
} else {
    echo 'Došlo je do greške! Biblioteka nije obrisana!';
}