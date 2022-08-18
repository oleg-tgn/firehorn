<?php
    $hideRegisterForm = false;    

    if (!isset($_GET['team'])) {
        header('Location: index.php');
        exit;
    }
    else {
        $team = $_GET['team'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Онлайн турнир 4 - 5 апреля по League of Legends</title>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/include/head_styles.php'; ?>
    <style>
        .registration-form label {
            color: #ddd;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'].'/include/navbar.php'; ?>

    <section class="container">
        <h1 class="title main-title" style="margin-bottom: 0;">
            <span class="main-title__date">Онлайн турнир 4 - 5 апреля</span>
        </h1>
        <h2 class="title sub-title" style="margin-top: 0; font-size: 20px;">
            <span>Готово</span>
        </h2> 

        <nav aria-label="breadcrumb" class="col-12 col-md-8 col-lg-5" style="margin: 0 auto">
            <ol class="breadcrumb breadcrumb-online">
                <li class="breadcrumb-item"><a href="index.php">Шаг 1. Регистрация</a></li>
                <li class="breadcrumb-item"><a href="pay.php?team=<?=$team?>">Шаг 2. Стартовый взнос</a></li>
                <li class="breadcrumb-item active" aria-current="page">Готово</li>
            </ol>
        </nav>

        <div style="text-align: center; font-size: 36px; color: #ddd; margin-top: 50px;">
            Команда "<?=$team?>" зарегистрирована. <br>
            Ты великолепен!
        </div>

    </section>

   
    <?php
      include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
    ?>
    
    </div><!-- end wrapper-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    
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
<?php } ?>