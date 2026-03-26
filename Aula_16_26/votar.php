<?php require_once 'cabecalho.php';
$hoje=new Datetime(date("Y-m-d"));
$antes=date_modify($hoje,"-120 years");
?>
<form action="votar.php" method="POST">
	<h1>Cálculo da idade</h1>
<p>Digite seu nome<p>
	<p><input type="text" name="nome"></p>
	-->
	<p>Digite o ano de nascimento:</p>
	<p><input type="date" name="ano" min="<?= $antes->format("Y-m-d")?>" max="<?= date("Y-m-d")?>" required></p>
		<p><input type="submit" name="botao"
				value="Votar"></p>



			</form>
			<?php

			if (isset($_POST['botao'])) {
				echo "<section class='resposta'>";

 $nome=$_POST['nome'];
 $data_nasci=new DateTime($_POST['ano']);
 $data_atual=new DateTime(date("Y-m-d"));
 $idade=$data_atual->diff($data_nasci)->y;
 
 if($idade>=16&&$idade<18){
 	echo "<p>voto facultativo</p>";
 }else if($idade>=18&&$idade<=70){
 	echo "<p> Obrigatório </p>";
 }else if ($idade>70){
 	echo "<p> Voto facultativo </p>";
 }else
 {
 	echo "<p> nao pode</p>";}
 	
 echo "</section>";
}
?>
</body>
</html>