<?php
require '../../DB.php';

$db = new DB('biblioteka');

$naziv = $_POST['naziv'];
$adresa = $_POST['adresa'];
$broj_knjiga = $_POST['broj_knjiga'];

$query = "insert into biblioteke (naziv, adresa, broj_knjiga)
values ('$naziv', '$adresa', '$broj_knjiga')";

if ($db->connection->query($query)) {
    echo "Biblioteka je uspešno sačuvana!";
} else {
    echo "Došlo je do greške! Biblioteka nije sačuvana!";
}
