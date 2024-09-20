<?php

echo "<h1>Exercício 1: Variáveis e Tipos de Dados</h1>";

$nome = "Matheus";
$idade = 16;

echo "Meu nome é ".$nome." e tenho ".$idade." anos.";

echo "<hr>";

echo "<h1>Exercício 2: Estruturas de Controle</h1>";

$numero = rand(54, 185);

if ($numero % 2 == 0) 
{
    echo "O número $numero é par!";
}
else if ($numero % 2 == 1)
{
    echo "O número $numero é impar!";
}

echo "<hr>";

$nu = 1970;

echo "<h1>Exercício 3: Laços de Repetição</h1>";

for ($i = 584; $i <= $nu; $i++)
{
    echo "<br>";
    echo "Número: $i";
    if ($i % 2 == 0) 
    {
        echo " é par!";
        echo "<br>";
    }
    else if ($i % 2 == 1)
    {
        echo " não é par!";
        echo "<br>";
    }
}

echo "<hr>";

echo "<h1>Exercício 4: Arrays</h1>";

$frutas = array ("Maça","Banana","Morango","Abacaxi","Amora");

$pessoas = array (
    array("nome" => "Matheus", "telefone" => "666666-6666", "cep" => "666666"),
    array("nome" => "Luan", "telefone" => "777777-7777", "cep" => "7777777"),
    array("nome" => "João", "telefone" => "888888-8888", "cep" => "8888888"),
    array("nome" => "Murilo", "telefone" => "999999-9999", "cep" => "9999999"));

foreach($frutas as $frutas)
{
    echo $frutas."<br>";
}

echo "--------------------------------";

foreach($pessoas as $pessoas)
{
    echo "<br>";
    echo "Nome: ".$pessoas["nome"]."<br>";
    echo "Telefone: ".$pessoas["telefone"]."<br>";
    echo "cep: ".$pessoas["cep"]."<br>";
}

?>