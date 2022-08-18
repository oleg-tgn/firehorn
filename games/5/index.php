<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Сетка | <?php include './include/title.php'; ?></title>
    <?php
      include $_SERVER['DOCUMENT_ROOT'].'/include/head_styles.php';
    ?>
</head>
<body>
<div class="preloader"></div>
<div class="wrapper">
    <?php
      include $_SERVER['DOCUMENT_ROOT'].'/include/navbar.php';
    ?>

    <?php
      include './include/submenu.php';
    ?>

    <section class="container">
        <h1 class="title" style="margin-bottom: 0; font-size:36px;">
            #5 Онлайн-турнир (5x5)<br> 
            <span class="main-title__date" style="font-weight: normal;">29 февраля 2020</span>
        </h1>

        <h2 class="title sub-title" style="font-size: 20px;">
            <span>Турнирная сетка</span>
        </h2>
    </section>

    <div style="margin-top: 50px;">
            <iframe src="https://challonge.com/ru/55alfyy7/module" width="100%" height="650" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
    </div>

    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
    ?>
</div>
    </body>
</html>
