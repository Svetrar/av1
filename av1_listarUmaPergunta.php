<!DOCTYPE html>
<html>

<head>
</head>

<body>

<h1>3DAW - Listar Apenas Uma Pergunta</h1>

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

        Identificação da Pergunta: <input type=text name="id" value='<?php echo $colunasArquivo[0]; ?>'> <br>
			
		Pergunta: <input type=text name="p" value='<?php echo $colunasArquivo[1]; ?>'> <br>
			 	
        <br><br>
			
        <input type="submit" value="Alterar">
</form>

<br>

</body>

</html>