$(document).ready(function () {
    prikaziBiblioteke();
    dodajBiblioteku();

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

function dodajBiblioteku() {

    $(document).on('click', '#btn_save', function () {

        var naziv = $('#addnaziv').val();
        var adresa = $('#addadresa').val();
        var broj_knjiga = $('#addbroj_knjiga').val();


        if (naziv == '' || adresa == '' || broj_knjiga == '') {
            $('#praznaPolja').slideDown().delay(1500).fadeOut('slow');
        }
        else {
            $.ajax(
                {
                    url: 'crud/save.php',
                    method: 'post',
                    data: { naziv: naziv, adresa: adresa, broj_knjiga: broj_knjiga },

                    success: function (data) {
                        $('#praznaPolja').hide();
                        $('#uspesnoSacuvan').fadeIn().html(data).delay(1800).fadeOut('slow');

                        prikaziBiblioteke();

                        $('#addnaziv').val('');
                        $('#addadresa').val('');
                        $('#addbroj_knjiga').val('');

                    }
                });
        }
    })
}
