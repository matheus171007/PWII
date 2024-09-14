
<?php include "cabecalho.php"; ?>

<?php

    $numero = 0;

    $sorteio = Array
    ("JONAS SILVA JATOBA",      
    "MARCOS VINÍCIUS SANCHES CARDOSO",     
    "MARIANA DOS SANTOS",      
    "MATHEUS MARQUEZIM GENEBRA",       
    "RAFAEL TSUTAI MASSAKI",       
    "REBÉCA RODRIGUES DE OLIVEIRA",        
    "RODOLFO LEONARDO ROMO",       
    "RODRIGO MIRANDA DOS SANTOS",      
    "SARAH VITÓRIA PEDROSO DA SILVA",      
    "TAYNA ADRIANA DA SILVA",      
    "VANESSA ALVARES BERNARDO",        
    "VINICIUS GABRIEL GONÇALVES DOS SANTOS",       
    "VITOR TAKAYUKI HIROTOMI",     
    "WYLLIAM DOS SANTOS FLORENTINO");

    echo "<h1>"; 
    echo "Atividade para compor a nota de PW";
    echo "</h1>";

    echo "<h2>";
    $numero = rand(0, 13);
    echo "O número sorteado é: ".$numero;
    echo "</h2>";

    echo "<h2>";
    echo "A pessoa ganhadorá é: ".$sorteio[$numero];
    echo "</h2>"

?>

<?php include "rodape.php"; ?>
