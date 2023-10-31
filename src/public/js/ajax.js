//$(document).ready(function () {
$(function () {
    $('#save-record').on('submit', function (e) {
        e.preventDefault();

        //SAVE IN DATA A JS ARRAY OF OBJECT WITH FORM VALUES
        var data = $(this).serializeArray();

        //console.log(data);

        //CALL AJAX WITH JQUERY
        $.ajax({
            type: $(this).attr('method'),
            data: data,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function (data) {
                console.log(data);

                var result = data;

                //IF RESPONSE OF CONTROLLER IS TRUE
                if (result.response == 'InsertSuccess') {
                    Swal.fire({
                        title: 'Correcto',
                        html: "Datos registrados<br>.En un momento será redirigido a la página principal",
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });

                    setTimeout(function () {
                        window.location.href = '/';
                    }, 5000);
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ha habido un problema...',
                        html: 'Se ha presentado un problema al guardar la información<br>.',
                        confirmButtonText: 'OK'
                    })
                }
            }
        });
    });
});
//});