<?php
use App\Http\Controllers\Admin\BannersController;
/*
|--------------------------------------------------------------------------
| Web Routes Trilce
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Redirect old website
include 'redirect_oldweb.php';

// Test url for any propouses
Route::name('prueba')->get('/prueba', function () {
      return view('academia.test');
});
Route::get('/ecotrilce', 'Out\EcotrilceController@index');
Route::get('/academia_prematricula', 'Academia\Enrollment\TestController@show');


Route::get('/tyc-lp.pdf', function () {
      return Redirect::to('/storage/other/documents/politica-de-datos-personales.pdf', 301);
});

Route::get('/mail.php', function () {
      return Redirect::to('/static/librodereclamaciones/mail.php', 301);
});



/**
 *  Admin
 */

// Index
Auth::routes();
Route::get('/admin', 'Admin\IndexController@index');
Route::get('/admin/salir', 'Auth\LogoutController@logout');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'rolepageadmin']], function () {
      Route::resource('/blog', 'BlogController');
      Route::resource('/math-olympics', 'MathOlympicsController');
      Route::resource('/math-olympics/results', 'MathOlympicsResultsController');
      Route::resource('/venue-colegio', 'VenueColegioController');
      Route::resource('/venue-academia', 'VenueAcademiaController');
      Route::resource('/banners', 'BannersController');
      Route::resource('/rrhh-forms', 'RhFormsController');
      Route::resource('/popup', 'PopupController');
      Route::resource('/filemanager', 'FileManagerController');
      Route::resource('/shortlink', 'ShortlinkController');
      Route::resource('/simulacrum', 'SimulacrumResource');
      Route::resource('/solutions', 'SolutionResource');
      Route::resource('/form-sorteo', 'FormSorteoController');
      Route::resource('/form-claves', 'FormClavesSanMarcosController');
      Route::resource('/pdf-editor', 'EditorPdfController');
});

Route::get('/admin/banners/{id}/edit', 'BannerController@edit')->name('admin.banners.edit');
Route::delete('/admin/banners/{id}', 'BannerController@destroy')->name('admin.banners.destroy');
Route::post('/admin/banners/update-order', [BannersController::class, 'updateOrder'])
    ->name('admin.banners.updateOrder');

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
      Route::resource('/pdf-editor', 'EditorPdfController');
  });
  
  



/**
 * General
 */

// Inicio (Home)
Route::name('home')->get('/', function () {
      return view('home');
});

/* Route::name('menu-trilce')
      ->get('/menu-trilce', function(){
        return Redirect::to('/storage/other/documents/menu/2019/menu.pdf');
});
 */


// Downloader
Route::name('downloader')
      ->get('/d/{id}/{slug}', 'DownloadController@download');

// Shortlink
Route::name('shortlink-dinamic')
      ->get('/l/{slug}', 'Admin\ShortlinkController@show');

/**
 *  Academia
 */

// Página Princial (Index)
Route::name('academia-index')
      ->get('/academia', 'Academia\IndexController@index');

      Route::name('academia-schoolcycle')
    ->get('/academia/ciclo-escolar', 'Academia\SchoolcycleController@index');


// Preparación (Preparation)
//Route::name('academia-preparation')
//->get('/academia/preparacion-{university}', 'Academia\PreparationController@index');

// Preparación (Preparation SAT)
Route::name('academia-preparation')
      ->get('/academia/preparacion-{university}', 'Academia\PreparationNewController@index');

// Página Princial (Index)
Route::name('academia-venues')
      ->get('/academia/sedes', 'Academia\VenuesController@index');

// Sedes (Venue)
Route::name('academia-venue')
      ->get('/academia/sede/{barrack}', 'Academia\VenueController@index');

Route::get('/academia/sede', function () {
      return redirect('/academia/sede', 'Academia\VenuesController@index');
});

Route::get('/academia/sede/comas', function () {
      return redirect('/academia/sede/comas', 'Academia\VenuesController@index');
});

// Studentship > Exam

Route::name('academia-studentship-exam')
      ->get('/academia/becas-{university}/inscripcion/{idexam}', 'Academia\StudentshipExamController@index');

Route::name('academia-studentship-exam-finish')
      ->post('/academia/becas-{university}/inscripcion/{idexam}', 'Academia\StudentshipExamController@store');

Route::get('/academia/becas-{university}/inscripcion', function () {
});

// Seminary > Exam

Route::name('academia-simulacrum-exam')
      ->get('/academia/seminario-{university}/inscripcion/{idexam}', 'Academia\SeminaryExamController@index');

Route::name('academia-seminary-exam-finish')
      ->post('/academia/seminario-uni/inscripcion/{idexam}', 'Academia\SeminaryExamController@store');

Route::get('/academia/seminario-uni/inscripcion', function () {
      return redirect('/academia');
});





// SIMULACROS 

//Simulacrum > Results All
Route::name('academia-simulacrum-results')
      ->get('/academia/simulacros-{university}/resultados', 'Academia\SimulacrumController@show');


