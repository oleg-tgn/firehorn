
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
            #9 ЛАН-турнир (5x5)<br> 
            <span class="main-title__date" style="font-weight: normal;">20 сентября 2020</span>
        </h1>
        <h2 class="title sub-title" style="margin-top: 0; font-size: 20px;">
            <span>Регламент</span>
        </h2>
        <article class="article col-12 col-lg-8">
            <p class="article__parag">
                Добро пожаловать на командный лан-турнир по League of Legends!
            </p>
            <p class="article__parag">
                Дата: 20 сентября<br>
                Время: 13:00<br>
                Место: <a href="https://goo.gl/maps/VAKfadf8kabcSR9bA" target="_blank">Компьютерный зал "Легион", г.Таганрог, ул.Чехова, 322/2</a>
                <br>
                Стартовый взнос: 200р (с участника)
            </p>   
            <p class="article__parag"> 
                Формат соревнования single-elimination со встречами Bo1, после одного поражения команда выбывает из турнира.
            </p>
            <p class="article__parag">
                Турнир пройдет на RU-сервере.
            </p>
            <p class="article__parag">
                В турнире примут участие 8 команд. Для регистрации капитан команды должен заполнить форму на <a href="https://fire-horn.ru">главной странице сайта</a>, а после оплатить стартовый взнос. Сделать это можно онлайн переводом <a href="https://vk.com/stelmah_o" target="_blank">организатору соревнований</a> либо лично в <a href="https://goo.gl/maps/VAKfadf8kabcSR9bA" target="_blank">компьютерном клубе</a>. Команда считается зарегистрированной после заполнения формы и внесения стартового взноса. Регистрация закрывается после набора 8 команд!
            </p>
            <p class="article__parag">
                На турнир можно приносить свои девайсы: клавиатуры/мыши.
            </p>
            <p class="article__parag">
                Во время турнира будет вестись трансляция на twitch-канале и на большом экране в клубе. Игрокам можно приглашать своих друзей поболеть за них, это бесплатно.
            </p>
            <p class="article__parag">
                Выбывшие из турнира команды смогут следить за трансляцией в клубе. Либо поиграть за свободными компьютерами между собой вне зачета.
            </p>

            <p class="article__parag">
                1 место:<br> 
                &nbsp;&nbsp;&nbsp;&nbsp;- сертификат на 8 часов игры в клубе своей командой;<br> 
                &nbsp;&nbsp;&nbsp;&nbsp;- кружка в фирменном стиле Fire Horn League каждому игроку.<br><br> 
                2 место:<br> 
                &nbsp;&nbsp;&nbsp;&nbsp;- сертификат на 4 часов игры в клубе своей командой;<br> 
                &nbsp;&nbsp;&nbsp;&nbsp;- сундук и ключ каждому игроку.<br><br>
                Остальные игроки: <br> 
                &nbsp;&nbsp;&nbsp;&nbsp;- сертификат на 1 час игры в клубе.<br> 
            </p>

            <p class="article__parag">
                Во время перерывов будет живое исполнение каверов из League of Legends!
            </p>
            <p class="article__parag">
                Тематические костюмы League of legends, фото/видео съемка и посты в соц сетях приветствуются!
            </p>
            <p class="article__parag">
                Удачи на полях сражений!
            </p>
        </article>

        <p style="text-align: center; margin-top: 50px">
            <a href="https://vk.com/legion_tgn" target="_blank">
                <img src="legion.svg" width="125px">
            </a>
        </p>
    </section>


    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
    ?>
</div>
    </body>
</html>
