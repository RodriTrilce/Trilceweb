function isNumber(evt) 
{
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if ( (charCode > 31 && charCode < 48) || charCode > 57)
  {
    return false;
  }
  return true;
}

$('a').click(function()
{
  $('html, body').animate({scrollTop: $( $(this).attr('href') ).offset().top}, 500);
  return false;
});

function mostrarPago2() {
  document.getElementById("pago1").style.display = "none";
  
  document.getElementById("pago2").style.display = "block";
}

/* Catolica */
function url_anterior_paso1_pucp() {
  window.location.href = "index.html";
}

function url_siguiente_paso1_pucp() {
  window.location.href = "landing-formulario-catolica-paso2.html";
}

function url_anterior_paso2_pucp() {
  window.location.href = "landing-formulario-catolica.html";
}

function url_siguiente_paso2_pucp() {
  window.location.href = "landing-formulario-catolica-registro.html";
}

function url_registro_pucp() {
  window.open("https://www.trilce.edu.pe/l/guia-pagos-maratones", "_blank");
}

function url_contacto_pucp() {
  window.open("https://www.trilce.edu.pe/l/whatsapp-maratones", "_blank");
}

/* UNI */
function url_anterior_paso1_uni() {
  window.location.href = "index.html";
}

function url_siguiente_paso1_uni() {
  window.location.href = "landing-formulario-uni-paso2.html";
}

function url_anterior_paso2_uni() {
  window.location.href = "landing-formulario-uni.html";
}

function url_siguiente_paso2_uni() {
  window.location.href = "landing-formulario-uni-registro.html";
}

function url_registro_uni() {
  window.open("https://www.trilce.edu.pe/l/guia-pagos-maratones", "_blank");
}

function url_contacto_uni() {
  window.open("https://www.trilce.edu.pe/l/whatsapp-maratones", "_blank");
}


/* SAN MARCS */
function url_anterior_paso1_san_marcos() {
  window.location.href = "index.html";
}

function url_siguiente_paso1_san_marcos() {
  window.location.href = "landing-formulario-san-marcos-paso2.html";
}

function url_anterior_paso2_san_marcos() {
  window.location.href = "landing-formulario-san-marcos.html";
}

function url_siguiente_paso2_san_marcos() {
  window.location.href = "landing-formulario-san-marcos-registro.html";
}

function url_registro_san_marcos() {
  window.open("https://www.trilce.edu.pe/l/guia-pagos-maratones", "_blank");
}

function url_contacto_san_marcos() {
  window.open("https://www.trilce.edu.pe/l/whatsapp-maratones", "_blank");
}