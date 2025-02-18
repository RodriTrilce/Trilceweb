
//Validar sólo números
function soloNumeros(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

//Validar sólo letras y espacio en blanco
function soloLetrasYblanco(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 32 && !(charCode >= 65 && charCode <= 90) && !(charCode >= 97 && charCode <= 122))
        return false;
    return true;
}
