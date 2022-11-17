<?php

require "../../DB.php";
$db = new DB('biblioteka');
?>

<table class="table table-bordered" table style="background-color:white;">
    <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Delo</th>
            <th>Autor</th>
            <th>Biblioteka</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $kljuc = $_POST['key'];

        $query = "select k.id, k.delo, k.autor, b.naziv from knjige k join biblioteke b on k.biblioteka_id=b.id where
         k.id like '%" . $kljuc . "%' or k.delo like '%" . $kljuc . "%' or k.autor like '%" 
             . $kljuc . "%' or b.naziv like '%" . $kljuc . "%'";
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