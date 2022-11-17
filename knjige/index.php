<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../index.css">
    <title>Knjige</title>
</head>

<body>

    <?php
    include('../DB.php');
    $db = new DB('biblioteka');
    ?>

    <div class="container">
        <div class="grupa">
            <button id="dodajKnjigu" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#noviKnjiga" style="width:250px; ">Nova knjiga</button>

            <div class="alert alert-success collapse text-center" role="alert" id="uspesnoObrisan">

            </div>

            <div id="tabelaKnjige">
            </div>
        </div>


        <div class="modal fade" id="noviKnjiga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="padding-left: 180px;">Knjiga</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger collapse text-center" role="alert" id="praznaPolja">
                            Sva polja moraju biti popunjena!
                        </div>

                        <div class="alert alert-success collapse text-center" role="alert" id="uspesnoSacuvan">
                        </div>

                        <div class="mb-2">
                            <label for="adddelo" class="form-label">Delo: </label>
                            <input type="text" class="form-control" id="adddelo">
                        </div>
                        <div class="mb-2">
                            <label for="addautor" class="form-label">Autor: </label>
                            <input type="text" class="form-control" id="addautor">
                        </div>
                        <div class="mb-2">
                            <label for="addbiblioteka" class="form-label">Biblioteka: </label>
                            <select name="addbiblioteka" id="addbiblioteka" class="form-select">
                                <?php
                                $query = "select * from biblioteke";
                                $data = $db->connection->query($query);

                                while ($row = $data->fetch_object()) :
                                ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->naziv; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <button type="button" id="btn_save" class="btn btn-primary" style="margin-left: 200px; margin-top: 15px;">Sacuvaj</button>

                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade" id="izmenaKnjige" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="padding-left: 180px;">Knjiga</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="modal-body">
                            <div class="alert alert-danger collapse text-center" role="alert" id="upd_praznaPolja">
                                Sva polja moraju biti popunjena!
                            </div>

                            <div class="alert alert-success collapse text-center" role="alert" id="upd_uspesnoSacuvan">
                            </div>

                            <input type="hidden" id="knjiga_id">

                            <div class="mb-2">
                                <label for="upd_delo" class="form-label">Delo: </label>
                                <input type="text" class="form-control" id="upd_delo">
                            </div>
                            <div class="mb-2">
                                <label for="upd_autor" class="form-label">Autor: </label>
                                <input type="text" class="form-control" id="upd_autor">
                            </div>
                            <div class="mb-2">
                                <label for="upd_biblioteka" class="form-label">Biblioteka: </label>
                                <select name="biblioteka" id="upd_biblioteka" class="form-select">
                                    <?php
                                    $query = "select * from biblioteke";
                                    $data = $db->connection->query($query);

                                    while ($row = $data->fetch_object()) :
                                    ?>
                                        <option value="<?php echo $row->id; ?>"><?php echo $row->naziv; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btn_update" class="btn btn-primary">Sacuvaj izmene</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="knjiga.js"></script>

</body>

</html>