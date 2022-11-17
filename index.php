<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Početna</title>
</head>

<body>

    <div class="container">

        <h1>Dobrodošli!</br>Biblioteke u Republici Srbiji na jednom mestu!</h1>

        <div class="knjigediv">
            <a href="knjige/index.php"><button class="btn btn-primary" id="crudknjige">Knjige</button></a>
            <a href="knjige/pretraga/pretraga.php"><button class="btn btn-success" id="pretragaknjige">Pretraga knjige</button></a>
            <a href="knjige/sortiranje/sortiranje.php"><button class="btn btn-info" id="sortiranjeknjige">Sortiranje knjiga</button></a>
            <a href="knjige/index.php"><button class="btn btn-danger" id="crudbiblioteke">Biblioteke</button></a>
        </div>

    </div>

</body>

</html>