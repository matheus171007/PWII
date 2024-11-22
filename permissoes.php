<?php include "cabecalho.php" ?>

<?php
    if(isset ($_GET["pesquisa"]))
    {
        $pesquisa = $_GET["pesquisa"];
        if( empty($pesquisa)) 
        {
            // Se a variável estiver vazia executa aqui
            include "conexao.php";
            $sql = "SELECT Id, descricao, role FROM permissoes ORDER BY Id desc";
            $resultado = $conexao -> query($sql);
            $conexao -> close();
        }
        else
        {
            // Aqui vai a lógica da pesquisa
            include "conexao.php";
            $sql = "SELECT Id, descricao, role FROM permissoes WHERE Login LIKE '%$pesquisa%' ORDER BY Id desc";
            $resultado = $conexao -> query($sql);
            $conexao -> close();
        }
    }
    else
    {
        $pesquisa = "";
        include "conexao.php";
        $sql = "SELECT Id, descricao, role FROM permissoes ORDER BY Id desc";
        $resultado = $conexao -> query($sql);
        $conexao->close();
    }
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Permissões
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <a href="novo_permissoes.php" class="btn btn-success">
                            Nova Permissão
                        </a>
                    </div>
                    <div class="col-8">
                        <form action="usuarios.php" method="get">
                        <div class="input-group mb-3">
                            <input type="text" name="pesquisa" value="<?php echo $pesquisa; ?>" class="form-control" placeholder="Digite sua pesquisa aqui...">
                            <button class="btn btn-primary" type="submit">
                                Pesquisar
                            </button>
                        </div>
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>  
                <div class="row">
                    <div class="col-12">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if ($resultado -> num_rows > 0) 
                                    {
                                        while ($row = $resultado -> fetch_assoc()) 
                                        {
                                            echo "<tr>";
                                            echo "<td>" . $row["Id"] . "</td>";
                                            echo "<td>" . $row["descricao"] . "</td>";
                                            echo "<td>" . $row["role"] . "</td>";
                                            echo "<td><a href = 'editar_permissoes.php?Id=$row[Id]' class = 'btn btn-warning' >Editar</a>";
                                            echo "<a href = 'excluir_permissoes.php?Id=$row[Id]' class = 'btn btn-danger'>Excluir</a></td>";
                                            echo "</tr>";
                                        }
                                    } 
                                    else 
                                    {
                                        echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
                                    }             
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "rodape.php"; ?>