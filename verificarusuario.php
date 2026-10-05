<?php
require_once("class_auth.php");

$auth = new Autenticacion();
$email = $_POST['email'];
$password = $_POST['password'];

if ($auth->verificar_usuario($email, $password)) {
    
    header("Location: unidad8.php?login_ok=1");
} else {
   
    header("Location: unidad8.php?login_error=1");
}
exit();
?>