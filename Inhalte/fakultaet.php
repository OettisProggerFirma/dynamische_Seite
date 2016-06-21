<?php
$zahl = '';
if (isset($_GET['zahl'])) {
    $zahl = $_GET['zahl'];
}
?>

    <form>
        <input type="number" placeholder="Zahl" name="zahl" value="<?= $zahl ?>">
        <button type="submit">Fakultät berechnen</button>
    </form>

<?php
if (is_numeric($zahl)) {

    $erg = fak($zahl);

    echo "Ergebnis: $erg";
}

function fak($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * fak($n - 1);
    }
}

?>