<?php

    $linhas = array();
	
    $colunasArquivo = array();
	
    $arquivoAluno = fopen("perguntasNovas.txt", "r") or die("Erro na abertura do arquivo");
	
    $header =  fgets($arquivoAluno);
    $colunasArquivo = explode(";", $header);
	
    while (!feof($arquivoAluno)) 
	{
        $linhas[] = fgets($arquivoAluno);
    }
    fclose($arquivoAluno);
?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>

<h1>Listar Todas as Perguntas</h1>

<br>
	<a href="av1_home.php">Home</a><br>
	<a href="av1_criarPergunta.php">Criar</a><br>
	<a href="av1_alterarPergunta.php">Alterar</a><br>
	<a href="av1_listarPergunta.php">Listar Todas as Perguntas</a><br>
	<a href="av1_listarUmaPergunta.php">Listar Uma Pergunta</a><br>
	<a href="av1_excluirUmaPergunta.php">Excluir</a><br>

<br>

<table>
        <?php
        foreach ($linhas as $L) 
		{
            echo "<tr>";
		
            $C = array();
		
            $C = explode(";", $L);
			
            foreach ($C as $coluna)
			{
                echo "<td>$coluna</td>";
            }
            echo "</tr>";
        }
        ?>
</table>

</body>

</html>
