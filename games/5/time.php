<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Расписание | <?php include './include/title.php'; ?></title>
    
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
            <span>Расписание</span>
        </h2>

    <table class="teams-tournament teams-tournament-timetable col-12 col-lg-5 table table-dark table-hover table-bordered" style="margin: 50px auto">
          <tr><th colspan="3">Суббота 29 февраля</th></tr>
          <tr><!-- 1 -->
            <td>17:00</td>
            <td>I игра</td>
            <td>Раунд 1</td>
          </tr>
          <tr><!-- 2 -->
            <td>18:30</td>
            <td>II игра</td>
            <td>
                Раунд 2<br>
                Раунд нижней сетки 1
            </td>
          </tr>
          <tr><!-- 3 -->
            <td>20:00</td>
            <td>III игра</td>
            <td>
                Раунд 3<br>
                Раунд нижней сетки 2
            </td>
          </tr>
          <tr><!-- 3 -->
            <td>21:30</td>
            <td>IV игра</td>
            <td>
                Полуфиналы<br>
                Раунд нижней сетки 3
            </td>
          </tr>
          <tr><th colspan="3">Воскресенье 1 марта</th></tr>
          <tr><!-- 1 -->
            <td>14:00</td>
            <td>V игра</td>
            <td>
                Раунд нижней сетки 4<br>
            </td>
          </tr>
          <tr><!-- 1 -->
            <td>15:30</td>
            <td>VI игра</td>
            <td>
                Раунд нижней сетки 5<br>
            </td>
          </tr>
          <tr><!-- 3 -->
            <td>17:00</td>
            <td>Перерыв</td>
          </tr>
          <tr><!-- 3 -->
            <td>18:00</td>
            <td>VII игра</td>
            <td>Финал</td>
          </tr>
        </tbody>
      </table><!-- end team table-->
    </section>


    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
    ?>
</div>
    </body>
</html>
