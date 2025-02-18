<?php


Route::get('/l/taller-de-teatro-audiciones', function(){
  return Redirect::to('https://www.trilce.edu.pe/storage/static/upload/pdf/3455835473457667345467554_pfd-teatro.pdf', 301);
});


Route::get('/l/reconstruido-catolica-evaluacion-del-talento-1', function(){
  return Redirect::to('https://www.trilce.edu.pe/storage/academia/documents/solutions/pucp/2019/evaluacion-del-talento-reconstruido-1.pdf', 301);
});


// Preparaci�n (Preparation)
/* Route::name('xx')
      ->get('/envia-un-mensaje-de-amor-y-amistad/{id}', function($id){
          return Redirect::to('/envia-un-mensaje-de-amor-y-amistad/#'.$id);
      }); */

/* Route::name('xx')
      ->get('/envia-un-mensaje-de-navidad/{id}', function($id){
          return Redirect::to('/envia-un-mensaje-de-navidad/#'.$id);
      });
 */


Route::get('/l/solucionario-uni-fisica-quimica', function(){
  return Redirect::to('https://www.trilce.edu.pe/storage/academia/documents/solutions/uni/2019/1/examen-2019-uni-i-solucionario-fisica-quimica.pdf', 301);
});

Route::get('/l/claves-uni-fisica-quimica', function(){
  return Redirect::to('https://www.trilce.edu.pe/storage/academia/documents/claves/examen-2019-uni-i-claves-fisica-quimica.pdf', 301);
});


Route::get('/l/claves-uni-matematica', function(){
  return Redirect::to('https://www.trilce.edu.pe/storage/academia/documents/claves/examen-2019-uni-i-claves-matematica.pdf', 301);
});

Route::get('/l/solucionario-uni-matematica', function(){
  return Redirect::to('https://www.trilce.edu.pe/storage/academia/documents/solutions/uni/2019/1/examen-2019-uni-i-solucionario-matematica.pdf', 301);
});



Route::get('/academia/sede/torrico', function(){
  return Redirect::to('/academia/sede/cercado-de-lima', 301);
});

Route::get('/academia/sede/comas', function(){
  return Redirect::to('/academia/sedes/', 301);
});

Route::get('/politica-de-datos-personales.pdf', function(){
  return Redirect::to('/storage/other/documents/politica-de-datos-personales.pdf', 301);
});

Route::get('/vacaciones-utiles/pdf/{a}', function(){
  return Redirect::to('/colegio/vacaciones-utiles/', 301);
});

Route::get('/admision-2019/', function(){
  return Redirect::to('/matricula-2019/', 301);
});

Route::get('/nosotros/', function(){
  return Redirect::to('/colegio/nosotros', 301);
});

Route::get('/vacaciones-utiles/', function(){
  return Redirect::to('/colegio/vacaciones-utiles', 301);
});

Route::get('/noticias/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/multimedia/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/olimpiadas/', function(){
  return Redirect::to('/academia/olimpiadas-matematicas', 301);
});

Route::get('/contactenos/', function(){
  return Redirect::to('/colegio/contacto', 301);
});

Route::get('/inscripcion/', function(){
  return Redirect::to('/inscripcion-academia/', 301);
});

Route::get('/propuesta-educativa/', function(){
  return Redirect::to('/colegio/propuesta-educativa', 301);
});

Route::get('/academias/', function(){
  return Redirect::to('/academia', 301);
});

Route::get('/admision/', function(){
  return Redirect::to('/colegio/matricula-nuevo', 301);
});

Route::get('/colegios/', function(){
  return Redirect::to('/colegio', 301);
});

Route::get('/locales/jesus-maria-salaverry/', function(){
  return Redirect::to('/colegio/sede/jesus-maria-salaverry', 301);
});

Route::get('/solucionarios/', function(){
  return Redirect::to('/academia/solucionarios-uni', 301);
});

Route::get('/sede-academia/', function(){
  return Redirect::to('/academia', 301);
});

