<header>
    <?php
    if (isset($_GET['name'])) {
//        $abfrage;
//        switch ($_GET['name']) {
//            case 'home.php':
//                echo 'HOME';
//                break;
//            case 'fakultaet.php':
//                echo 'Fakultät';
//                break;
//        }
//        foreach ($pages as $name => $datei) {
           echo $pages[$_GET['name']];

//        }
    } else {
        echo 'Start';
    }
    ?>
</header>