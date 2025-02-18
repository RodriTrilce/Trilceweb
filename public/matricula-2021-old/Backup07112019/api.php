<?php

error_reporting(0);

require 'vendor/autoload.php';

/*
$config = [
	'host'		  => 'localhost',
	'driver'	  => 'mysql',
	'database'	=> 'trilce_fullday',
	'username'	=> 'root',
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

$data = [
	'name_apoderado'      => $d->nameap,
	'dni_apoderado'      => $d->dniap,
	'name'      => $d->name,
	'dni'      => $d->dni,
	'phone'     => $d->phone,
  	'email'     => $d->email,
	'venue' 		=> $d->venue,
	'grade' 		=> $d->grade,
	'comment'	  => $d->comment,
	'method_contact' => $d->method_contact
];


$x = $db->select('dni')->table('form_colegio_2020')->where('dni', $d->dni)->get();

if($x){
	echo json_encode(['status' => 0]);
}else{
	if($db->table('form_colegio_2020')->insert($data))
		echo json_encode(['status' => 1]);

}
