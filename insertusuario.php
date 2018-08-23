<?php
$password = "laura";
$pass_fort = password_hash($password, PASSWORD_DEFAULT). "<br/><br/>";
echo password_hash("laura", PASSWORD_DEFAULT). "/n<br/><br/>";

$confir_user = md5("laura");
echo "confirmacion de usuario: ". $confir_user; 

?>