Route::get('/guia-de-pago-en-linea/', function(){
  return Redirect::to('/colegio/guia-de-pagos-en-linea', 301);
});

Route::get('/solucionarios/catolica/', function(){
  return Redirect::to('/academia/solucionarios-pucp', 301);
});

Route::get('/simulacros/', function(){
  return Redirect::to('/academia/simulacros-uni', 301);
});

Route::get('/academias/uni/', function(){
  return Redirect::to('/academia/preparacion-uni', 301);
});

Route::get('/academias/san-marcos/', function(){
  return Redirect::to('/academia/preparacion-san-marcos', 301);
});

Route::get('/academias/catolica/', function(){
  return Redirect::to('/academia/preparacion-pucp', 301);
});

Route::get('/colegios/inscripcion-admision2019/', function(){
  return Redirect::to('/matricula-2019/', 301);
});

Route::get('/solucionarios/uni/', function(){
  return Redirect::to('/academia/solucionarios-uni', 301);
});

Route::get('/solucionarios/sanmarcos/', function(){
  return Redirect::to('/academia/solucionarios-san-marcos', 301);
});

Route::get('/simulacros/uni/', function(){
  return Redirect::to('/academia/simulacros-uni', 301);
});

Route::get('/simulacros/san-marcos/', function(){
  return Redirect::to('/academia/simulacros-san-marcos', 301);
});

Route::get('/simulacros/catolica/', function(){
  return Redirect::to('/academia/simulacros-pucp', 301);
});

Route::get('/locales/central-trilce/', function(){
  return Redirect::to('/colegio', 301);
});

Route::get('/locales/brena/', function(){
  return Redirect::to('/colegio/sede/brena', 301);
});

Route::get('/locales/callao/', function(){
  return Redirect::to('/colegio/sede/callao', 301);
});

Route::get('/locales/chorrillos/', function(){
  return Redirect::to('/colegio/sede/chorrillos', 301);
});

Route::get('/locales/comas', function(){
  return Redirect::to('/colegio/sede/comas', 301);
});

Route::get('/locales/los-olivos/', function(){
  return Redirect::to('/colegio/sede/los-olivos', 301);
});

Route::get('/locales/maranga/', function(){
  return Redirect::to('/colegio/sede/maranga', 301);
});

Route::get('/locales/pro/', function(){
  return Redirect::to('/colegio/sede/pro', 301);
});

Route::get('/locales/roma', function(){
  return Redirect::to('/colegio/sede/santa-beatriz-roma', 301);
});

Route::get('/locales/jesus-maria-salaverry/', function(){
  return Redirect::to('/colegio/sede/jesus-maria-salaverry', 301);
});

Route::get('/locales/surco/', function(){
  return Redirect::to('/colegio/sede/surco', 301);
});

Route::get('/locales/san-isidro', function(){
  return Redirect::to('/colegio/sede/san-isidro', 301);
});

Route::get('/locales/villa-maria-del-triunfo/', function(){
  return Redirect::to('/colegio/sede/villa-maria', 301);
});

Route::get('/locales/villa-el-salvador/', function(){
  return Redirect::to('/colegio/sede/villa-el-salvador', 301);
});

Route::get('/locales/la-molina', function(){
  return Redirect::to('/colegio/sede/la-molina', 301);
});

Route::get('/locales/salamanca/', function(){
  return Redirect::to('/colegio/sede/salamanca', 301);
});

Route::get('/locales/santa-anita', function(){
  return Redirect::to('/colegio/sede/santa-anita', 301);
});

Route::get('/locales/san-juan-de-lurigancho/', function(){
  return Redirect::to('/colegio/sede/san-juan-de-lurigancho', 301);
});

Route::get('/locales/wisse/', function(){
  return Redirect::to('/colegio/sede/san-juan-de-lurigancho-wisse', 301);
});

Route::get('/noticias/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/locales/arequipa/', function(){
  return Redirect::to('/colegio/sede/arequipa', 301);
});

