<?php
include 'header.html';
include 'Conection.php';

session_start();

include 'dados_usuarios.php';

if(isset($_POST['codigo_produto'])){
$codigo_produto = ($_POST['codigo_produto']);
$query_buscar_produtos = "SELECT * FROM produtos WHERE Codigo = '$codigo_produto'";
$consulta_buscar_produtos = mysqli_query($conexao, $query_buscar_produtos);

while($produto = mysqli_fetch_array($consulta_buscar_produtos)){
				
    echo '<td>'.$produto['Codigo'].'</td><br>';
    echo '<td>'.$produto['Linha'].'</td><br>';
    
}}
?>
  

<?php
include 'footer.html';
?>



