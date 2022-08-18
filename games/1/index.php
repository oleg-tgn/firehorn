<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>#1 Лан-турнир (5x5) г. Таганрог| Fire Horn League</title>
    <?php
      include $_SERVER['DOCUMENT_ROOT'].'/include/head_styles.php';
    ?>
</head>
<body>
<div class="wrapper">
    <?php
      include $_SERVER['DOCUMENT_ROOT'].'/include/navbar.php';
    ?>

    <section class="container">
        <h1 class="title" style="margin-bottom: 0; font-size:36px;">
            #1 Лан-турнир (5x5)<br> 
            <span class="main-title__date" style="font-weight: normal;">5 октября 2019, г. Таганрог</span>
        </h1>

        <h1 class="title">
            <span style="font-size:30px; display: block;">Записи игр</span>
        </h1>
        <div class="row">
            <div class="youtube-video col-12 col-sm-6 col-lg-3"> 
                    <iframe width="270" src="https://www.youtube.com/embed/UG1I1bn4Jto" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 0 auto"></iframe><br>

                    <span style="color: #DDD">1. PZDC - Team Venum </span><br><br>
            </div>
            <div class="youtube-video col-12 col-sm-6 col-lg-3">
                    <iframe width="270" src="https://www.youtube.com/embed/XNPyllyj9UA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 0 auto"></iframe><br>

                    <span style="color: #DDD">2. Team Venum - Ave Teemo</span><br><br>
            </div>
            <div class="youtube-video col-12 col-sm-6 col-lg-3">
                   <iframe width="270" src="https://www.youtube.com/embed/yGPu_8RRHxg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 0 auto"></iframe><br>

                   
                   <span style="color: #DDD">3. PZDC - Ave Teemo</span><br><br>
            </div>
            <div class="youtube-video col-12 col-sm-6 col-lg-3">
                    <iframe width="270" src="https://www.youtube.com/embed/aKCIvdDad3U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: 0 auto"></iframe><br>

                    <span style="color: #DDD">4. Team Venum - Ave Teemo финал</span><br><br>
            </div>
        </div>

        <h1 class="title">
            <span style="font-size:30px; display: block;">Турнирная сетка</span>
        </h1>

        <table class="no-mobile" style="margin: 20px auto 0;">
            <tr>
                <th colspan="2" align="center" style="text-align: center;">
                    Основная сетка
                </th>
                <th colspan="2" align="center" class="final" style="text-align: center;">
                    <span>Финал</span><br> 
                    <span style="text-transform: none;">Bo3</span>
                </th>
                <th colspan="2" align="center" style="text-align: center;">
                    Дополнительная сетка
                </th>
            </tr>
            <tr>
                <td class="td"><!--Первая лига. Первая пара-->
                    <div class="play">
                        <div class="play__row play__row_first">
                            <a href="/teams/pzdc/" class="play__link">PZDC</a>
                        </div>
                        <div class="play__row play__row_first">
                           <a href="/teams/team-venum/" class="play__link">Team Venum</a>
                        </div>
                    </div>
                </td>
                <td class="td" ><!--Первая лига. Промежуточный-->
                    <div class="play">
                        <div class="play__row play__row_middle play__row_middle_first">
                            <a href="/teams/team-venum/" class="play__link">Team Venum</a>
                        </div>
                    </div>
                </td>
                <td class="td" rowspan="2"><!--Первая лига. Финалист-->
                    <div class="play">
                        <div class="score">
                            2<!-- 3 -->
                        </div>
                        <div class="play__row play__row_final">
                            <a href="/teams/team-venum/" class="play__link">Team Venum</a>
                        </div>
                    </div>
                </td>
                <td class="td td_two" rowspan="2"><!--Вторая лига. Финалист-->
                    <div class="play play-middle">
                        <div class="score">
                            0<!-- 2 -->
                        </div>
                        <div class="play__row"><a href="/teams/ave-teemo/" class="play__link">Ave Teemo</a></div>
                    </div>
                </td>
                <td class="td td_two"><!--Вторая лига. Промежуточный-->
                    <div class="play">
                        <div class="play__row play__row_two_middle play__row_two_middle_first">
                            <a href="/teams/pzdc/" class="play__link">PZDC</a>
                        </div>
                    </div>
                </td>
                <td class="td td_two"><!--Вторая лига. Первая пара-->
                    <div class="play play-bottom">
                        <div class="play__row play__row_two_first"><a href="/teams/pzdc/" class="play__link">PZDC</a></div>
                        <div class="play__row play__row_two_first"><s>DCP Team</s></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="td">
                    <div class="play"><!--Первая лига. Вторая пара-->
                        <div class="play__row play__row_first"><s>DCP Team</s></div>
                        <div class="play__row play__row_first"><a href="/teams/ave-teemo/" class="play__link">Ave Teemo</a></div>
                    </div>
                </td>
                <td class="td" rowspan="2">
                    <div class="play"><!--Первая лига. Второй промежуточный-->
                        <div class="play__row play__row_middle play__row_middle_two">
                            <a href="/teams/ave-teemo/" class="play__link">Ave Teemo</a>
                        </div>
                    </div>
                </td>
                <td class="td td_two"><!--Вторая лига. Второй Промежуточный-->
                    <div class="play">
                        <div class="play__row play__row_two_middle play__row_two_middle_two">
                            <a href="/teams/ave-teemo/" class="play__link">Ave Teemo</a>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <table class="mobile-only" style="margin: 20px auto 0;">
            <tr>
                <th colspan="2" align="center" style="text-align: center;">
                    Основная сетка
                </th>
            </tr>
            <tr>
                <td class="td"><!--Первая лига. Первая пара-->
                    <div class="play">
                        <div class="play__row play__row_first">
                            <a href="/teams/pzdc/" class="play__link">PZDC</a>
                        </div>
                        <div class="play__row play__row_first">
                           <a href="/teams/team-venum/" class="play__link">Team Venum</a>
                        </div>
                    </div>
                </td>
                <td class="td" ><!--Первая лига. Промежуточный-->
                    <div class="play">
                        <div class="play__row play__row_middle play__row_middle_first">
                            <a href="/teams/team-venum/" class="play__link">Team Venum</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="td">
                    <div class="play"><!--Первая лига. Вторая пара-->
                        <div class="play__row play__row_first"><s>DCP Team</s></div>
                        <div class="play__row play__row_first"><a href="/teams/ave-teemo/" class="play__link">Ave Teemo</a></div>
                    </div>
                </td>
                <td class="td">
                    <div class="play"><!--Первая лига. Второй промежуточный-->
                        <div class="play__row play__row_middle play__row_middle_two">
                            <a href="/teams/ave-teemo/" class="play__link">Ave Teemo</a>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <th colspan="2" align="center" style="text-align: center;">
                    Дополнительная сетка
                </th>
            </tr>

            <tr>
                <td class="td"><!--Вторая лига. Первая пара-->
                    <div class="play play-bottom">
                        <div class="play__row play__row_first"><a href="/teams/pzdc/" class="play__link">PZDC</a></div>
                        <div class="play__row play__row_first"><s>DCP Team</s></div>
                    </div>
                </td>

                <td class="td"><!--Вторая лига. Промежуточный-->
                    <div class="play">
                        <div class="play__row play__row_middle play__row_middle_first">
                            <a href="/teams/pzdc/" class="play__link">PZDC</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="td" height="125"><!--Вторая лига. Первая пара-->
                    
                </td>
                <td class="td"><!--Вторая лига. Второй Промежуточный-->
                    <div class="play">
                        <div class="play__row play__row_middle play__row_middle_two">
                            <a href="/teams/ave-teemo/" class="play__link">Ave Teemo</a>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <th colspan="2" align="center" class="final" style="text-align: center;">
                    <span>Финал</span><br> 
                    <span style="text-transform: none;">Bo3</span>
                </th>
            </tr>
            <tr>
                <td class="td"><!--Первая лига. Финалист-->
                    <div class="play">
                        <div class="score">
                            2<!-- 3 -->
                        </div>
                        <div class="play__row play__row_final">
                            <a href="/teams/team-venum/" class="play__link">Team Venum</a>
                        </div>
                    </div>
                </td>

                <td class="td td_two"><!--Вторая лига. Финалист-->
                    <div class="play play-middle">
                        <div class="score">
                            0<!-- 2 -->
                        </div>
                        <div class="play__row"><a href="/teams/ave-teemo/" class="play__link">Ave Teemo</a></div>
                    </div>
                </td>
            </tr>
        </table>
        
        <h1 class="title">
            <span style="font-size:30px; display: block;">Фото игр</span>
        </h1>
        <article class="article col-12 col-lg-9">
            <p class="article__parag">
                Фотоотчет турнира доступен в <a href="https://vk.com/album-186885826_268453002" target="_blank">альбоме Вконтакте</a>
            </p>
        </article>
    </section>

    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
    ?>
</div>
</body>
</html>
