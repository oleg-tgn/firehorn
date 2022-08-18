<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php include './include/title.php'; ?></title>
    
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
            #6 Онлайн-турнир (1x1)<br> 
            <span class="main-title__date" style="font-weight: normal;">26 апреля 2020</span>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5<a class="timetable__link" href="/teams/sakamoto/">SM</a>XKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-Jj<a class="timetable__link" href="/teams/sakamoto/">SM</a>Vgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, <a class="timetable__link" href="/teams/donstucked-on-chall/">DOC</a>ument, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

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