Route::get('/locales/chiclayo/', function(){
  return Redirect::to('/colegio/sede/chiclayo', 301);
});

Route::get('/locales/chanchamayo', function(){
  return Redirect::to('/colegio/sede/chanchamayo', 301);
});

Route::get('/locales/huancayo/', function(){
  return Redirect::to('/colegio/sede/huancayo', 301);
});

Route::get('/locales/piura/', function(){
  return Redirect::to('/colegio/sede/piura', 301);
});

Route::get('/locales/trujillo/', function(){
  return Redirect::to('/colegio/sede/trujillo', 301);
});

Route::get('/sede-academia/santa-beatriz/', function(){
  return Redirect::to('/academia/sede/santa-beatriz', 301);
});

Route::get('/sede-academia/los-olivos/', function(){
  return Redirect::to('/academia/sede/los-olivos', 301);
});

Route::get('/sede-academia/comas/', function(){
  //return Redirect::to('/academia/sede/comas', 301);
  return Redirect::to('/academia/sedes', 301);
});

Route::get('/sede/comas/', function(){
  //return Redirect::to('/academia/sede/comas', 301);
  return Redirect::to('/academia/sedes', 301);
});


Route::get('/sede-academia/torrico/', function(){
  return Redirect::to('/academia/sede/torrico', 301);
});

Route::get('/sede-academia/marsano/', function(){
  return Redirect::to('/academia/sede/marsano', 301);
});

Route::get('/sede-academia/villa-el-salvador/', function(){
  return Redirect::to('/academia/sede/villa-el-salvador', 301);
});

Route::get('/sede-academia/san-isidro/', function(){
  return Redirect::to('/academia/sede/san-isidro', 301);
});




Route::get('/noticias/1/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/noticias/2/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/noticias/3/', function(){
  return Redirect::to('/colegio/blog', 301);
});








Route::get('/noticias/finalizo-annie-el-musical-presentado-por-el-taller-de-teatro-trilce/', function(){
  return Redirect::to('/colegio/blog/finalizo-annie-el-musical-presentado-por-el-taller-de-teatro-trilce', 301);
});

Route::get('/noticias/comunicado-onam-2018/', function(){
  return Redirect::to('http://67.205.139.190/academia/blog/comunicado-onam', 301);
});

Route::get('/noticias/gymkana-primer-grado-primaria/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/gymkana-de-primer-grado-de-primaria', 301);
});

Route::get('/noticias/ser-mejores-personas-en-maranga/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/ser-mejores-personas-en-trilce-maranga', 301);
});

Route::get('/noticias/ser-mejores-personas-en-callao/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/ser-mejores-personas-en-trilce-callao', 301);
});

Route::get('/noticias/XXX-olimpiada-nacional-de-matem%C3%A1tica-ONAM-Trilce/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/xxx-olimpiada-nacional-de-matematica-onam-trilce', 301);
});

Route::get('/noticias/felicitaciones-a-los-representantes-de-ser-mejores-personas-en-trilce-chorrillos/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/felicitaciones-a-los-representantes-de-ser-mejores-personas-en-trilce-chorrillos', 301);
});

Route::get('/noticias/almuerzo-de-cachimbos-pucp-primera-opcion-2019/', function(){
  return Redirect::to('/academia/blog/almuerzo-de-cachimbos-pucp-primera-opcion-2019', 301);
});

Route::get('/noticias/examen-pucp-2019-0/', function(){
  return Redirect::to('/academia/blog', 301);
});

Route::get('/noticias/clausura-danza-musica/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/clausura-de-los-talleres-de-danza-y-musica-2018', 301);
});

Route::get('/noticias/feria-gastronomica-2018/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/feria-gastronomica-2018', 301);
});

Route::get('/noticias/ser-mejores-personas-en-trilce-pro/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/noticias/trilce-salaverry-recibe-reconocimiento-de-la-urp/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/noticias/celebracion-cachimbos-san-marcos-2019-i/', function(){
  return Redirect::to('http://67.205.139.190/academia/blog/celebracion-cachimbos-san-marcos-2019-i', 301);
});

