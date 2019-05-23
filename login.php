<?php
include 'Conection.php';

$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);

$query = "SELECT * FROM usuarios WHERE EMAIL = '$email' and PASSWORD = '$password'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){

	session_start();
	$_SESSION['login'] = true;
	$_SESSION['email'] = $email;
//        $_SESSION['id_usuarios'] = $id;
//echo $email;	
header('location:sistema_interno.php');
}
else{
    echo 'falha';
	header('location:index.php?erro');
}
