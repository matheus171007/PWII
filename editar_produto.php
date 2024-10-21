<?php include "cabecalho.php"; ?>

<?php

    if (isset($_POST['ID']) && !empty($_POST['ID']) &&
        isset($_POST['DESCRICAO']) && !empty($_POST['DESCRICAO']) &&
        isset($_POST['VALOR']) && !empty($_POST['VALOR']) &&
        isset($_POST['CODIGO_BARRAS']) && !empty($_POST['CODIGO_BARRAS'])) {

            include 'conexao.php';
            $sql = "UPDATE produtos SET DESCRICAO = '$_POST[DESCRICAO]', VALOR = $_POST[VALOR], CODIGO_BARRAS = $_POST[CODIGO_BARRAS] WHERE ID = $_POST[ID]";
            $resultado = $conexao->query($sql);
            if ($resultado) {
                //lógica para mensagem de sucesso
            }                                    
            else {
                //caso o update dê false
            }    
        } 

    if (isset($_GET['ID']) && !empty($_GET['ID'])) {
        include 'conexao.php';
        $sql = "SELECT ID, DESCRICAO, VALOR, CODIGO_BARRAS FROM produtos WHERE ID = $_GET[ID]";
        $resultado = $conexao->query($sql);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row["ID"];
                    $descricao = $row["DESCRICAO"];
                    $valor = $row["VALOR"];
                    $codigo_barras = $row["CODIGO_BARRAS"];
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
        header('location: produtos.php?erro=Nenhum ID informado');
    }
?>

<form action="editar_produto.php?id=<?php echo $id; ?>"method="post">
    <input name="ID" value="<?php echo $id ?>"/>
    <input name="DESCRICAO" value="<?php echo $descricao ?>"/>
    <input name="VALOR" value="<?php echo $valor ?>"/>
    <input name="CODIGO_BARRAS" value="<?php echo $codigo_barras ?>"/>
    <button type="submit">Salvar alterações</button>
</form>

<?php include "rodape.php"; ?>