Route::get('/noticias/examen-de-admision-san-marcos-2019-i/', function(){
  return Redirect::to('http://67.205.139.190/academia/blog/examen-de-admision-san-marcos-2019-i', 301);
});

Route::get('/noticias/final-del-xii-debate-estudiantil-intertrilce/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/final-del-xii-debate-estudiantil-intertrilce', 301);
});

Route::get('/noticias/ser-mejores-personas-en-comas/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/ser-mejores-personas-en-comas', 301);
});

Route::get('/noticias/viii-concurso-de-danza/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/viii-concurso-de-danza', 301);
});

Route::get('/noticias/vi-concurso-de-grafiti/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/vi-concurso-de-grafiti', 301);
});

Route::get('/noticias/xii-debate-estudiantil-intertrilce/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/final-del-xii-debate-estudiantil-intertrilce', 301);
});

Route::get('/noticias/celebracion-de-cachimbos-uni-2018-ii/', function(){
  return Redirect::to('http://67.205.139.190/academia/blog/celebracion-de-cachimbos-uni-2018-ii', 301);
});

Route::get('/noticias/feria-regional-2018/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/feria-regional-2018', 301);
});

Route::get('/noticias/finalizo-hairspray-musical-de-broadway-presentado-por-el-taller-de-teatro-trilce/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/finalizo-hairspray-musical-de-broadway-presentado-por-el-taller-de-teatro-trilce', 301);
});

Route::get('/noticias/celebracion-de-cachimbos-pucp-et-2018-ii/', function(){
  return Redirect::to('http://67.205.139.190/academia/blog/celebracion-de-cachimbos-uni-2018-ii', 301);
});

Route::get('/noticias/visita-de-edison-flores-a-trilce-los-olivos/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/visita-de-edison-flores-a-trilce-los-olivos', 301);
});

Route::get('/noticias/celebracion-por-el-dia-del-maestro-2018/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/celebracion-por-el-dia-del-maestro', 301);
});

Route::get('/noticias/dia-del-maestro-en-trilce-pro/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/dia-del-maestro-en-trilce-pro', 301);
});

Route::get('/noticias/evaluacion-del-talento-2018-2/', function(){
  return Redirect::to('http://67.205.139.190/academia/blog/trilce-en-evaluacion-del-talento-2018-ii', 301);
});

Route::get('/noticias/viii-torneo-de-ajedrez/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/viii-torneo-de-ajedrez', 301);
});

Route::get('/noticias/campeonato-deportivo-intertrilce-2018/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/campeonato-deportivo-intertrilce-2018', 301);
});

Route::get('/noticias/visita-guiada-a-la-uni/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/visita-guiada-a-la-uni', 301);
});

Route::get('/noticias/escuela-de-padres-el-riesgo-de-las-redes-sociales-en-la-adolescencia/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/escuela-de-padres-el-riesgo-de-las-redes-sociales-en-la-adolescencia', 301);
});

Route::get('/noticias/feria-de-ciencias-2018-secundaria/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/feria-de-ciencias-2018-secundaria', 301);
});

Route::get('/noticias/xi-concurso-de-ortografia-sinonimo-de-cultura-y-educacion/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/xi-concurso-de-ortografia-sinonimo-de-cultura-y-educacion', 301);
});

Route::get('/noticias/campana-ser-mejores-personas-en-nuestra-sede-de-salaverry/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/campana-ser-mejores-personas-en-nuestra-sede-de-salaverry', 301);
});

Route::get('/noticias/celebracion-por-el-dia-del-padre-en-chorrillos/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/celebracion-por-el-dia-del-padre-en-chorrillos', 301);
});

Route::get('/noticias/nuevamente-la-cafetta-es-reconocida-como-quiosco-escolar-saludable/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/nuevamente-la-cafetta-es-reconocida-como-quiosco-escolar-saludable', 301);
});

