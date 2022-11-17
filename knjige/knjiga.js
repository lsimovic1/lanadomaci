$(document).ready(function () {
    prikaziKnjige();

});

function prikaziKnjige() {

    $.ajax(
        {
            url: 'crud/prikaz.php',
            success: function (data) {
                {
                    $('#tabelaKnjige').html(data);
                }
            }
        }
    )
}