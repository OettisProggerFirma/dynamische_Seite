<?php
//Datenbankverbindung herrstellen
$dbconn = pg_connect("host=localhost dbname=db_unterricht user=postgres password=root") or die('Could not connect');

//Abfrage ausführen
$query = 'SELECT * FROM t_kunde';

//ggf. Fehler ausgeben
$result = pg_query($query) or die('Abfrage fehlgeschlagen: ' . pg_last_error());

// Ergebnisse in HTML ausgeben
echo "<table>\n";
echo '<th>' . 'Vorname' . '</th>' . '<th>' . 'Nachname' . '</th>';
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
//    foreach ($line as $col_value) {
//        echo "\t\t<td>$col_value</td>\n";
//    }

    echo '<td>' . $line['vorname'] . '</td>' . '<td>' . $line['nachname'] . '</td>';

    echo "\t</tr>\n";
}


echo "</table>\n";

// Speicher freigeben
pg_free_result($result);

// Verbindung schließen
pg_close($dbconn);

?>