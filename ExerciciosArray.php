<?php //          0         1          3
//$frutas = array("maça", "laranja", "banana");

//print_r($frutas); // Escreve na tela os dados básicos de array

//var_dump($frutas); // Detalha os dados do array

//echo count($frutas); // Escreve na tela a quantidade de itens que o array possui

//array_push($frutas, "kiwi"); // Adiciona um novo item ao array

//foreach($frutas as $frutas)
//{
//    echo $frutas;
//}

// Exercicio

//Gere um array que cada indice desse array receba um novo 
//array com as Chaves Nome, Idade e email
//com seus respectivos valores inventados aleatoriamente



$pessoa = array
(
    array
    (
        "nome" => "Luan",
        "idade" => 16,
        "email" => "luan@email.com",
    ),

    array
    (
        "nome" => "Ytalo",
        "idade" => 17,
        "email" => "ytalo@email.com",
    ),

    array
    (
        "nome" => "Murilo",
        "idade" => 17,
        "email" => "murilo@email.com",
    ),

    array
    (
        "nome" => "João",
        "idade" => 17,
        "email" => "joao@email.com",
    ),

    array
    (
        "nome" => "Fernando",
        "idade" => 17,
        "email" => "fernando@email.com",
    ),

    array
    (
        "nome" => "Matheus",
        "idade" => 17,
        "email" => "matheus@email.com",
    ),

    array
    (
        "nome" => "Laura",
        "idade" => 16,
        "email" => "laura@email.com",
    ),

    array
    (
        "nome" => "Jonas",
        "idade" => 17,
        "email" => "jonas@email.com",
    ),

    array
    (
        "nome" => "Marcos",
        "idade" => 17,
        "email" => "marcos@email.com",
    ),

    array
    (
        "nome" => "Fabio",
        "idade" => 32,
        "email" => "fabio@email.com",
    ),

);

echo "<table border='5'>";
echo "<tr>";
echo "<td>Nome</td>";
echo "<td>Idade</td>";
echo "<td>Email</td>";
echo "</tr>";
for($i = 0; $i < count($pessoa); $i++)
{
    echo "<tr>";
    echo "<td>".$pessoa[$i]["nome"]."</td>";
    echo "<td>".$pessoa[$i]["idade"]."</td>";
    echo "<td>".$pessoa[$i]["email"]."</td>";
    echo "</td>";
}

foreach($pessoa as $a)
{
    echo "<tr>";
    foreach($a as $chave => $valor)
    {
        echo "<td>".$valor."</td>";
    }
    echo "</tr>";
}

echo "</table>";



?>