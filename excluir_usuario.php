<?php

if ( !empty($_GET['Id']) && isset( $_GET['Id'] ) )
{
    // Lógica de exclusão
    include 'conexao.php';
    $sql = "Delete from Usuarios where Id = $_GET[Id]"; 
    $resultado = $conexao -> query($sql);
    if ($resultado)
    {
        header('location: usuarios.php');
    }
    else
    {
        // Aqui vai uma lógica caso o delete from não funcione
        // Aqui fica o mesmo redirecionamento porém com a mensagem de erro
    }
}
else
{
    header('location: usuarios.php');
}

?>