<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

if(env('APP_ENV') == 'local')
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");	
}

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//, 'middleware' => 'auth'
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
  Route::post('/banners', 'BannersController@storePositions');
});


// Academia/Olimpiadas = Inscripción en linea
Route::post('/academia/olimpiadas-matematicas/type',    'Academia\Apis\OlympicsApiController@type');
Route::post('/academia/olimpiadas-matematicas/info',    'Academia\Apis\OlympicsApiController@info');

// Academia/Simulacro = Inscripción en linea
Route::post('/academia/simulacros/venue',   'Academia\Apis\SimulacrumApiController@venue');
Route::post('/academia/simulacros/type',    'Academia\Apis\SimulacrumApiController@type');
Route::post('/academia/simulacros/area',    'Academia\Apis\SimulacrumApiController@area');
Route::post('/academia/simulacros/carrera', 'Academia\Apis\SimulacrumApiController@carrera');

// Academia/Entering = Lista de cachimbos api
Route::get('/academia/entering/{university}/{year}', 'Academia\EnteringResourceController@show');

// Academia/Enrollment = Matricula en linea
Route::post('/academia/enrollment/check', 'Academia\EnrollmentApiResourceController@check');
Route::get('/academia/enrollment/{university}', 'Academia\EnrollmentResourceController@university');
Route::get('/academia/enrollment/{university}/cycle/{cycle}', 'Academia\EnrollmentResourceController@cycle');
Route::get('/academia/enrollment/{university}/{venue}', 'Academia\EnrollmentResourceController@venue');
#Route::get('/academia/enrollment/{university}/{venue}/{cycle}', 'Academia\EnrollmentResourceController@{cycle}');

Route::get('/academia/preparation/cycles', 'Academia\PreparationApiController@cycle');

// Academia/Beginnings = Nuevos inicios
Route::post('/academia/beginnings', 'Academia\BeginningsApiResourceController@index');

// Out/Inscription = Landing academia pre-matricula en linea
Route::post('/out/inscription', 'Out\InscriptionController@store');

// San Valentin
Route::post('/out/valentin', 'Out\ValentinController@insert')->middleware('cors');
Route::get('/out/valentin/{id}', 'Out\ValentinController@read')->middleware('cors');
Route::get('/out/valentin/download/{id}', 'Out\ValentinController@download');