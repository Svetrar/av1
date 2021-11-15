<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		//ids das perguntas
		$ID = $_POST["id"];
		
		//perguntas 
        $P = $_POST["p"];
		
		$Q = $_POST["q"];
		
		$D = $_POST["d"];
		
		
		//pergunta
        if (!file_exists("perguntasNovas.txt")) 
		{
            $header = "ID da Pergunta: ; Pergunta: ; Qtd de pontos: ; Grau de dificuldade: \n";
            file_put_contents("perguntasNovas.txt", $header);
        }
		
        $txt = $ID . ";" . $P . ";" . $Q . ";" . $D;	
        file_put_contents("perguntasNovas.txt", $txt, FILE_APPEND);
		
    }
?>

<!DOCTYPE html>
<html>

<head>
	
</head>

<body>

<h1>3DAW - Criar Pergunta</h1>

<br>
	<a href="av1_home.php">Home</a><br>
	<a href="av1_criarPergunta.php">Criar</a><br>
	<a href="av1_alterarPergunta.php">Alterar</a><br>
	<a href="av1_listarPergunta.php">Listar Todas as Perguntas</a><br>
	<a href="av1_listarUmaPergunta.php">Listar Uma Pergunta</a><br>
	<a href="av1_excluirUmaPergunta.php">Excluir</a><br>

<br>

<form action="av1_criarPergunta.php" method=POST>

	Identificação da Pergunta: <input type=text name="id"> <br>
	
    Pergunta: <input type=text name="p"> <br>
	
	Qtd de pontos: <input type=text name="q"> <br>
	
	Grau de dificuldade: <input type=text name="d"> <br>
	
	
    <br><br>
    <input type="submit" value="Criar Perguntas">
	
</form>

<br>

</body>

</html>
