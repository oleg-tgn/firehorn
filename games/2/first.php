<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Отборочные | #2 Лан-турнир (5x5) г. Таганрог| Fire Horn League</title>
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

<div class="nav-scroller shadow-sm sub-navbar">
    <section class="container">
        <nav class="nav nav-underline sub-navbar__nav">
            <a class="nav-link sub-navbar__link " href="index.php">Финалы</a>
            <a class="nav-link sub-navbar__link active" href="first.php">Отборочные</a>
            <a class="nav-link sub-navbar__link" href="reglament.php">Регламент</a>
            <a class="nav-link sub-navbar__link" href="timetable.php">Расписание</a>
        </nav>
    </section>
</div>

    <section class="container">
        <h1 class="title" style="margin-bottom: 0; font-size:36px;">
        #2 Лан-турнир (5x5)<br> 
        <span class="main-title__date" style="font-weight: normal;">30 ноября 2019, г. Таганрог</span>
    </h1>
    <p style="color:#fff; text-align: left" class="tournament__rules">
      С&nbsp;16&nbsp;по&nbsp;28&nbsp;ноября проходит предварительная стадия турнира.
      Четыре лучшие команды выходят в&nbsp;финальную стадию, которая пройдет на&nbsp;главной сцене ТРЦ&nbsp;&laquo;Мармелад&raquo;, г.&nbsp;Таганрог, 30&nbsp;ноября.
    </p>

    <p style="color:#fff; text-align: left" class="tournament__rules">
      В финальную стадию турнира выходят команды:<br>
      - <a href="/teams/donstucked-on-chall/" class="tournament__link">DonSTUcked on Chall</a><br>
      - <a href="/teams/easy-game-team/" class="tournament__link">Easy Game Team</a><br>
      - <a href="/teams/x9/" class="tournament__link">x9</a><br>
      - <a href="/teams/venum/" class="tournament__link">Venum</a>
    </p>


    <table class="teams-tournament col-12 col-lg-10 table table-dark table-hover table-bordered" style="margin: 50px auto">
         <thead>
            <tr>
              <th class="center-num" scope="col">#</th>
              <th class="" scope="col">Команда</th>
              <th class="center-num">1</th>
              <th class="center-num">2</th>
              <th class="center-num">3</th>
              <th class="center-num">4</th>
              <th class="center-num">5</th>
              <th class="center-num">6</th>
              <th class="center-num">7</th>
              <th class="center-num">&sum;</th><!-- Итог -->
            </tr>
          </thead>
        <tbody>
          <tr><!-- 1 -->
            <th class="center-num" scope="row">1</th>
            <td>
                <a class="team-link" href="/teams/donstucked-on-chall/">DonSTUcked on Chall</a>
            </td>
            <td class="table-active">&nbsp;</td><!-- 1 -->
            <td class="center-num">1</td><!-- EGT -->
            <td class="center-num">1</td><!-- HD -->
            <td class="center-num">1</td><!-- SM -->
            <td class="center-num">1</td><!-- TS -->
            <td class="center-num">1</td><!-- WSG -->
            <td class="center-num">0</td><!-- x9 -->
            <td class="center-num">5</td><!-- Итог -->
          </tr>
          <tr><!-- 2 -->
            <th class="center-num" scope="row">2</th>
            <td>
                <a class="team-link" href="/teams/easy-game-team/">Easy Game Team</a>
            </td>
            <td class="center-num">0</td><!-- DOC -->
            <td class="table-active">&nbsp;</td><!-- 2 -->
            <td class="center-num">1</td><!-- HD -->
            <td class="center-num">0.5</td><!-- SM -->
            <td class="center-num">1</td><!--TS -->
            <td class="center-num">1</td><!-- WSG -->
            <td class="center-num">0</td><!-- x9 -->
            <td class="center-num">3.5</td><!-- Итог -->
          </tr>
          <tr><!-- 3 -->
            <th class="center-num" scope="row">3</th>
            <td>
                <a class="team-link" href="/teams/hay-day/">Hay Day</a>
            </td>
            <td class="center-num">0</td><!-- DOC -->
            <td class="center-num">0</td><!-- EGT -->
            <td class="table-active">&nbsp;</td><!-- 3 -->
            <td class="center-num">0</td><!-- SM -->
            <td class="center-num">0</td><!-- TS -->
            <td class="center-num">0</td><!-- WSG -->
            <td class="center-num">0</td><!-- x9 -->
            <td class="center-num">0</td><!-- Итог -->
          </tr>
          <tr><!-- 4 -->
            <th class="center-num" scope="row">4</th>
            <td>
                <a class="team-link" href="/teams/sakamoto/">Sakamoto</a>
            </td>
            <td class="center-num">0</td><!-- DOC -->
            <td class="center-num">1</td><!-- EGT -->
            <td class="center-num">1</td><!-- HD -->
            <td class="table-active">&nbsp;</td><!-- 4 -->
            <td class="center-num">0</td><!-- TS -->
            <td class="center-num">1</td><!-- WSG -->
            <td class="center-num">0</td><!-- x0 -->
            <td class="center-num">3</td><!-- Итог -->
          </tr>
          <tr><!-- 5 -->
            <th class="center-num" scope="row">5</th>
            <td>
                <a class="team-link" href="/teams/team-special/">Team Special</a>     
            </td>
            <td class="center-num">0</td><!-- DOC -->
            <td class="center-num">0</td><!-- EGT -->
            <td class="center-num">1</td><!-- HD -->
            <td class="center-num">1</td><!-- SM -->
            <td class="table-active">&nbsp;</td><!-- 5 -->
            <td class="center-num">0</td><!-- WSG -->
            <td class="center-num">0</td><!-- x9 -->
            <td class="center-num">2</td><!-- Итог -->
          </tr>
          
          <tr><!-- 6 -->
            <th class="center-num" scope="row">6</th>
            <td>
                <a class="team-link" href="/teams/wsg/">(WsG)</a>   
            </td>
            <td class="center-num">0</td><!-- DOC -->
            <td class="center-num">0</td><!-- EGT -->
            <td class="center-num">1</td><!-- HD -->
            <td class="center-num">0</td><!-- SM -->
            <td class="center-num">1</td><!-- TS -->
            <td class="table-active">&nbsp;</td><!-- WSG -->
            <td class="center-num">0</td><!-- x9 -->
            <td class="center-num">2</td><!-- Итог -->
          </tr>
          <tr><!-- 7 -->
            <th class="center-num" scope="row">7</th>
            <td>
                <a class="team-link" href="/teams/x9/">x9</a>   
            </td>
            <td class="center-num">1</td><!-- DOC -->
            <td class="center-num">1</td><!-- EGT -->
            <td class="center-num">1</td><!-- HD -->
            <td class="center-num">1</td><!-- SM -->
            <td class="center-num">1</td><!-- TS -->
            <td class="center-num">1</td><!-- WSG -->
            <td class="table-active">&nbsp;</td><!-- 7 -->
            <td class="center-num">6</td><!-- Итог -->
          </tr>
          <tr><!-- 8 -->
            <th class="center-num" scope="row">8</th>
            <td>
                <a class="team-link" href="/teams/venum/">Venum</a>   
            </td>
            <td colspan="8" align="center" style="vertical-align: middle;">Команда проходит в финальную стадию турнира</td><!-- 1 -->
          </tr>
        </tbody>
      </table><!-- end team table-->
    
      <h4 class="title sub-title title_sponsor"><span>Официальные спонсоры</span></h4>  
        <p style="text-align: center;" class="helpers">
            <a href="https://pg19.ru/" target="_blank" class="pg19 off-sponsor">
            </a>
            <a href="https://distillery.com/" target="_blank" class="dist off-sponsor"></a>
        </p>
        <h4 class="title sub-title title_sponsor"><span>Спонсоры</span></h4>  
        <p style="text-align: center;" class="helpers">
            <a href="https://inostudio.com/ru/" target="_blank" class="off-sponsor ino"></a>
            <a href="http://sait.sfedu.ru/" target="_blank" class="off-sponsor sait"></a>
            <a href="http://ictis.sfedu.ru/" target="_blank" class="off-sponsor ictis"></a>
        </p>        

        <h4 class="title sub-title title_sponsor"><span>При поддержке</span></h4>  
        <p style="text-align: center" class="helpers">
            <a href="https://vk.com/paintroom_tattoo" target="_blank">
              <i class="icon-paintroom helpers__i"></i>
            </a>
            <a href="http://www.pitcofe.ru/" target="_blank">
              <i class="icon-pit_kofe helpers__i"></i>
            </a>
            <a href="https://www.instagram.com/klub_1698/" target="_blank">
              <i class="icon-1698 helpers__i"></i>
            </a>
            <a href="https://vk.com/timekofeinia" target="_blank">
               <i class="icon-nyc helpers__i"></i>
            </a>
            <a href="https://www.instagram.com/old_school_coffee/" target="_blank">
              <i class="icon-old_school helpers__i"></i>
            </a>
            <a href="https://www.instagram.com/60_rub/" target="_blank">
              <i class="icon-sixty helpers__i"></i>
            </a>
            <a href="https://vk.com/sic_sfedu_ita" target="_blank">
              <i class="icon-sic helpers__i"></i>
            </a>
        </p>    
    </section>


    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
    ?>
</div>
    </body>
</html>
