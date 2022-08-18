<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Составы | <?php include './include/title.php'; ?></title>
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
            #9 ЛАН-туринир (5x5)<br> 
            <span class="main-title__date" style="font-weight: normal;">20 сентября 2020</span>
        </h1>
        <h2 class="title sub-title" style="margin-top: 0; font-size: 20px;">
            <span>Составы</span>
        </h2>
    

        <div style="margin-top: 50px;">
          <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS9jyEBxzfvjoHyT0_e0Sbe3-Cy6PrVHxt2sXFR6r1tC3zPP2XM2C4605lAl9ohYrdzyopwHCM0JrMm/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false" style="width: 100%; height: 600px"></iframe>
        </div>
    </section>

    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
    ?>
</div>
    </body>
</html>
