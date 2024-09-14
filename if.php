
<?php include "cabecalho.php"; ?>

    <h1>Estrutura Condicional (IF ELSE)</h1>

    <p>$inteira = 10 </p>
    <p>$nome = "Prof" </p>
    <p>$valor = 10.50 </p>
    <p>$ativo = true </p>

    <pre>
     
        if($inteira == 10)
        {
            echo "O conteudo é 10";
        }
        else if($inteira >= 11)
        {
            echo "Maior ou Igual a 11";
        }
        else
        {
            echo "Não é 10";
        }
    </pre>
    <?php
            $inteira = 9;
            if($inteira == 10)
            {
                echo "<h2>A variável é 10</h2>";
            }
            else if($inteira >= 11)
            {
                echo "<h2>A variável é maior ou igual a 11</h2>";
            }
            else
            {
                echo "<h2>A variável só pode ser menor que 10</h2>";
            }
        ?>

    <p>
        As variaveis string podem ser contados os caracteres e usados no if
    </p>
    <pre>
        if( strlen($nome) > 10 )
        {
            echo "Seu nome tem mais que 10 caracteres quantidade é ".strlen($nome);
        }
    </pre>
        <?php
        $nome = "ney";
        if(strlen($nome) > 5)
        {
            echo "<h2>Seu nome tem mais que 10 caracteres quantidade é ".strlen($nome)."</h2>";
        }
        else
        {
            echo "<h2>Seu nome tem menos que 10 caracteres quantidade é ".strlen($nome)."</h2>";
        }
        ?>

    <p>
        Podemos verificar se a variavel $nome está vazia
    </p>
    <pre>
        if( empty($nome) )
        {
            echo "Sua variavel está vazia";
        }
    </pre>
    <p>
        Também podemos comparar string normalmente
    </p>
    <pre>
        if ($nome == "Fernando")
        {
            echo "Nome igual";
        }
        else
        {
            echo "Nomes diferentes";
        }
    </pre>
    <p>
        Podemos verificar se a variavel é verdadeira ou falsa  
    </p>
    <pre>
        if($ativo)
        {
            echo "Verdadeira";
        }
        else
        {
            echo "Falsa";
        }
    </pre>

    <?php include "rodape.php"; ?>
