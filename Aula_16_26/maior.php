<?php require_once 'cabecalho.php'; ?>
<form action="maior.php" method="GET">
	<h1>Verificar o maior número</h1>
	<p>Digite um número:</p>
	<p><input type="number" name="numero1" min="1" step="1" required></p>
	<p>Digite o segundo número:</p>
	<p><input type="number" name="numero2" min="1" step="1" required></p>
	<p>Digite o terceiro número:</p>
	<p><input type="number" name="numero3" min="1" step="1" required></p>
	<p><input type="submit" name="botao"
	value="Verificar"></p>

</form>
<?php
if(isset($_GET['botao'])){
		/*
		$numero1=$_GET['numero1'];
		$numero2=$_GET['numero2'];
		$numero3=$_GET['numero3'];*/
		$numeros=[$_GET['numero1'],$_GET['numero2'],$_GET['numero3']];
	

		echo "<section class='resposta'>";

		/*
		if($numero1>$numero2&&$numero1>$numero3){
			$maior=$numero1;
		}else if ($numero2>$numero1&&$numero2>$numero3){
			$maior=$numero2;
		}else if ($numero3>$numero1&&$numero3>$numero2){
			$maior=$numero3;
		}else{
			$maior="iguais";
		}
	echo "<p>O $maior é $maior</p>";
	*/

	$maior=max($numeros);
	echo "<p>O maior é $maior</p>";
	sort($numeros);
	echo"<p>Em ordem crescente:</p>";
	foreach ($numeros as $numero){
	echo "<p>$numero</p>";
	}
}
?>
</body>
</html>



