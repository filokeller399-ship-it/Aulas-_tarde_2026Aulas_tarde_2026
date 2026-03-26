<?php require_once 'cabecalho.php';?>
<form action="imc.php" method="Get">
	<h1>Calculo do I.M.C</h1>
<p>Digite o peso</p>
	<p><input type="number" name="peso" step="0.01" required></p>
<p> Digite altura</p>
<p><input type="number" name="altura" step="0.01" required></p>
	<p><input type="submit" name="botao"value="Calcular"></p>
</form>
<?php
if(isset($_GET['botao'])) {
	$peso=$_GET['peso'];
	$altura=$_GET['altura'];
	$imc=$peso/($altura*$altura);

	echo "resposta";



	
}
	
	
