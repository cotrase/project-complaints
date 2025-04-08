// public/script.js

$(document).ready(function () {
    $('#depa').on('change', function () {
        var idDepa = $(this).val();
        if (idDepa) {
            $('#ciu').html('<option>Cargando...</option>');
            $.ajax({
                type: 'POST',
                url: '../controllers/FetchCities.php',
                data: { id_depa: idDepa },
                success: function (html) {
                    $('#ciu').html(html);
                }
            });
        } else {
            $('#ciu').html('<option value="">Seleccione un departamento primero</option>');
        }
    });
});
