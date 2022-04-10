<?php require_once 'libs/phpti/ti.php' ?>

<!DOCTYPE html>
    <html lang="en">
    <meta charset="UTF-8">
    <title>
        <?php startblock('title') ?>
        <?php endblock() ?>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
    <meta name="author" content="Kodinger">
    <meta name="keyword" content="magz, html5, css3, template, magazine template">
    <!-- Shareable -->
    <meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
    <meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/assets/client/images/preview.png" />
    <title>Magz &mdash; Responsive HTML5 &amp; CSS3 Magazine Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/client/images/Magz.ico">

    <?php include 'views/client/layouts/css.php' ?>

    <?php startblock('css') ?>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css"/>
    <?php endblock() ?>
<body>

    <?php include 'views/client/layouts/header.php' ?>

    <?php startblock('content') ?>
    <?php endblock() ?>

    <?php include 'views/client/layouts/footer.php' ?>
    <?php include 'views/client/layouts/script.php' ?>

    <?php startblock('script') ?>
<!--        <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>-->
<!--        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"-->
<!--                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"-->
<!--                crossorigin="anonymous"></script>-->
<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
                defer></script>
    <?php endblock() ?>
</body>
</html>

