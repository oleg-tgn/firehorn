
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Регламент | <?php include './include/title.php'; ?></title>
    <?php
      include $_SERVER['DOCUMENT_ROOT'].'/include/head_styles.php';
    ?>
    <style type="text/css">
        i {
            color: #ffac10;
        }
    </style>
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
            <span>Регламент</span>
        </h2>
        <article class="article col-12 col-lg-8">
            <p class="article__parag">Турнир в&nbsp;формате double-elimination с&nbsp;матчами Bo1 и&nbsp;финалом Bo3, пройдет 29.02 и&nbsp;1.03 по&nbsp;<a href="time.html">расписанию</a>. Команды имеют право сыграть матчи в&nbsp;любой день и&nbsp;время до&nbsp;назначенного расписанием, при согласии обоих сторон.</p>
            <p class="article__parag">Команда, находящаяся выше в&nbsp;турнирной сетке, в&nbsp;раундах 1&nbsp;и&nbsp;3&nbsp;играет на&nbsp;синей стороне. В&nbsp;раундах 2&nbsp;и&nbsp;4&nbsp;&mdash; на&nbsp;красной. В&nbsp;нижней сетке наоборот.</p>
            <p class="article__parag">Чтобы начать игру, капитан любой из&nbsp;команд создает &laquo;свою игру&raquo; тип игры: &laquo;выбор для турнира&raquo;. И&nbsp;приглашает капитана второй команды.</p>
            <p class="article__parag">По&nbsp;окончанию игры, капитан победившей команды делает скрин результатов игры и&nbsp;присылает его в&nbsp;чат капитанов с&nbsp;названием победившей команды.</p>
            <p class="article__parag">Если команда не&nbsp;готова начать игру, спустя 20&nbsp;минут после старта матча в&nbsp;соответствии с&nbsp;<a href="time.html">расписанием турнира</a>, ей&nbsp;присуждается поражение. Капитан, должен сделать скрин готовой команды в&nbsp;лобби, и&nbsp;прислать его в&nbsp;чат капитанов.</p>
            <p class="article__parag">Хороших игр!</p>
        </article>
    </section>


    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
    ?>
</div>
    </body>
</html>
