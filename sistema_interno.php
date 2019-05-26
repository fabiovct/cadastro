<?php
include 'header.html';
include 'Conection.php';
session_start();
if(isset($_SESSION['login'])){
    
    include 'dados_usuarios.php';
    

    if(isset($_POST['codigo_produto'])){
        $codigo_produto = ($_POST['codigo_produto']);
        $query_buscar_produtos = "SELECT * FROM produto WHERE codigo = '$codigo_produto'";
        $consulta_buscar_produtos = mysqli_query($conexao, $query_buscar_produtos);
?>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} ); 
</script>
        <div class="container mt-4">               
            <table id="example" class="table table-striped table-bordered" style="width:100%">

           <tr>
                <th>Codigo</th>
                <th>Linha</th>
                <th>Descrição</th>
                <th>Ações</th>
               
            </tr>
              
        <?php
        while($produto = mysqli_fetch_array($consulta_buscar_produtos)){
            
        $codigo_produtos = utf8_encode($produto['codigo']);
            $linha_produto = utf8_encode($produto['Linha']);
            $descricao_produto = utf8_encode($produto['Descricao']);
//            $qt_estoque_produto = utf8_encode($produto['qt_estoque']);
//            $cod_fabricante_produto = utf8_encode($produto['cod_fabricante']);
//            $obs_produto = utf8_encode($produto['obs']);
//            $preco_venda_produto = utf8_encode($produto['preco_venda']);
//            $preco_liq_produto = utf8_encode($produto['preco_liq']);
//            $total_produto = utf8_encode($produto['total']);
            
                ?>


            <tr>
                <td><?php echo $codigo_produtos;  ?></td>
                <td><?php echo $linha_produto;  ?></td>
                <td><?php echo $descricao_produto;  ?></td>
                <td><a href="sistema_interno.php"><h5 style="font-size: 15px; "><strong>Mais Informações</strong></h5></a></td>
            </tr>        
                <?php

    }}}else{
        header('location:index.php');
    }
?>
        </table>
            </div>     

<?php
include 'footer.html';
?>



