<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
*/

error_reporting(0);

require 'vendor/autoload.php';

/*
$config = [
	'host'		  => 'localhost',
	'driver'	  => 'mysql',
	'database'	=> 'c1landing_pages',
	'username'	=> 'franco',
	'password'	=> '123',
	'charset'	  => 'utf8',
	'collation'	=> 'utf8_general_ci',
	'prefix'	  => ''
];
*/


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


//$cupon 	= str_replace(' ', '', strtoupper($d->cupon));
//$dato 	= $db->select('*')->table('sorteo_cupones')->where('cupon', $cupon)->get();


	
//if($dato->usado == '0')
//{

	$data = [
		'dni'      	=> $d->dni,
		'nombre'      	=> $d->nombre,
		'telefono'    	=> $d->telefono,
		'email'		=> $d->email,
		'interes' 	=> $d->interes,
		'mensaje'	=> $d->mensaje

	];


	//$x = $db->select('dni')->table('form_sorteo')->where('dni', $d->dni)->get();

	//(if($x){
		//echo json_encode(['status' => 0]);
	//}else{
		if($db->table('form_reforzamiento_san_marcos')->insert($data))
		{
			// cupon update
			//$db->table('sorteo_cupones')->where('cupon', $cupon)->update(['usado' => '1']);
			echo json_encode(['status' => 1]);
		}

	//}
	
//}

