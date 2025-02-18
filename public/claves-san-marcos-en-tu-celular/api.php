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

$op_whatsapp = null;
$op_email = null;
//$op_facebook = null;

foreach ($d->enviar_a as $key) {
	if($key == 'w') $op_whatsapp = 1;	
	if($key == 'e') $op_email = 1;	
	//if($key == 'f') $op_facebook = 1;	
}

$data = [
	'nombre' => $d->nombre,
	'apellido' => $d->apellido,
	'email' => $d->email,
	'telefono' => $d->telefono,
	'distrito' => $d->distrito,
	'op_whatsapp' => $op_whatsapp,
	'op_email' => $op_email,
	//'op_facebook' => $op_facebook,
];


/*
$x = $db->select('dni')->table('form_claves_san_marcos_marzo')->where('dni', $d->dni)->get();

if($x){
	echo json_encode(['status' => 0]);
}else{*/

$db->table('form_claves_san_marcos_septiembre')->insert($data);
echo json_encode(['status' => 1]);

//}
