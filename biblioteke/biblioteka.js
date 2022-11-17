$(document).ready(function () {
    prikaziBiblioteke();
   
});


function prikaziBiblioteke() {

    $.ajax(
        {
            url: 'crud/prikaz.php',
            success: function (data) {
                {
                    $('#tabelaBiblioteka').html(data);
                }
            }
        }
    )
}
