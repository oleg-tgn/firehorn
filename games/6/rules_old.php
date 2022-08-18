
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Онлайн турнир 4 - 5 апреля по League of Legends</title>
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
        <h1 class="title main-title" style="margin-bottom: 0;">
            <span class="main-title__date">Онлайн турнир 4 - 5 апреля</span>
        </h1>
        <h2 class="title sub-title" style="margin-top: 0; font-size: 20px;">
            <span>Регламент</span>
        </h2>
        <article class="article col-12 col-lg-8">
            <p class="article__parag">
                Турнир в&nbsp;формате double-elimination с&nbsp;матчами Bo1 и&nbsp;финалом Bo3, пройдет 4 - 5 апреля (субботу - воскресенье). С 17 до 24 часов по МСК.
            </p>
            <p class="article__parag">
                Турнир будет проходить на RU-сервере. К участию допускаются команды из 5 человек и 2х запаcных.
            </p>
            <p class="article__parag">
                Double-elimination  - это формат турнира, где команды играют до двух поражений. После первого поражения команда переходит в нижнюю сетку турнира, после двух поражений выбывает из турнира. Даже выбыв в нижнюю сетку команда имеет возможность выйти в финал и победить в турнире.
                Пример турнирной сетки и расписания можно посмотреть на <a href="/tournaments/2020/02/24/index.php">прошлом онлайн-турнире</a>.
            </p>
            <p class="article__parag">
                Bo3 - best of 3, игра до двух побед.<br>
                Bo1 - best of 1, игра до одной победы.<br>
            </p>
            <p class="article__parag">
                Регистрация на турнир открыта до 2 апреля 23:59.
                Капитан команды заполняет информацию об участниках и оплачивает стартовый взнос. Команда считается зарегистрированной на турнир только после оплаты стартового взноса. После регистрации с капитаном команды свяжется в личных сообщениях vk администратор. 
                Если возникли трудности при регистрации команды, можно задать его в личных сообщениях <a href="https://vk.com/stelmah_o" target="_blank">администратору</a> или в <a href="https://vk.com/firehorn" target="_blank">группе</a>.
            </p>
            <p class="article__parag">
                После окончания регистрации на сайте появится расписание игр и составы команд. Будет создан чат, куда будут добавлены все капитаны команд.
            </p>
            <p class="article__parag">
                Участники команды не вправе менять аккаунты или никнеймы после публикации составов команд и до окончания турнира.
                Если кто-то из игроков не в состоянии участвовать в турнире под зарегистрированным аккаунтом, в турнире может участвовать запасной игрок. В противном случае команда получает техническое поражение, стартовый взнос команде не возвращается.
            </p>
            <p class="article__parag">
                Команда, находящаяся выше в&nbsp;турнирной сетке играет на&nbsp;синей стороне.
            </p>
            <p class="article__parag">
                Чтобы начать игру, капитан любой из&nbsp;команд создает &laquo;свою игру&raquo; тип игры: &laquo;выбор для турнира&raquo;. И&nbsp;приглашает капитана второй команды.
            </p>
            <p class="article__parag">
                По&nbsp;окончанию игры, капитан победившей команды делает скрин результатов игры и&nbsp;присылает его в&nbsp;чат капитанов с&nbsp;названием победившей команды.
            </p>
            <p class="article__parag">
                Если команда не&nbsp;готова начать игру, спустя 20&nbsp;минут после старта матча в&nbsp;соответствии с&nbsp;<a href="time.php">расписанием турнира</a>, ей&nbsp;присуждается поражение. Капитан, должен сделать скрин готовой команды в&nbsp;лобби, и&nbsp;прислать его в&nbsp;чат капитанов.
            </p>
            <p class="article__parag">
                Стримы промежуточных игр не планируются, однако если кто-то будет вести, мы обязательно опубликуем ссылку в нашей <a href="https://vk.com/firehorn" target="_blank">группе Вконтакте</a>.
                Трансляция финальной серии игр будет вестись на <a href="https://www.youtube.com/channel/UChaA9krZaM5qgR6-u0YE2pA" target="_blank">наш YouTube</a>.
            </p>
            <p class="article__parag">
                Призовой фонд составляет 70% от стартовых взносов команд.<br>
                Разделится в следующем соотношении:<br>
                I место - 50%<br>
                II место - 30%<br>
                III место - 20%<br>
            </p>
            <p class="article__parag">Хороших игр!</p>
        </article>
    </section>


    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
    ?>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(56132044, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56132044" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    
    </body>
</html>
