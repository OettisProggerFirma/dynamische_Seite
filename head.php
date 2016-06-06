<header>
    <?php
    if(isset($_GET['name'])) {
        echo $pages[$_Get['name']];
    }    else {
        echo 'Home';
    }
    ?>
</header>