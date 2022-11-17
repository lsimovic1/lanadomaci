<?php

require "../../DB.php";
$db = new DB('biblioteka');

$kolona = $_POST['kolona'];
$sort = $_POST['sort'];
?>


<table class="table table-bordered mt-2">
    <thead>
        <tr class="text-center">
            <th id="id" name="<?php if ($kolona == 'id' && $sort == 'asc') {
                                    echo 'desc';
                                } else {
                                    echo 'asc';
                                } ?>">ID</th>
            <th id="delo" name="<?php if ($kolona == 'delo' && $sort == 'asc') {
                                    echo 'desc';
                                } else {
                                    echo 'asc';
                                } ?>">Delo</th>
            <th id="autor" name="<?php if ($kolona == 'autor' && $sort == 'asc') {
                                        echo 'desc';
                                    } else {
                                        echo 'asc';
                                    } ?>">Autor</th>
            <th id="naziv" name="<?php if ($kolona == 'naziv' && $sort == 'asc') {
                                            echo 'desc';
                                        } else {
                                            echo 'asc';
                                        } ?>">Biblioteka</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $query = "select k.id, k.delo, k.autor, b.naziv from knjige k join biblioteke b on k.biblioteka_id=b.id
         order by " . $kolona . " " . $sort . "";

        $data = $db->connection->query($query);

        while ($row = $data->fetch_object()) :
        ?>
            <tr class=" text-center">
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->delo;  ?></td>
                <td><?php echo $row->autor;  ?></td>
                <td><?php echo $row->naziv; ?></td>

            </tr>
        <?php endwhile; ?>

    </tbody>


</table>