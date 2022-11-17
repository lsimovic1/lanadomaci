<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../index.css">
    <title>Biblioteke</title>
</head>

<body>

    <?php
    include('../DB.php');
    $db = new DB('biblioteka');
    ?>

    <div class="container">
        <div class="grupa">
            <button id="dodajBiblioteku" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#novaBiblioteka" style="width:250px; margin-left:450px;">Nova kompanija</button>

            <div class="alert alert-success collapse text-center" role="alert" id="uspesnoObrisan">

            </div>

            <div id="tabelaBiblioteka">
            </div>
        </div>


        <div class="modal fade" id="novaBiblioteka" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="padding-left: 180px;">Biblioteka</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger collapse text-center" role="alert" id="praznaPolja">
                            Sva polja moraju biti popunjena!
                        </div>

                        <div class="alert alert-success collapse text-center" role="alert" id="uspesnoSacuvan">
                        </div>

                        <div class="mb-2">
                            <label for="addnaziv" class="form-label">Naziv: </label>
                            <input type="text" class="form-control" id="addnaziv">
                        </div>
                        <div class="mb-2">
                            <label for="addadresa" class="form-label">Adresa: </label>
                            <input type="text" class="form-control" id="addadresa">
                        </div>
                        <div class="mb-2">
                            <label for="addbroj_knjiga" class="form-label">Broj knjiga: </label>
                            <input type="number" class="form-control" id="addbroj_knjiga">
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btn_save" class="btn btn-primary" style="margin-right:170px;">Sacuvaj</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


 





    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="biblioteka.js"></script>

</body>

</html>