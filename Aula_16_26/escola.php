
<?php require_once 'cabecalho.php'; ?>
<form action="escola.php" method="GET">
    <h1>Instituiçoes de ensino</h1>
    <p> Digite uma instituiçao de ensino:</p>
    <p><input type="tex" name="instituicao" size="30" maxlength="30" required></p>
    <p><input type="submit" name="botao" size="30" value="enviar"></p>

</form>
<?php
    if(isset($_GET['botao'])){
        $instituicao=$_GET['instituicao'];
        echo"<section class='resposta'>";
        //if($instituicao=="SENAC"//$instituicao=="SENAC");
        if(strtolower($instituicao)=="senac"){
            echo"<p>Parabéns, Boa Escolha!</p>";

        }else{
            echo"<p>Ah! $instituicao! Poderia ser SENAC</p>";
        }
echo"</section>";
}
?>


