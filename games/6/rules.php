
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
            #6 Онлайн-турнир (1x1)<br> 
            <span class="main-title__date" style="font-weight: normal;">26 апреля 2020</span>
        </h1>

        <h2 class="title sub-title" style="font-size: 20px;">
            <span>Регламент</span>
        </h2>
        <article class="article col-12 col-lg-8">
            <p class="article__parag">
                Добро пожаловать на турнир 1 на 1. Он пройдет в формате double-elimination, со встречами Bo3 (до двух побед).
            </p>
            <p class="article__parag">
                Double-elimination - это формат турнира, где участники играют до двух поражений. После первого поражения игрок переходит в нижнюю сетку турнира, после двух поражений выбывает из турнира. Даже выбыв в нижнюю сетку игрок имеет возможность выйти в финал и победить в турнире.
            </p>
            <p class="article__parag">
                Игры пройдут на карте "Воющая Бездна". Для победы необходимо выполнить одно из следующих условий: взять "первую кровь", уничтожить первую башню или убить 100 миньонов. После достижения цели, оба игрока выходят из игры.
            </p>
            <p class="article__parag">
                Турнир будет проходить на RU-сервере. К участию допускаются только зарегистрированные аккаунты.
            </p>
            <p class="article__parag">
                Регистрация открыта до 25 апреля 18:00. Чтобы зарегистрироваться, игрок должен оставить комментарий со словом "участвую" и своим ником, под постом:
                <a href="https://vk.com/firehorn?w=wall-186885826_369" target="_blank">https://vk.com/firehorn?w=wall-186885826_369</a>
            </p>
            <p class="article__parag">
                После окончания регистрации на сайте появится расписание игр и будет создан чат участников.
            </p>
            <p class="article__parag">
                Игрок, находящийся выше в турнирной сетке играет на синей стороне. Каждый следующий матч серии игроки меняются сторонами.
            </p>
            <p class="article__parag">
                Чтобы начать игру, любой из игроков создает «свою игру», карта: "Воющая Бездна", тип игры: «выбор в слепую». И приглашает своего оппонента. В лобби, начиная с игрока синей стороны, игроки пишут имена чемпионов, которых нельзя будет выбрать в данном матче. Каждый игрок блокирует по три чемпиона. После этого, игроки переходят к выбору чемпионов.
            </p>
            <p class="article__parag">
                По окончанию серии, победитель присылает два скрина, с результатами своих побед в чат игроков.
            </p>
            <p class="article__parag">
                Если игрок не явится на матч без уважительной причины в течении 15 минут, ему присуждается поражение.
            </p>
            <p class="article__parag">
                Чемпион турнира получит 5 наборов сундуков и ключей! 
            </p>
        </article>
    </section>


    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
    ?>
</div>
    </body>
</html>
