<?php include "cabecalho.php"; ?>

<?php

    if (isset($_POST['Id']) && !empty($_POST['Id']) &&
        isset($_POST['Descricao']) && !empty($_POST['Descricao']) &&
        isset($_POST['Valor']) && !empty($_POST['Valor']) &&
        isset($_POST['Codigo_barras']) && !empty($_POST['Codigo_barras'])) {

            include 'conexao.php';
            $sql = "UPDATE Produtos SET Descricao = '$_POST[Descricao]', Valor = $_POST[Valor], Codigo_barras = $_POST[Codigo_barras], Categoria_ID = $_POST[categoria_id] WHERE Id = $_POST[Id]";
            $resultado = $conexao->query($sql);
            if ($resultado) {
                //lógica para mensagem de sucesso
            }                                    
            else {
                //caso o update dê false
            }    
        } 

    if (isset($_GET['Id']) && !empty($_GET['Id'])) {
        include 'conexao.php';
        $sql = "SELECT Id, Descricao, Valor, Codigo_barras, Categoria_Id FROM produtos WHERE Id = $_GET[Id]";
        $resultado = $conexao->query($sql);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row["Id"];
                    $descricao = $row["Descricao"];
                    $valor = $row["Valor"];
                    $codigo_barras = $row["Codigo_barras"];
                    $categoria_id = $row["Categoria_Id"];
                }
            }
            else {
                header('location: produtos.php?erro=Nenhum registro encontrado');
            }
        }
        else {
           header('location: produtos.php?erro=Erro do if do resultado');
        }
    }
    else {
        header('location: produtos.php?erro=Nenhum Id informado');
    }
?>

<form action="editar_produto.php?Id=<?php echo $id; ?>"method="post">
    <input name="Id" value="<?php echo $id ?>"/>
    <input name="Descricao" value="<?php echo $descricao ?>"/>
    <input name="Valor" value="<?php echo $valor ?>"/>
    <input name="Codigo_barras" value="<?php echo $codigo_barras ?>"/>
    <br>
    <select name="categoria_id">
        <?php
            $sql_categorias = "Select Id, Nome from Categorias";
            $resultado_categoria = $conexao->query($sql_categorias);
            if ($resultado_categoria -> num_rows > 0) 
            {
                while ($row = $resultado_categoria -> fetch_assoc())
                {
                    if ($categoria_id == $row[Id])
                    {
                        echo "<option selected value='$row[Id]'> $row[Nome] </option>";
                    }
                    else
                    {
                    echo "<option value='$row[Id]'> $row[Nome] </option>";
                    }              
                }
            }
            else
            {
                echo "<option value='0'> Não tem categoria cadastrada </option>";
            }
            
        ?>
    </select>
    <br>
    <button type="submit">Salvar alterações</button>
</form>

<?php include "rodape.php"; ?>