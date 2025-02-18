

$(document).ready(function () {
    
    $('input[name=nombre]').bind('keypress', function (event) {
        var regex = new RegExp("^[a-zA-Z ]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });

    $('input[name=apellido]').bind('keypress', function (event) {
        var regex = new RegExp("^[a-zA-Z ]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });

    $('input[name=dni],input[name=telefono]').bind('keypress', function (e) {
        var e = e || window.event;
        if ((e.keyCode < 48) || (e.keyCode > 57)){
            e.returnValue = false;
        e.preventDefault();
        }
    });

    /*$("#comentario").bind('keypress', function (event) {
        var regex = new RegExp("^[a-zA-Z0-9 ]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });*/




    //Email validation Function	
    function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailAddress);
    };
    function minmax(){

    }

    var delay = 2000;
    $('#submit').click(function (e) {

        var nombre = $('input[name=nombre]').val();
        var apellido = $('input[name=apellido]').val();
        var dni = $('input[name=dni]').val();
        var telefono = $('input[name=telefono]').val();
        var email = $('input[name=email]').val();
        var sede = $('select[name=sedes]').val();
        var prepa = $('select[name=prepa]').val();
        var ciclo = $('select[name=ciclos]').val();
        var turno = $('select[name=turnos]').val();
        var comentario = $('#comentario').val();
        var medio = $('input:radio[name=medio]:checked').val();
        var terminos = $('input:checkbox[name=terminos]:checked').val();
        var minLength = 7;
        var maxLength = 9;
        var charLength = $('input[name=telefono]').val().length

        //organize the data properly
        var form_data =
            'nombre=' + nombre +
            '&apellido=' + apellido +
            '&dni=' + dni +
            '&telefono=' + telefono +
            '&email=' + email +
            '&sede=' + sede +
            '&prepa=' + prepa +
            '&ciclo=' + ciclo +
            '&turno=' + turno +
            '&comentario=' + comentario +
            '&medio=' + medio +
            '&terminos='+terminos;

        e.preventDefault();
        if (nombre == '') {
            $('.message_box').html(
                '<span style="color:white;">Ingrese sus nombres</span>'
            );
            $('#nombre').focus();
            return false;
        }

        if (apellido == '') {
            $('.message_box').html(
                '<span style="color:white;">Ingrese sus apellidos</span>'
            );
            $('#apellido').focus();
            return false;
        }

        if (dni == '') {
            $('.message_box').html(
                '<span style="color:white;">Ingrese su DNI</span>'
            );
            $('#dni').focus();
            return false;
        }
        
        if (telefono == '') {
            $('.message_box').html(
                '<span style="color:white;">Ingrese su teléfono</span>'
            );
            $('#telefono').focus();
            return false;
        }
        if ($("#telefono").val() != '') {
            if(charLength < minLength){
                $('.message_box').html(
                    '<span style="color:white;">Ingresa mínimo 7 dígitos</span>'
                );
                $('#telefono').focus();
                return false;
            }else if(charLength > maxLength){
                $('.message_box').html(
                    '<span style="color:white;">Ingresa máximo 9 dígitos </span>'
                );
                $('#telefono').focus();
                return false;
            }
        }

        if (email == '') {
            $('.message_box').html(
                '<span style="color:white;">Ingrese su e-mail</span>'
            );
            $('#email').focus();
            return false;
        }
        if ($("#email").val() != '') {
            if (!isValidEmailAddress($("#email").val())) {
                $('.message_box').html(
                    '<span style="color:white;">e-mail no válido</span>'
                );
                $('#email').focus();
                return false;
            }
        }

        if (sede == 0) {
            $('.message_box').html(
                '<span style="color:white;">Selecciona una sede</span>'
            );
            $('#sedes').focus();
            return false;
        }
        if (prepa == 0) {
            $('.message_box').html(
                '<span style="color:white;">Selecciona un tipo de prepapación</span>'
            );
            $('#prepa').focus();
            return false;
        }
        if (ciclo == 0) {
            $('.message_box').html(
                '<span style="color:white;">Selecciona un ciclo</span>'
            );
            $('#ciclos').focus();
            return false;
        }
        if (turno == 0) {
            $('.message_box').html(
                '<span style="color:white;">Selecciona un turno</span>'
            );
            $('#turnos').focus();
            return false;
        }

        if (comentario == '') {
            $('.message_box').html(
                '<span style="color:white;">Ingrese un comentario</span>'
            );
            $('#comentario').focus();
            return false;
        }

        var radioMedio = $("input[name='medio']:radio").is(':checked');
        if (radioMedio == '') {
            $('.message_box').html(
                '<span style="color:white;">Selecciona un medio para contactarnos contigo</span>'
            );
            $('#medio').focus();
            return false;
        }
        
        var checkTerminos = $('input:checkbox[name=terminos]:checked').val()
        if (!checkTerminos) {
            $('.message_box').html(
                '<span style="color:white;">Debes aceptar los términos y condiciones</span>'
            );
            $('#medio').focus();
            return false;
        }

        $.ajax
            ({
                type: "POST",
                url: "proceso.php",
                data: form_data,
                beforeSend: function () {
                    $('.message_box').html(
                        '<img src="images/loader.gif" width="25" height="25"/>'
                    );
                },
                success: function (data) {
                    $("#inscripcion_academia_trilce")[0].reset();
                    setTimeout(function () {
                        $('.message_box').html('<span style="color:white;">Registro Exitoso</span>').fadeIn('slow');
                    }, delay);
                    window.location.href = "http://www.trilce.edu.pe/inscripcion-academia/gracias.php";

                }
            });
    });

    //Change in sedes dropdown list will trigger this function and
    //generate dropdown options for county dropdown
    $(document).on('change', '#sedes', function () {
        var sede_id = $(this).val();
        if (sede_id != "") {
            $.ajax({
                url: "get_data.php",
                type: 'POST',
                data: { sede_id: sede_id },
                success: function (response) {
                    //var resp = $.trim(response);
                    if (response != '') {
                        $("#prepa").removeAttr('disabled', 'disabled').html(response);
                        $("#ciclos").attr('disabled', 'disabled').html("<option value=''>Ciclo</option>");
                        $("#turnos").attr('disabled', 'disabled').html("<option value=''>Turno</option>");
                    } else {
                        $("#prepa").attr('disabled', 'disabled').html("<option value=''>Preparación</option>");
                        $("#ciclos").attr('disabled', 'disabled').html("<option value=''>Ciclo</option>");
                        $("#turnos").attr('disabled', 'disabled').html("<option value=''>Turno</option>");
                    }
                }
            });
        } else {
            $("#prepa").attr('disabled', 'disabled').html("<option value=''>Preparación</option>");
            $("#ciclos").attr('disabled', 'disabled').html("<option value=''>Ciclo</option>");
            $("#turnos").attr('disabled', 'disabled').html("<option value=''>Turno</option>");
        }
    });
    //Change in prepa dropdown list will trigger this function and
    //generate dropdown options for state dropdown
    $(document).on('change', '#prepa', function () {
        var prepa_id = $(this).val();
        if (prepa_id != "") {
            $.ajax({
                url: "get_data.php",
                type: 'POST',
                data: { prepa_id: prepa_id },
                success: function (response) {
                    //var resp = $.trim(response);
                    if (response != '') {
                        $("#ciclos").removeAttr('disabled', 'disabled').html(response);
                        $("#turnos").attr('disabled', 'disabled').html("<option value=''>Turno</option>");
                    }
                    else {
                        $("#ciclos").attr('disabled', 'disabled').html("<option value=''>Ciclo</option>");
                        $("#turnos").attr('disabled', 'disabled').html("<option value=''>Turno</option>");
                    }
                }
            });
        } else {
            $("#ciclos").attr('disabled', 'disabled').html("<option value=''>Ciclo</option>");
            $("#turnos").attr('disabled', 'disabled').html("<option value=''>Turno</option>");

        }
    });
    //Change in ciclos dropdown list will trigger this function and
    //generate dropdown options for city dropdown
    $(document).on('change', '#ciclos', function () {
        var ciclo_id = $(this).val();
        if (ciclo_id != "") {
            $.ajax({
                url: "get_data.php",
                type: 'POST',
                data: { ciclo_id: ciclo_id },
                success: function (response) {
                    if (response != '') $("#turnos").removeAttr('disabled', 'disabled').html(response);
                    else $("#turnos").attr('disabled', 'disabled').html("<option value=''>Turno</option>");
                }
            });
        } else {
            $("#turnos").attr('disabled', 'disabled').html("<option value=''>Turno</option>");
        }
    });

});