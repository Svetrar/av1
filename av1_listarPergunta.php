<?php

    $L = array();
	
    $C = array();
	
    $arquivoAluno = fopen("perguntasNovas.txt", "r") or die("Erro na abertura do arquivo");
	
    $header =  fgets($arquivoAluno);
	
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
            echo "<tr>";
            $expandindoColunas = array();
            $expandindoColunas = explode(";", $expandindoLinhas);
			
            foreach ($expandindoColunas as $expandindoColunas)
			{
                echo "<td>$coluna</td>";
            }
            echo "</tr>";
        }
        ?>
</table>

</body>

</html>