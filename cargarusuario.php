<?php
require_once("class_auth.php");

$auth = new Autenticacion();
$email = $_POST['email'];
$password = $_POST['password'];

$auth->registrar_usuario($email, $password);


header("Location: unidad8.php?reg_ok=1");
exit();
?>