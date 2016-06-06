<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Dynamische Webseite</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if(isset($_GET['name'])) {
    require './Inhalte/'.$_GET['name'];

} else {
    require './Inhalte/home.php';
}
?>
</body>
</html>