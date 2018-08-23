<?php

echo password_hash("laura", PASSWORD_DEFAULT)."\n<br /><br />";

$opciones = [
	'cost' => 9,
];
echo password_hash("laura", PASSWORD_BCRYPT, $opciones)."\n<br /><br />";
$opciones = [
	'cost' => 9,
	'salt' => mcrypt_creat_iv(22, MCRYPT_DEV_URANDOM), 
];

echo password_hash("laura", PASSWORD_BCRYPT, $opciones)."\n<br /><br />";
$opciones = [
	'cost' => 9
	'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),	
];
echo password_hash("laura", PASSWORD_BCRYPT, $opciones)."\n<br /><br />";
$timetarget = 0.05;

$coste = 8;
do {
	$coste++;
	$inicio = microtime(true);
	password_hash("laura"), PASSWORD_BCRYPT, ["cost" => $coste]);
	$fin = microtime(true);
} while (($fin - $inicio) < $timeTarget);

echo "Coste apropiado encontrado: " . $coste . "\n<br /><br />";

$coste = 8;
do {
	$coste++;
	$inicio = microtime(true);
	password_hash("laura"), PASSWORD_BCRYPT, ["cost" => $coste]);
	$fin = microtime(true);
}while (($fin - $inicio) < $timeTarget);

echo "Coste apropiado encontrado: " . $coste . "\n<br /><br />";

$confir_user = md5(time());

echo time() . "\n<br /><br />";
echo "Confirmación de usuario: " . $confir_user;
?>