<?php

require '../../DB.php';
$db = new DB('biblioteka');

$id = $_POST['id'];

$query = "delete from knjige where id=" . $id;

if ($db->connection->query($query)) {
    echo 'Knjiga je uspešno obrisan!';
} else {
    echo 'Došlo je do greške! Knjiga nije obrisan!';
}
