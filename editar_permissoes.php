<?php include "cabecalho.php"; ?>

<?php

    if (isset($_POST['Id']) && !empty($_POST['Id']) &&
        isset($_POST['descricao']) && !empty($_POST['descricao']) &&
        isset($_POST['role']) && !empty($_POST['role'])) {

            include 'conexao.php';
            $sql = "UPDATE Permissoes SET descricao = '$_POST[descricao]', role = '$_POST[role]' WHERE Id = $_POST[Id]";
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
        $sql = "SELECT Id, descricao, role FROM permissoes WHERE Id = $_GET[Id]";
        $resultado = $conexao->query($sql);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row["Id"];
                    $descricao = $row["descricao"];
                    $role = $row["role"];
                }
            }
            else {
                header('location: permissoes.php?erro=Nenhum registro encontrado');
            }
        }
        else {
           header('location: permissoes.php?erro=Erro do if do resultado');
        }
    }
    else {
        header('location: permissoes.php?erro=Nenhum Id informado');
    }
?>

<form action="editar_permissoes.php?Id=<?php echo $id; ?>"method="post">
    <input name="Id" value="<?php echo $id ?>"/>
    <input name="descricao" value="<?php echo $descricao ?>"/>
    <input name="role" value="<?php echo $role ?>"/>
    <button type="submit">Salvar alterações</button>
</form>

<?php include "rodape.php"; ?>