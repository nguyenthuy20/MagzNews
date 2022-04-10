<?php require_once 'libs/phpti/ti.php' ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>
    <?php startblock('title') ?>
    <?php endblock() ?>
</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />

<!-- Favicons -->
<link rel="assets/admin/touch-icon" href="assets/admin/touch-icon.png">
<link rel="shortcut icon" type="image/x-icon" href="assets/client/images/Magz.ico">
<!--<link rel="shortcut icon" type="image/x-icon" href="assets/admin/favicon.ico">-->

<?php include 'views/admin/layout/css.php' ?>

<?php startblock('css') ?>
<?php endblock() ?>
<body>
    <?php include 'views/admin/layout/header.php' ?>

    <?php startblock('content') ?>
    <?php endblock() ?>

    <?php include 'views/admin/layout/script.php' ?>

    <?php startblock('script') ?>
    <?php endblock() ?>

</body>
</html>
