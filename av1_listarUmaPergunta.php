<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		
		//ids das perguntas
		$ID = $_POST["id"];
		
		//perguntas 
        $P = $_POST["p"];
		
		$Q = $_POST["q"];
		
		$D = $_POST["d"];

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
				$txt = "$ID; $P; $Q; $D\n";
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

<h1>3DAW - Buscar e Listar Pergunta</h1>

<br>
	<a href="av1_home.php">Home</a><br>
	<a href="av1_criarPergunta.php">Criar</a><br>
	<a href="av1_alterarPergunta.php">Alterar</a><br>
	<a href="av1_listarPergunta.php">Listar Todas as Perguntas</a><br>
	<a href="av1_listarUmaPergunta.php">Listar Uma Pergunta</a><br>
	<a href="av1_excluirUmaPergunta.php">Excluir</a><br>

<br>

<br>

<form action="av1_auxListarUmaPergunta.php" method="GET">

    ID: <input type=text name="id">
		
    <br><br>
	
    <input type="submit" value="Listar">
	
</form>

<br>


</body>

</html>
