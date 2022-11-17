<?php

require "../../DB.php";
$db = new DB('biblioteka');
?>

<table class="table table-bordered mt-2" table style="background-color:white">
    <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Delo</th>
            <th>Autor</th>
            <th>Biblioteka</th>
            <th>Operacije</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $query = "select k.id, k.delo, k.autor, b.naziv from biblioteke b join knjige k on k.biblioteka_id=b.id
                         order by k.id asc";
        $data = $db->connection->query($query);

        while ($row = $data->fetch_object()) :
        ?>
            <tr class="text-center">
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->delo;  ?></td>
                <td><?php echo $row->autor;  ?></td>
                <td><?php echo $row->naziv; ?></td>
                <td>
                    <button class="btn btn-primary" id="btn_edit" value="<?php echo $row->id; ?>">Izmeni</button>
                    <button class="btn btn-danger" id="btn_delete" value="<?php echo $row->id; ?>">Obriši</button>
                </td>
            </tr>
        <?php endwhile; ?>

    </tbody>


</table>