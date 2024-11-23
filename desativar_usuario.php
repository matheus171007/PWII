<?php

if ( isset($_GET['Id']) && !empty( $_GET['Id'] ) )
{
    // Lógica do botão desativar
    include 'conexao.php';
    $sql = "UPDATE Usuarios SET ativo = 0 WHERE Id = $_GET[Id]"; 
    $resultado = $conexao->query($sql);
    if ($resultado) 
    {
        header('location: usuarios.php');
    }                                    
    else 
    {
        //caso o update dê false
    }    
}
else
{
    header('location: usuarios.php');
}

?>
