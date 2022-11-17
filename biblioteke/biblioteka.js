$(document).ready(function () {
    prikaziBiblioteke();
    dodajBiblioteku();
    obrisiBiblioteku();
    vratiBiblioteku();
    azurirajBiblioteku();
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

function obrisiBiblioteku() {

    $(document).on('click', '#btn_delete', function () {

        var id = $(this).attr('value');

        $.ajax({
            url: 'crud/delete.php',
            method: 'post',
            data: { id: id },

            success: function (data) {
                $('#uspesnoObrisan').fadeIn().html(data).delay(1800).fadeOut('slow');
                prikaziBiblioteke();
            }
        })
    })
}

function vratiBiblioteku() {

    $(document).on('click', '#btn_edit', function () {

        var id = $(this).attr('value');

        $.ajax({
            url: 'crud/get.php',
            method: 'post',
            data: { id: id },
            dataType: 'json',

            success: function (data) {
                $('#izmenaBiblioteke').modal('show');
                $('#biblioteka_id').val(data.id);
                $('#upd_naziv').val(data.naziv);
                $('#upd_adresa').val(data.adresa);
                $('#upd_broj_knjiga').val(data.broj_knjiga);

            }
        });
    })

}

function azurirajBiblioteku() {

    $(document).on('click', '#btn_update', function () {

        var id = $('#biblioteka_id').val();
        var naziv = $('#upd_naziv').val();
        var adresa = $('#upd_adresa').val();
        var broj_knjiga = $('#upd_broj_knjiga').val();

        if (id == '' || naziv == '' || adresa == '' || broj_knjiga == '') {
            $('#upd_praznaPolja').slideDown().delay(1500).fadeOut('slow');
        }
        else {

            $.ajax({
                url: 'crud/update.php',
                method: 'post',
                data: {
                    id: id,
                    naziv: naziv,
                    adresa: adresa,
                    broj_knjiga: broj_knjiga,
                },

                success: function (data) {
                    $('#upd_uspesnoSacuvan').fadeIn().html(data).delay(1800).fadeOut('slow');
                    prikaziBiblioteke();
                }
            })
        }
    });
}
