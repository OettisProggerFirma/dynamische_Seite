<?php
$dbconn = pg_connect("host=localhost dbname=db_unterricht user=postgres password=root") or die('Could not connect');
$person = '';
if (isset($_GET['person'])) {
    $person = $_GET['person'];
}
$kunden = "Select nachname from t_kunde";
$ergebnis = pg_query_params($dbconn,$kunden,array()) or die('Abfrage fehlgeschlagen: ' . pg_last_error());
?>
<form>

    <h4>Nachname: </h4>
    <input type="text" placeholder="Nachname" name="person" value="<?= $person ?>" list="kunde">
    <button type="submit" name="name" value="Personensuche">Suchen</button>
    <datalist id="kunde">
        <?php
        while ($kunde1 = pg_fetch_array($ergebnis, null, PGSQL_ASSOC)) {
            echo "<option value='" . $kunde1['nachname'] . "'>";
        }
        ?>
    </datalist>
</form>
<br>

<?php
if (isset($_GET['person'])) {

    $query = "SELECT * FROM t_kunde WHERE NACHNAME ='$person'";

    $result = pg_query_params($dbconn,$query,array()) or die('Abfrage fehlgeschlagen: ' . pg_last_error());

    while ($erg = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        echo '<table>';
        foreach ($erg as $key => $value) {
            echo '<td>' . ucfirst($key) . ': ' . '</td><td>' . $value . '</td>';
            echo '</tr>';
        }
        echo '</table>';

    }
    pg_free_result($result);
    pg_close($dbconn);
}
?>

