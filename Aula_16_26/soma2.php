<?php require_once'cabecalho.php';?>
<section class="resposta">
<?php
$numero=$_GET['numero'];
$numero2=$_GET['numero2'];
$soma=$numero+$numero2;
echo "<p>$numero+$numero2 = $soma</p>";
?>
<a herf="soma.php">somar novamente?</a>
</section>
</body>
</thml>



