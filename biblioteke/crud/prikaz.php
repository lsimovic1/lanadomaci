<?php

require "../../DB.php";
$db = new DB('biblioteka');
?>

<table class="table table-bordered mt-2">
    <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Naziv</th>
            <th>Adresa</th>
            <th>Broj knjiga na stanju</th>
            <th>Operacije</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $query = "select * from biblioteke";
        $data = $db->connection->query($query);

        while ($row = $data->fetch_object()) :
        ?>
            <tr class="text-center">
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->naziv;  ?></td>
                <td><?php echo $row->adresa;  ?></td>
                <td><?php echo $row->broj_knjiga;  ?></td>
                <td>
                    <button class="btn btn-primary" id="btn_edit" value="<?php echo $row->id; ?>">Izmeni</button>
                    <button class="btn btn-danger" id="btn_delete" value="<?php echo $row->id; ?>">Obriši</button>
                </td>
            </tr>
        <?php endwhile; ?>

    </tbody>


</table>