$(document).ready(function () {
    prikaziKnjige();
    dodajKnjigu();

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