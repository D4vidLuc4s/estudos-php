<html>
<body>
<form method="post" action="ex6.php">
    <label for="mes">Digite um número entre 1 e 12: </label>
    <input type="number" id="mes" name="mes">
    <input type="submit" value="Submit">
</form>

<?php
$mes = $_POST['mes'];

if ($mes == 1) {
    echo "Janeiro";
} elseif ($mes == 2) {
    echo "Fevereiro";
} elseif ($mes == 3) {
    echo "Março";
} elseif ($mes == 4) {
    echo "Abril";
} elseif ($mes == 5) {
    echo "Maio";
} elseif ($mes == 6) {
    echo "Junho";
} elseif ($mes == 7) {
    echo "Julho";
} elseif ($mes == 8) {
    echo "Agosto";
} elseif ($mes == 9) {
    echo "Setembro";
} elseif ($mes == 10) {
    echo "Outubro";
} elseif ($mes == 11) {
    echo "Novembro";
} elseif ($mes == 12) {
    echo "Dezembro";
} else {
    echo "Digite um número válido";
}
?>

</body>
</html>