<?php

    $L = array();
	
    $C = array();
	
    $arqPerguntas = fopen("perguntasNovas1.txt", "r") or die("Erro na abertura do arquivo");
	
	$arqPerguntas = fopen("perguntasNovas2.txt", "r") or die("Erro na abertura do arquivo");
	
	$arqPerguntas = fopen("perguntasNovas3.txt", "r") or die("Erro na abertura do arquivo");
	
    $header =  fgets($arqPerguntas);
	
    $C = explode(";", $header);
	
    while (!feof($arqPerguntas)) 
	{
        $L[] = fgets($arqPerguntas);
    }
    fclose($arqPerguntas);
?>
<!DOCTYPE html>

<html>

<head>
</head>

<body>

<h1>Listar Perguntas</h1>
<br>

	<a href="av1_criarPergunta.php">Criar</a><br>
	<a href="av1_listarPergunta.php">Listar Todas as Perguntas</a><br>
	<a href="av1_listarUmaPergunta.php">Listar Uma Pergunta</a><br>
	<a href="av1_excluirUmaPergunta.php">Excluir</a><br>
	
<br><br>

<table>

        <?php
		
        foreach ($L as $L) 		
		{
          
		  
		}
        ?>
</table>

</body>

</html>