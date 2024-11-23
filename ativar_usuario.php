<?php

if ( isset($_GET['Id']) && !empty( $_GET['Id'] ) )
{
    // Lógica do botão ativar
    include 'conexao.php';
    $sql = "UPDATE Usuarios SET ativo = 1 WHERE Id = $_GET[Id]"; 
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
