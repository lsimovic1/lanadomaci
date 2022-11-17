<?php

require "../../DB.php";
$db = new DB('biblioteka');
?>

<table class="table table-bordered mt-2">
    <thead>
        <tr class="text-center">
            <th id="id" name="asc">ID</th>
            <th id="ime" name="asc">Delo</th>
            <th id="prezime" name="asc">Autor</th>
            <th id="naziv" name="asc">Biblioteka</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $query = "select k.id, k.delo, k.autor, b.naziv from knjige k join biblioteke b on k.biblioteka_id=b.id order by k.id asc";
        $data = $db->connection->query($query);

        while ($row = $data->fetch_object()) :
        ?>
            <tr class="text-center">
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->delo;  ?></td>
                <td><?php echo $row->autor;  ?></td>
                <td><?php echo $row->naziv; ?></td>
            </tr>
        <?php endwhile; ?>

    </tbody>
</table>