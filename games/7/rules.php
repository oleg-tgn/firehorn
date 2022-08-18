
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
            #7 Онлайн-турнир (1x1)<br> 
            <span class="main-title__date" style="font-weight: normal;">4 июля 2020</span>
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
                Игры пройдут на карте "Ущелье Призывателей". Для победы необходимо выполнить одно из следующих условий: взять "первую кровь", уничтожить первую башню на средней линии или убить 100 миньонов. После достижения цели, оба игрока выходят из игры.
            </p>
            <p class="article__parag">
                Убивать миньонов на верхней и нижней линии, а также лесных и эпических монстров запрещено. Речного краба тоже нельзя!
            </p>
            <p class="article__parag">
                Турнир будет проходить на RU-сервере. К участию допускаются только зарегистрированные аккаунты.
            </p>
            <p class="article__parag">
                Регистрация открыта до 3 июля 23:59. Чтобы зарегистрироваться, игрок должен оставить комментарий со словом "участвую" и своим ником, под постом: <a href="https://vk.com/firehorn?w=wall-186885826_409" target="_blank">https://vk.com/firehorn?w=wall-186885826_409</a>
            </p>
            <p class="article__parag">
                После окончания регистрации, в ВК будет создан чат игроков, на сайте FHL появится турнирная сетка. А в <a href="https://vk.com/firehorn" target="_blank">группе ВК</a> ссылка к ней.
            </p>
            <p class="article__parag">
                Игрок, находящийся выше в турнирной сетке играет на синей стороне. Каждый следующий матч серии игроки меняются сторонами.
            </p>
            <p class="article__parag">
                Чтобы начать игру, игрок синей стороны создает "свою игру" с именем игры "FHL [свой ник]", карта: "Ущелье Призывателей", тип игры: «выбор в слепую». Игрок красной стороны присоединяется к "своей игре" с названием "FHL [имя оппонента]. В лобби, начиная с игрока синей стороны, по очереди, игроки пишут имена чемпионов, которых нельзя будет выбрать в данном матче. Каждый игрок, таким образом, блокирует по три чемпиона. После этого, игроки переходят к выбору чемпионов.
            </p>
            <p class="article__parag">
                Чтобы начать игру, игрок синей стороны создает "свою игру" с именем игры "FHL [свой ник]", карта: "Ущелье Призывателей", тип игры: «выбор в слепую». Игрок красной стороны присоединяется к "своей игре" с названием "FHL [имя оппонента]. В лобби, начиная с игрока синей стороны, по очереди, игроки пишут имена чемпионов, которых нельзя будет выбрать в данном матче. Каждый игрок, таким образом, блокирует по три чемпиона. После этого, игроки переходят к выбору чемпионов.
            </p>
            <p class="article__parag">
                Создание игры:
            </p>
            <div class="gallery">
                <a data-fancybox="gallery" href="img/player_1_step_1.jpg"> <img class="gallery__img" src="img/player_1_step_1.jpg"></a>
                <a data-fancybox="gallery" href="img/player_1_step_2.jpg"> <img class="gallery__img" src="img/player_1_step_2.jpg"></a>
            </div>
            <p class="article__parag">
                Присоединение к игре:
            </p>
            <div class="gallery">
                <a data-fancybox="gallery" href="img/player_2_step_1.jpg"> <img class="gallery__img" src="img/player_2_step_1.jpg"></a>
                <a data-fancybox="gallery" href="img/player_2_step_2.jpg"> <img class="gallery__img" src="img/player_2_step_2.jpg"></a>
            </div>
            
            <p class="article__parag">
                По окончанию серии, победитель присылает два скрина, с результатами своих побед в чат игроков.
            </p>
            <p class="article__parag">
                Если игрок не явится на матч без уважительной причины в течении 10 минут, ему присуждается поражение.
            </p>
            <p class="article__parag">
                Чемпион турнира получит 5 наборов сундуков и ключей!
            </p>
            <p class="article__parag">
                Начало турнира 4 июля, в 12:00.
            </p>


        </article>
    </section>


    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
    ?>
</div>
    </body>
</html>
