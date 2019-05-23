<?php

include 'header.html';
?>
<!--<h1>Seja bem vindo</h1>-->


<?php
include 'Conection.php';

session_start();
echo $_SESSION['email'];
$email = $_SESSION['email'];

$query1 = "SELECT * FROM usuarios WHERE EMAIL = '$email'";

$consulta1 = mysqli_query($conexao, $query1);

while($linha = mysqli_fetch_array($consulta1)){
				
    echo '<td>'.$linha['id_usuarios'].'</td><br>';
    echo '<td>'.$linha['nome'].'</td><br>';
    echo '<tr><td >'.$linha['sobrenome'].'</td><br>';
    echo '<tr><td >'.$linha['telefone'].'</td><br>';
    echo '<tr><td >'.$linha['CPF'].'</td><br>';
}

?>




<a href="logout.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a>



<?php

include 'footer.html';

?>



