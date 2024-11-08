<?php include "cabecalho.php"?>

<?php
    if (isset ( $_POST["descricao"] )
        & isset ( $_POST["role"])
        )
    {

        if (empty($_POST["descricao"])) 
        {
            echo "<br><div class='alert alert-danger'>Campo Descrição não pode estar em branco!</div>";
        }
        else if (empty($_POST["role"])) 
        {
            echo "<br><div class='alert alert-danger'>Campo Role não pode estar em branco!</div>";
        }
        else
        {
            include "conexao.php";

            $descricao = $_POST["descricao"];
            $role = $_POST["role"];
            
            $query = "INSERT INTO permissoes (DESCRICAO, ROLE) 
            
                    VALUES ( '$descricao', '$role')";

            $resultado = $conexao->query($query);

            if ($resultado)
            {
                echo "<div class = 'alert alert-success'> Salvo no Banco com sucesso! </div>";
            }
            else
            {
                echo "<div class = 'alert alert-danger'> Ocorreu algum erro ao salvar! </div>";
            }

            //Executa a lógica do programa
            //Salvar no banco
        }
    }
    else
        {
            $descricao = "";
            $role = "";
        }

?>

<div class="row">

        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Cadastrar nova permissão
                </div>
                <div class="card-body">
                    <form action="novo_permissoes.php" method="post">

                        <label>Descrição</label>
                        <input scope="row" class="form-control" type="text" name="descricao" value="<?php echo $descricao; ?>"/>
                        <br>

                        <label>Role</label>
                        <input scope="row" class="form-control" type="text" name="role" value="<?php echo $role; ?>"/>
                        <br>
                        
                        <button type='submit' class='btn btn-success'>
                            Enviar os Dados
                        </button>
                    </form>
                </div>
            </div>


        </div>
        <div class="col-4"></div>
</div>


<?php include "rodape.php"?>