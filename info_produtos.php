<?php
include 'header.html';
include 'Conection.php';
session_start();
if(isset($_SESSION['login'])){ 
    
$query_consulta_produtos = "SELECT * FROM produto";
$consulta_produtos = mysqli_query($conexao, $query_consulta_produtos);  



?>

<?php while($linha = mysqli_fetch_array($consulta_produtos)){ ?>
		<?php if($linha['id_produto'] == $_GET['editar']){ ?>

			<h1>Editar produtos</h1>
			<form method="post" action="edit_produto.php">
				<input type="hidden" name="id_produto" value="<?php echo $linha['id_produto']; ?>">
				<br>
				<label class="badge badge-secondary">Codigo</label><br>
				<input class="form-control" type="text" name="codigo" placeholder="Insira o nome do curso" value="<?php echo $linha['codigo']; ?>">
				<br><br>
				<label class="badge badge-secondary">Linha</label><br>
				<input class="form-control" type="text" name="linha" placeholder="Insira a carga horária"  value="<?php echo $linha['Linha']; ?>"><br><br>
				<input class="btn btn-primary" type="submit" value="Editar">
                                <a href="sistema_interno.php" class="btn btn-primary">Voltar</a>
                                <a href="logout.php" class="btn btn-primary">Logout</a>
			</form>
		<?php } ?>
	<?php } ?>
    <?php
    }else{
        header('location:index.php');
    }

include 'footer.html';
?>