// 1. Simulacros (Simulacrum)
Route::name('academia-simulacrum')
      ->get('/academia/simulacros-{university}', 'Academia\SimulacrumController@index');

//Route::name('academia-simulacrum')
//      ->get('/academia/simulacros', 'Academia\SimulacrumController@web');

// Redirect
//Route::get('/academia/simulacros', function () {
//      return redirect('/academia');
//});

// 2. Simulacrum > Exam
Route::name('academia-simulacrum-exam')
      ->get('/academia/simulacros-{university}/inscripcion/{idexam}', 'Academia\SimulacrumExamController@index');

Route::name('academia-simulacrum-exam-finish')
      ->post('/academia/simulacros-{university}/inscripcion/{idexam}', 'Academia\SimulacrumExamController@store');

Route::get('/academia/simulacros-{university}/inscripcion', function () {
      return redirect('/academia');
});


Route::name('academia-simulacrum-exam')
      ->get('/academia/simulacros-{university}/inscripcion/{idexam}', 'Academia\SimulacrumExamController@index');


// 3. Simulacrum > EXITO
Route::name('academia-simulacrum-exito')
      ->get('/academia/simulacros/exito', 'Academia\SimulacrumExamController@showExito');








// Solucionarios (Solutions)
Route::name('academia-solutions')
      ->get('/academia/solucionarios-{university}', 'Academia\SolutionsController@index');

//Route::get('/academia/solucionarios', function () {
//      return redirect('/academia');
//});

// Lista de Cachimbos (Entering)
Route::name('academia-entering')
      ->get('/academia/lista-de-cachimbos-{university}', 'Academia\EnteringController@index');

Route::get('/academia/lista-de-cachimbos', function () {
      return redirect('/academia');
});

// Olimpiadas Matematicas (MathOlympics)
Route::name('academia-matholympics')
      ->get('/academia/olimpiadas-matematicas', 'Academia\MathOlympicsController@index');

// Inscripcion Olimpiadas Matematicas Individual (RegisterMathOlympics)
Route::name('academia-matholympics-register')
      ->get('/academia/olimpiadas-matematicas/inscripcion/{codurl}', 'Academia\MathOlympicsRegisterController@index');

Route::name('academia-matholympics-register-finish')
      ->post('/academia/olimpiadas-matematicas/inscripcion/{codurl}', 'Academia\MathOlympicsRegisterController@store');

Route::name('academia-matholympics-print')
      ->post('/academia/olimpiadas-matematicas/credencial-imprimir/', 'Academia\MathOlympicsRegisterController@imprimirPDF');

Route::name('academia-matholympics-donwload')
      ->post('/academia/olimpiadas-matematicas/credencial-descargar/', 'Academia\MathOlympicsRegisterController@descargarPDF');


// Inscripcion Olimpiadas Matematicas Grupal (RegisterMathOlympics)
Route::name('academia-matholympics-group-register')
      ->get('/academia/olimpiadas-matematicas/inscripcion-grupal/{codurl}', 'Academia\MathOlympicsRegisterController@indexGroup');

Route::name('academia-matholympics-group-register-finish')
      ->post('/academia/olimpiadas-matematicas/inscripcion-grupal/{codurl}', 'Academia\MathOlympicsRegisterController@storeGroup');

Route::name('academia-matholympics-group-print')
      ->post('/academia/olimpiadas-matematicas/credencial-imprimir-grupal/', 'Academia\MathOlympicsRegisterController@imprimirPDFGROUP');

Route::name('academia-matholympics-group-donwload')
      ->post('/academia/olimpiadas-matematicas/credencial-descargar-grupal/', 'Academia\MathOlympicsRegisterController@descargarPDFGROUP');


Route::name('academia-solucionarios')
      ->get('/academia/solucionarios', 'Academia\SolucionariosController@index');

Route::name('academia-simulacros')
      ->get('/academia/simulacros', 'Academia\SimulacrosController@index');

// Nosotros (AboutUs)
Route::name('academia-aboutus')
      ->get('/academia/nosotros', 'Academia\AboutUsController@index');

// Nosotros (Tutorials)
Route::name('academia-tutorials')
      ->get('/academia/tutoriales', 'Academia\TutorialsController@index');

// Nosotros (Scholl Cycle)
/*Route::name('academia-schoolcycle')
      ->get('/academia/ciclo-escolar', 'Academia\SchoolcycleController@index');*/

// Nosotros (Payment Guide)
Route::name('academia-paymentguide')
->get('/academia/guia-de-pagos', 'Academia\PaymentguideController@index');


// Contactenos (Contact)
Route::name('academia-contact')
      ->get('/academia/contacto', 'Academia\ContactController@index');
Route::post('/academia/contacto', 'Academia\ContactController@send');

// Matricula en linea (Enrollment)
Route::name('academia-enrollment')
      ->get('/academia/preinscripcion', 'Academia\EnrollmentController@create');

