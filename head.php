<header>
    <?php
    if (isset($_GET['name'])) {
    if (isset($pages[$_GET['name']])) {
        echo $pages[$_GET['name']];
    } else {
        echo 'Start';
    }}

    ?>
</header>