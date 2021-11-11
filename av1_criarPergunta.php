<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$ID = $_POST["id"];
        $P1 = $_POST["p1"];
        $P2 = $_POST["p2"];
        $P3 = $_POST["p3"];
		
        if (!file_exists("perguntasNovas.txt")) 
		{
            $header = "ID: ; Pergunta 1: ;Pergunta 2: ;Pergunta 3: \n";
            file_put_contents("perguntasNovas.txt", $header);
        }
		
        $txt = $ID . ";" . $P1 . ";" . $P2 . ";" . $P3;
		
        file_put_contents("perguntasNovas.txt", $txt, FILE_APPEND);

    }
?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>

<h1>Criar Pergunta</h1>

<br>
	<a href="av1_criarPergunta.php">Criar</a><br>
	<a href="av1_listarPergunta.php">Listar Todas as Perguntas</a><br>
	<a href="av1_listarUmaPergunta.php">Listar Uma Pergunta</a><br>
	<a href="av1_excluirUmaPergunta.php">Excluir</a><br>

<br>

<form action="av1_criarPergunta.php" method=POST>

	Identificação de Funcionário: <input type=text name="id"> <br>
    Primeira Pergunta: <input type=text name="p1"> <br>
    Segunda Pergunta: <input type=text name="p2"> <br>
    Terceira Pergunta: <input type=text name="p3"> <br>
    
	
    <br><br>
    <input type="submit" value="Criar Pergunta">
	
</form>

<br>

</body>

</html>