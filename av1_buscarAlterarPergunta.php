<?php
	
	$ID = "";
	
	$linhas = array();
	
	if ($_SERVER["REQUEST_METHOD"] == "GET") 
	{
		$ID = $_GET["id"];
		
		$arquivoAluno = fopen("perguntasNovas.txt", "r") or die("Erro na abertura do arquivo");
		
		$header =  fgets($arquivoAluno);
		
		$x = 0;
		
		$colunasArquivo = array();
		$achei = false;
		
		while (!feof($arquivoAluno)) 
		{
			$linhas[] = fgets($arquivoAluno);
			
			echo $linhas[$x];
			
			$colunasArquivo = explode(";", $linhas[$x]);
			
			echo "Arquivo: $colunasArquivo[0] / ID PERGUNTA:  $ID<br>";	
			
			
			if ($colunasArquivo[0] == $ID) 
			{
				echo "ACHEI";
				$achei = true;
				break;
			}			
			$x++;
			
		}
		if (!$achei) 
		{
			echo "ID: $ID não encontrado";
		}
    }
?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>

<h1>3DAW - Buscar p/ Alterar Perguntas</h1>

<br>
	<a href="av1_home.php">Home</a><br>
	<a href="av1_criarPergunta.php">Criar</a><br>
	<a href="av1_alterarPergunta.php">Alterar</a><br>
	<a href="av1_listarPergunta.php">Listar Todas as Perguntas</a><br>
	<a href="av1_listarUmaPergunta.php">Listar Uma Pergunta</a><br>
	<a href="av1_excluirUmaPergunta.php">Excluir</a><br>

<br>

<br>

<form action="av1_alterarPergunta.php" method="POST">

        Identificação da Pergunta: <input type="text" name="id" value="<?php echo $colunasArquivo[0]; ?>"> <br>
			
		Pergunta: <input type="text" name="p" value="<?php echo $colunasArquivo[1]; ?>"> <br>
		
		Qtd de pontos: <input type=text name="q" value="<?php echo $colunasArquivo[2]; ?>"> <br>
	
		Grau de dificuldade: <input type=text name="d" value="<?php echo $colunasArquivo[3]; ?>"> <br>
			 	
        <br><br>
			
        <input type="submit" value="Busca Alterar">
</form>

<br>

</body>

</html>