Route::get('/noticias/campana-ser-mejores-personas-en-los-olivos/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/campana-ser-mejores-personas-en-los-olivos', 301);
});

Route::get('/noticias/inauguracion-del-campeonato-deportivo-intertrilce-2018/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/inauguracion-del-campeonato-deportivo-intertrilce-2018', 301);
});

Route::get('/noticias/charla-magistral-2018/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/charla-magistral-2018', 301);
});

Route::get('/noticias/desayuno-y-firma-de-compromisos-para-las-olimpiadas/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/desayuno-y-firma-de-compromisos-para-las-olimpiadas-de-matematica-2018', 301);
});

Route::get('/noticias/inicia-el-taller-de-teatro-trilce-2018/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/inicia-el-taller-de-teatro-trilce-2018', 301);
});

Route::get('/noticias/celebracion-cachimbos-san-marcos-2018-ii/', function(){
  return Redirect::to('http://67.205.139.190/academia/blog/celebracion-cachimbos-san-marcos-2018-ii', 301);
});

Route::get('/noticias/ceremonia-de-bienvenida-a-los-ingresantes-uni-2018-1/', function(){
  return Redirect::to('http://67.205.139.190/academia/blog/ceremonia-de-bienvenida-a-los-ingresantes-uni-2018-1', 301);
});

Route::get('/noticias/Felicitaciones-cachimbo-trilce-pucp-2018-1/', function(){
  return Redirect::to('http://67.205.139.190/academia/blog/felicitaciones-cachimbo-trilce-pucp-2018-1', 301);
});

Route::get('/noticias/juegos-retro-2018/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/noticias/siempre-alertas/', function(){
  return Redirect::to('http://67.205.139.190/academia/blog/siempre-alertas', 301);
});

Route::get('/noticias/deporte-y-diversion/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/deporte-y-diversion', 301);
});

Route::get('/noticias/trilce-salavery-recibe-reconocimiento-de-la-usil/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/trilce-salaverry-recibe-reconocimiento-de-la-usil', 301);
});

Route::get('/noticias/campeonato-deportivo-y-ginkana-2017/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/campeonato-deportivo-y-ginkana-2017', 301);
});

Route::get('/noticias/trilce-salaverry-recibe-reconocimiento-de-la-upc/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/trilce-salaverry-recibe-reconocimiento-de-la-upc', 301);
});

Route::get('/noticias/navidad-del-nino-trilce/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/noticias/el-musical-de-broadway-el-rey-leon-es-presentado-por-alumnos-trilce/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/el-musical-de-broadway-el-rey-leon-es-presentado-por-alumnos-trilce', 301);
});

Route::get('/noticias/ginkana/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/ginkana', 301);
});

Route::get('/noticias/clausura-de-los-talleres-de-musica-y-danza/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/clausura-de-los-talleres-de-musica-y-danza', 301);
});

Route::get('/noticias/xxix-olimpiada-nacional-de-matematica-onam-trilce/', function(){
  return Redirect::to('http://67.205.139.190/academia/blog/xxix-olimpiada-nacional-de-matematica-onam-trilce', 301);
});

Route::get('/noticias/nuestros-alumnos-rindieron-los-examenes-elash-i-y-elash-ii-del-college-board/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/nuestros-alumnos-rindieron-los-examentes-elash-i-y-elash-ii-del-college-board', 301);
});

Route::get('/noticias/concurso-de-ajedrez/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/concurso-de-ajedrez', 301);
});

Route::get('/noticias/concurso-de-cubo-rubik/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/noticias/felicitaciones-por-haber-alcanzado-una-vacante-cachimbo-trilce-pucp-2017-ii/', function(){
  return Redirect::to('/academia/blog', 301);
});

Route::get('/noticias/felicidades-por-haber-ingresado-a-la-universidad-cachimbo-trilce-pucp-2018-0/', function(){
  return Redirect::to('/academia/blog', 301);
});

Route::get('/noticias/juegos-florales/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/noticias/concurso-de-declamacion/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/vii-concurso-de-declamacion-arte-y-poesia', 301);
});

