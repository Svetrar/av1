<?php
    $linhas = array();
    $colunas = array();
    $arquivoAluno = fopen("alunosNovos.txt", "r") or die("Erro na abertura do arquivo");
    $cabecalho =  fgets($arquivoAluno);
    $colunas = explode(";", $cabecalho);
	
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
<h1>Listar Aluno</h1>
<br>
	<a href="ex13_inserirAluno.php">Inserir</a><br>
	<a href="ex13_alterarAluno.php">Alterar</a><br>
	<a href="ex13_listarAlunos.php">Listar</a><br>
	<a href="ex13_excluirArquivo.php">Excluir</a><br>
<br><br>
<table>
        <?php
        foreach ($linhas as $linha) {
            echo "<tr>";
            $colunas1 = array();
            $colunas1 = explode(";", $linha);
			
            foreach ($colunas1 as $coluna)
			{
                echo "<td>$coluna</td>";
            }
            echo "</tr>";
        }
        ?>
</table>
</body>
</html>