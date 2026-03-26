<?php require_once 'cabecalho.php';?>
<form action="livros.php" method="GET">
	<h1>Comparação de Livros</h1>
	<p>Digite o 1&ordm; autor:</p>
	<p><input type="text" name="autor1"
		size="40" maxlength="40" required></p>
	<p>Digite o título do 1&ordm;:</p>
	<p><input type="text" name="titulo1"
		size="50" maxlength="100" required></p>
	<p>Digite o n&ordm; de páginas:</p>
	<p><input type="number" name="paginas1"
		min="1" max="5000" step="1" required></p>
	<hr/>
	<p>Digite o 2&ordm; autor:</p>
	<p><input type="text" name="autor2"
		size="40" maxlength="40" required></p>
	<p>Digite o título do 2&ordm;:</p>
	<p><input type="text" name="titulo2"
		size="50" maxlength="100" required></p>
	<p>Digite o n&ordm; de páginas:</p>
	<p><input type="number" name="paginas2"
		min="1" max="5000" step="1" required></p>
	<p><input type="submit" name="botao" 
		value="Verificar"></p>
</form>
<?php
if (isset($_GET['botao'])) {//se enviou o formulario?
//capturar tudo que foi digitado
$autor1=$_GET['autor1'];
$titulo1=$_GET['titulo1'];
$paginas1=$_GET['paginas1'];
$autor2=$_GET['autor2'];
$titulo2=$_GET['titulo2'];
$paginas2=$_GET['paginas2'];
	echo"<section class='resposta'>";

	if($paginas1>$paginas2){
	echo "<p>O livro do $autor1 de título $titulo1 é o maior!</p>";
		
			echo "<p>O livro do $autor2 de título $titulo2 é o maior!</p>";
		}else{
			echo "<p> Os dois tem o mesmo n&ordm; de páginas!</p>";
		}
		
		echo "</section>";
	}
?>
</body>
</html>

	




