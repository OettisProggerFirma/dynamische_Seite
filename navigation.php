<nav>
    Navigation
    <?php
    echo '<ul>';
    if (isset($_GET['name'])) {
        foreach ($pages as $datei => $name) {
            if ($_GET['name'] == $datei) {
                echo '<li>';
                echo '<a href = "?name=' . $datei . '" style="color: blue">' . $name . '</a >';
            } else {
                echo '<li>';
                echo '<a href = "?name=' . $datei . '" >' . $name . '</a >';
            }
        }
        echo '</li>';
    } else {
        foreach ($pages as $datei => $name) {
            echo '<li>';
            echo '<a href = "?name=' . $datei . '" >' . $name . '</a >';
        }
        echo '</li>';
    }
    echo '</ul>';

    ?>

</nav>