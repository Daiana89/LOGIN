<?php
$user_ingresado = !empty($_POST['user']);

$pass_ingresado = !empty($_POST['pass']);

$bbdd=[
  'user' =>'admin',
  'pass' =>'1234'
];


if ($bbdd['user'] == $user_ingresado AND $bbdd['pass'] == $pass_ingresado){
  print('Correcto');
} else {
  print('incorrecto');
}


?>