Route::name('academia-enrollment-finish')
      ->post('/academia/preinscripcion', 'Academia\EnrollmentController@store');

Route::name('academia-enrollment-download')
      ->match(['get', 'post'], '/academia/preinscripcion/descargar-pdf', 'Academia\EnrollmentController@download');

// Blog (Blog)
Route::name('academia-blogpost')
      ->get('/academia/blog/{post}', 'Academia\BlogController@post');

Route::name('academia-blog')
      ->get('/academia/blog', 'Academia\BlogController@index');

// Multimedia
Route::name('academia-multimedia')
      ->get('/academia/multimedia', function () {
            return view('errors.work');
      });

// Preguntas Frecuentes (FrequentQuestions)
Route::name('academia-frequentquestions')
      ->get('/academia/preguntas-frecuentes', 'Academia\FrequentQuestionsController@index');


// CICLOS Nuevos 2020 - Trilce x SAT
Route::name('uni-ciclo-anual')
      ->get('/uni-ciclo-anual', 'Ciclos\CiclosController@uniAnual');

Route::name('uni-ciclo-semestral')
      ->get('/uni-ciclo-semestral', 'Ciclos\CiclosController@uniSemestral');

Route::name('uni-ciclo-repaso')
      ->get('/uni-ciclo-repaso', 'Ciclos\CiclosController@uniRepaso');

Route::name('uni-ciclo-verano')
      ->get('/uni-ciclo-verano', 'Ciclos\CiclosController@uniVerano');


// MENU TRILCE 2020
Route::name('menu')
      ->get('/menu-trilce', 'Menu\MenuController@index');

Route::name('normas')
      ->get('/normas-convivencia', 'Normas\NormasController@index');


/**
 *  Colegio
 */

// Página Princial (Index)
Route::name('colegio-index')
      ->get('/colegio', 'Colegio\IndexController@index');

// Admisión (Admission)
Route::name('colegio-admission')
      ->get('/colegio/matricula-{modality}', 'Colegio\AdmissionController@index');

// Nosotros (AboutUs)
Route::name('colegio-aboutus')
      ->get('/colegio/nosotros', 'Colegio\AboutUsController@index');

// Contactenos (Contact)
Route::name('colegio-contact')
      ->get('/colegio/contacto', 'Colegio\ContactController@index');

Route::post('/colegio/contacto', 'Colegio\ContactController@send');

// Preguntas Frecuentes (FrequentQuestions)
Route::name('colegio-frequentquestions')
      ->get('/colegio/preguntas-frecuentes', 'Colegio\FrequentQuestionsController@index');

// Guia de pagos en linea (PaymentGuide)
Route::name('colegio-paymentguide')
      ->get('/colegio/guia-de-pagos-en-linea', 'Colegio\PaymentGuideController@index');

// Blog (Blog)
Route::name('colegio-blogpost')
      ->get('/colegio/blog/{post}', 'Colegio\BlogController@post');

Route::name('colegio-blog')
      ->get('/colegio/blog', 'Colegio\BlogController@index');

// Página Princial (Index)
/*Route::name('colegio-educationalproposal')
      ->get('/colegio/propuesta-educativa', 'Colegio\EducationalProposalController@index');
*/

// Sedes (Venue)
Route::name('colegio-venue')
      ->get('/colegio/sede/{barrack}', 'Colegio\VenueController@index');

Route::get('/colegio/sede', function () {
      return redirect('/colegio');
});

// Vacaciones Útiles
//Route::name('colegio-vacations')
//      ->get('/colegio/vacaciones-utiles', 'Colegio\VacationsController@index');

Route::name('colegio-vacations-venue')
      ->get('/colegio/sede/{barrack}/vacaciones-utiles', 'Colegio\VacationsController@venue');

/**
 *  Dashboard 2019
 */

Route::name('dashboard-index')
      ->get('/dashboard', 'Dashboard\IndexController@index');


//GUIA
// Index
/*Auth::routes();
Route::get('/admin', 'Admin\IndexController@index');
Route::get('/admin/salir', 'Auth\LogoutController@logout');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'rolepageadmin']], function(){
  Route::resource('/blog', 'BlogController');
  Route::resource('/math-olympics', 'MathOlympicsController');
  Route::resource('/math-olympics/results', 'MathOlympicsResultsController');
  Route::resource('/venue-colegio', 'VenueColegioController');
  Route::resource('/venue-academia', 'VenueAcademiaController');
  Route::resource('/banners', 'BannersController');
  Route::resource('/rrhh-forms', 'RhFormsController');
  Route::resource('/popup', 'PopupController');  
  Route::resource('/filemanager', 'FileManagerController');
  Route::resource('/shortlink', 'ShortlinkController');
  Route::resource('/simulacrum', 'SimulacrumResource');
  Route::resource('/solutions', 'SolutionResource');
  Route::resource('/form-sorteo', 'FormSorteoController');  
  Route::resource('/form-claves', 'FormClavesSanMarcosController');
});*/
