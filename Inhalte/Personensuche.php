<?php
$person = '';
if (isset($_GET['person'])) {
    $person = $_GET['person'];
}
?>
    <form>

        <h4>Nachname: </h4>
        <input type="text" placeholder="Nachname" name="person" value="<?= $person ?>">
        <button type="submit" name="name" value="Personensuche">Suchen</button>
    </form>
<br>

<?php
$dbconn = pg_connect("host=localhost dbname=db_unterricht user=postgres password=root") or die('Could not connect');

$query = "SELECT * FROM t_kunde WHERE NACHNAME ='$person'";

$result = pg_query($query) or die('Abfrage fehlgeschlagen: ' . pg_last_error());
$erg = pg_fetch_array($result, null, PGSQL_ASSOC);

//var_dump($erg);
echo "<table>\n";
foreach ($erg as $key => $value) {
    echo "\t<tr>\n";
    echo '<td>' . ucfirst($key) . ': ' . '</td><td>' . $value . '</td>';
    echo "\t</tr>\n";
}
echo "</table>\n";
pg_free_result($result);
pg_close($dbconn);

?>