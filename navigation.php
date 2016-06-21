<nav>
    Navigation
    <?php
    echo '<ul>';


    foreach ($pages as $datei => $name) {

        if ($seite == $datei) {
            echo '<li>';
            echo '<a href = "?name=' . $datei . '" style="color: blue">' . $name . '</a >';
        } else {
            echo '<li>';
            echo '<a href = "?name=' . $datei . '" >' . $name . '</a >';
        }
    }
    echo '</li>';

    echo '</ul>';

    ?>
</nav>