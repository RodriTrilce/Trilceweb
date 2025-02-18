<?php

error_reporting(0);

require 'vendor/autoload.php';


$config = [
	'host'		  => 'localhost',
	'driver'	  => 'mysql',
	'database'	=> 'c1landing_pages',
	'username'	=> 'c1user_lp',
	'password'	=> 'uj_GG9MBrQew',
	'charset'	  => 'utf8',
	'collation'	=> 'utf8_general_ci',
	'prefix'	  => ''
];


$db = new \Buki\Pdox($config);
$d  = json_decode(file_get_contents('php://input'));

$data = [
	'experiencia' => $d->experiencia,
	'experiencia_detalle' => $d->experiencia_detalle,
	'expectativa_salarial' => $d->expectativa_salarial,
	'nombre' => $d->nombre,
	'dni' => $d->dni,
	'telefono' => $d->telefono,
	'email' => $d->email,
	'centro_estudios' => $d->centro_estudios,
	'carrera' => $d->carrera,
	'distrito' => $d->distrito,
	'porque_tutora' => $d->porque_tutora,
	'porque_trilce'   => $d->porque_trilce,
	'form' => $d->form
];


$x = $db->select('dni')->table('form_trabajo_1')->where([
'dni' => $d->dni,
'form' => $d->form
])->get();

if($x){
	echo json_encode(['status' => 0]);
}else{
	if($db->table('form_trabajo_1')->insert($data))
		echo json_encode(['status' => 1]);

}
