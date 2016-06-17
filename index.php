<!--todo Forschleife kürzen-->

<?php
$pages = [
    'home.php' => 'Home',
    'fakultaet.php' => 'Fakultaet',
];

if (isset($_GET['name']) && isset($pages[$_GET['name']])) {
    $seite = $_GET['name'];

} else {
    $seite = './Inhalte/home.php';
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Dynamische Webseite</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
echo '<div id="kopf">';
require 'head.php';
echo '</div>';
echo '<div id="mitte">';
echo '<div id="nav">';
require 'navigation.php';
echo '</div>';
echo '<div id="inhalt">';
require 'content.php';
echo '</div>';
echo '</div>';
echo '<div id="fuss">';
require 'foot.php';
echo '</div>';
?>


</body>
</html>