<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta property="og:image" content="https://fire-horn.ru/donate/img/donate-shop.jpg"/>
    <title>Поддержать проект | Fire Horn League</title>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/include/head_styles.php'; ?>
    <style>
      .don-link {
        display: inline-block;
        text-align: center;
        margin: 10px 20px;
        color: #fff;
        font-size: 18px;
      }
      .don-img {
        width: 220px;
        margin-bottom: 7px;
      }

      .don-subtitle {
        font-size: 25px;
        font-weight: normal;
      }

      .donut-button__wrap {
        text-align: center;
      }

      .donut-button {
        display: inline-block;
        font-size: 20px;
        color: #fff;
        background: #ffac10;
        padding: 10px 20px;
        text-decoration: none;
      }

      .donut-button:hover {
        opacity: .85;
        color: #fff;
        text-decoration: none;
      }


      @media (max-width: 1024px) {
        .don-img {
          width: 180px;
        }
      }

      @media (max-width: 400px) {
        .article {
          padding: 0;
        }

        .don-list {
          font-size: 0;
          display: block;
          margin: 0 -10px;
        }

        .don-link {
          display: inline-block;
          width: 50%;
          margin: 10px 0;
          padding: 0 10px;
        }

        .don-img {
          width: 100%;
        }
      }
    </style>
</head>
<body>
<div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'].'/include/navbar.php'; ?>

    <section class="container">
        <h1 class="title main-title">
            <span>
            Fire Horn League
            </span>
        </h1>
        
         <article class="article col-12 col-lg-9">
            <p class="article__parag">
              Мы проводим турниры, трансляции, тренировки и проcто встречи единомышленников по&nbsp;League&nbsp;of&nbsp;Legends.
            </p>

            <p class="article__parag">
              Если вам нравится наша деятельность вы можете поддержать нас через VK&nbsp;Donut.
            </p>
            <div class="donut-button__wrap">
              <a class="donut-button" href="https://vk.com/firehorn?source=description&w=donut_payment-186885826" target="_blank">Поддержать</a>
            </div>
          </article>
          <h2 class="title don-subtitle">
            Доны нашего сообщества
          </h2>
          <div class="don-list">
            <a href="https://vk.com/lidgrow" target="_blank" class="don-link">
              <img src="img/alex_cherniy.jpg" class="don-img"><br>
              Алексей
            </a>
            <a href="https://vk.com/id287778572" target="_blank" class="don-link">
              <img src="img/emilia_lisenko.jpg" class="don-img"><br>
              Эмилия
            </a>
            <a href="https://vk.com/nshikarny" target="_blank" class="don-link">
              <img src="img/nikolay_shikarniy.jpg" class="don-img"><br>
              Николай
            </a>
            <a href="https://vk.com/zlaya.elza" target="_blank" class="don-link">
              <img src="img/liza_uchenina.jpg" class="don-img"><br>
              Лиза
            </a>
            <a href="https://vk.com/herolifecore" target="_blank" class="don-link">
              <img src="img/stepan_cherniy.jpg" class="don-img"><br>
              Степан
            </a>
            <a href="https://vk.com/xxxsorokaxxx" target="_blank" class="don-link">
              <img src="img/alex_sorokin.jpg" class="don-img"><br>
              Алексей
            </a>
            <a href="https://vk.com/top_shyvana" target="_blank" class="don-link">
              <img src="img/nikolay_kurkachov.jpg" class="don-img"><br>
              Николай
            </a>
            <a href="https://vk.com/id63558338" target="_blank" class="don-link">
              <img src="img/alex_akolzin.jpg" class="don-img"><br>
              Алексей
            </a>
          </div>
    </section>

   
    <?php
      include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
    ?>
    
    </div><!-- end wrapper-->
  
</body>
</html>