Route::get('/noticias/los-mas-listos/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/noticias/festival-gastronomico-2017/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/festival-gastronomico-2017', 301);
});

Route::get('/noticias/festejando-nuestro-criollismo/', function(){
  return Redirect::to('', 301);
});

Route::get('/noticias/juegos-retro/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/juegos-retro', 301);
});

Route::get('/noticias/concurso-de-historieta/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/festejando-nuestro-criollismo', 301);
});

Route::get('/noticias/concurso-de-grafiti/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/concurso-de-grafiti', 301);
});

Route::get('/noticias/vii-concurso-de-declamacion-arte-y-poesia/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/vii-concurso-de-declamacion-arte-y-poesia', 301);
});

Route::get('/noticias/capacitacion-de-nuestros-profesores-de-ingles/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/noticias/concurso-de-dibujo/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/concurso-de-dibujo', 301);
});

Route::get('/noticias/concurso-de-canto-moderno/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/concurso-de-canto-moderno', 301);
});

Route::get('/noticias/concurso-de-caligrama/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/concurso-de-caligrama', 301);
});

Route::get('/noticias/premiacion-de-ganadores-de-los-juegos-florales-de-primaria/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/premiacion-de-ganadores-de-los-juegos-florales-de-primaria', 301);
});

Route::get('/noticias/procesion-del-senor-de-los-milagros/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/procesion-del-senor-de-los-milagros', 301);
});

Route::get('/noticias/ser-mejores-personas-en-nuestra-sede-de-santa-beatriz-roma/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/noticias/vii-concurso-de-danza-trilce/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/vii-concurso-de-danza-trilce', 301);
});

Route::get('/noticias/desayuno-cachimbos-trilce-uni-2017-2/', function(){
  return Redirect::to('http://67.205.139.190/academia/blog/desayuno-cachimbos-uni-2017-2', 301);
});

Route::get('/noticias/campana-ser-mejores-personas-presente-en-trilce-chorrillos-y-trilce-los-olivos/', function(){
  return Redirect::to('/colegio/blog', 301);
});

Route::get('/noticias/yincana-perseverando-lo-lograre/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/yincana-perseverando-lo-lograre', 301);
});

Route::get('/noticias/convocatoria-escuela-de-profesores/', function(){
  return Redirect::to('http://67.205.139.190/academia/blog/convocatoria-escuela-de-profesores', 301);
});

Route::get('/noticias/la-campana-ser-mejores-personas-continua-en-trilce/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/la-campana-ser-mejores-personas-continua-en-trilce', 301);
});

Route::get('/noticias/dia-del-maestro/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/dia-del-maestro-trilce', 301);
});

Route::get('/noticias/Excelencia-Escolar-2017-PUCP-y-UPCH/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/excelencia-escolar-2017-pucp-y-upch', 301);
});

Route::get('/noticias/Proyecto-Lideres-comprometidos-a-ser-mejores-personas/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/proyecto-lideres-comprometidos-a-ser-mejores-personas', 301);
});

Route::get('/noticias/campeonato-Deportivo-Intertrilce-2017/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/campeonato-deportivo-intertrilce-2017', 301);
});

Route::get('/noticias/Feria-de-ciencias-2017/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/feria-de-ciencias-2017', 301);
});

Route::get('/noticias/VII-torneo-de-Ajedrez/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/vii-torneo-de-ajedrez', 301);
});

Route::get('/noticias/Campana-En-Trilce-somos-parte-de-la-lucha-contra-las-drogas/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/campana-en-trilce-somos-parte-de-la-lucha-contra-las-drogas', 301);
});

Route::get('/noticias/Audiciones-de-teatro-agosto-2017/', function(){
  return Redirect::to('http://67.205.139.190/colegio/blog/audiciones-de-teatro-agosto-2017', 301);
});

Route::get('/noticias/feria-regional-2017/', function(){
  return Redirect::to('/colegio/blog', 301);
});
