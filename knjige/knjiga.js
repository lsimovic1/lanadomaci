$(document).ready(function () {
    prikaziKnjige();
    dodajKnjigu();
    obrisiKnjigu();
    vratiKnjigu();
    azurirajKnjigu();
    pretraga();
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

function dodajKnjigu() {

    $(document).on('click', '#btn_save', function () {

        var delo = $('#adddelo').val();
        var autor = $('#addautor').val();
        var biblioteka = $('#addbiblioteka').val();


        if (delo == '' || autor == '' || biblioteka == '') {
            $('#praznaPolja').slideDown().delay(1500).fadeOut('slow');
        }
        else {
            $.ajax(
                {
                    url: 'crud/save.php',
                    method: 'post',
                    data: { delo: delo, autor: autor, biblioteka: biblioteka },

                    success: function (data) {
                        $('#praznaPolja').hide();
                        $('#uspesnoSacuvan').fadeIn().html(data).delay(1800).fadeOut('slow');

                        prikaziKnjige();

                        $('#adddelo').val('');
                        $('#addautor').val('');
                        $('#addbiblioteka').val(1);

                    }
                });
        }
    })
}

function obrisiKnjigu() {

    $(document).on('click', '#btn_delete', function () {

        var id = $(this).attr('value');

        $.ajax({
            url: 'crud/delete.php',
            method: 'post',
            data: { id: id },

            success: function (data) {
                $('#uspesnoObrisan').fadeIn().html(data).delay(1800).fadeOut('slow');
                prikaziKnjige();
            }
        })
    })
}

function vratiKnjigu() {

    $(document).on('click', '#btn_edit', function () {

        var id = $(this).attr('value');

        $.ajax({
            url: 'crud/get.php',
            method: 'post',
            data: { id: id },
            dataType: 'json',

            success: function (data) {
                $('#izmenaKnjige').modal('show');
                $('#knjiga_id').val(data.id);
                $('#upd_delo').val(data.delo);
                $('#upd_autor').val(data.autor);
                $('#upd_biblioteka').val(data.biblioteka_id);
            }
        });
    })

}


function azurirajKnjigu() {

    $(document).on('click', '#btn_update', function () {


        var id = $('#knjiga_id').val();
        var delo = $('#upd_delo').val();
        var autor = $('#upd_autor').val();
        var biblioteka = $('#upd_biblioteka').val();

        if (id == '' || delo == '' || autor == '' || biblioteka == '') {
            $('#upd_praznaPolja').slideDown().delay(1500).fadeOut('slow');
        }
        else {

            $.ajax({
                url: 'crud/update.php',
                method: 'post',
                data: {
                    id: id,
                    delo: delo,
                    autor: autor,
                    biblioteka: biblioteka,
                },

                success: function (data) {
                    $('#upd_uspesnoSacuvan').fadeIn().html(data).delay(1800).fadeOut('slow');
                    prikaziKnjige();
                }
            })
        }
    });
}

function pretraga() {

    $(document).on('keyup', '#bar', function () {

        var key = this.value;

        $.ajax(
            {
                url: 'search.php',
                method: 'post',
                data: { key: key },
                success: function (data) {
                    {
                        $('#searchtabela').html(data);
                    }
                }
            }
        )

    })
}
