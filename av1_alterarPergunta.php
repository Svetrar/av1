<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		
		$ID = "";

		$colunasArquivos = array();
		
		
		//
		$arquivoAlunoIn = fopen("perguntasNovas.txt", "r") or die("Erro na abertura do arquivo");
		
		while (!feof($arquivoAlunoIn)) 
		{
			$linhas[] = fgets($arquivoAlunoIn);
		}
		fclose($arquivoAlunoIn);

		$arquivoAlunoOut = fopen("perguntasNovas.txt", "w") or die("Erro na abertura do arquivo");
		
		$x = 0;

		foreach ($linhas as $valueLinha) 
		{
			$colunasArquivos = explode(";", $valueLinha);
			
			if ($colunasArquivos[0] == $ID)
			{
				$txt = "$id; $pergunta\n";
			} 
			else 
			{
				$txt = $valueLinha;
			}
			fwrite($arquivoAlunoOut, $txt);
		}
		fclose($arquivoAlunoOut);
	}
?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>

<h1>3DAW - Alterar Aluno</h1>

<br>
	<a href="av1_home.php">Home</a><br>
	<a href="av1_criarPergunta.php">Criar</a><br>
	<a href="av1_alterarPergunta.php">Alterar</a><br>
	<a href="av1_listarPergunta.php">Listar Todas as Perguntas</a><br>
	<a href="av1_listarUmaPergunta.php">Listar Uma Pergunta</a><br>
	<a href="av1_excluirUmaPergunta.php">Excluir</a><br>

<br>

<br>

<form action="av1_buscarAlterarPergunta.php" method="GET">

    ID: <input type=text name="id">
		
    <br><br>
	
    <input type="submit" value="Alterar">
	
</form>

<br>


</body>

</html>