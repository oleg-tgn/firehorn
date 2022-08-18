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
            <span>Оплата стартового взноса</span>
        </h2> 

        <nav aria-label="breadcrumb" class="col-12 col-md-8 col-lg-5" style="margin: 0 auto">
            <ol class="breadcrumb breadcrumb-online">
                <li class="breadcrumb-item"><a href="index.php">Шаг 1. Регистрация</a></li>
                <li class="breadcrumb-item active" aria-current="page">Шаг 2. Стартовый взнос</li>
                <li class="breadcrumb-item">Готово</li>
            </ol>
        </nav>
        <form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml"  class="registration-form  col-12 col-md-5" style="margin: 0 auto;">        
            <input type="hidden" name="receiver" value="410012922561436">
            <input type="hidden" name="formcomment" value="Fire Horn League Online 4 - 5 апреля">
            <input type="hidden" name="short-dest" value="Fire Horn League Online 4 - 5 апреля">
            <input type="hidden" name="label" value="$order_id">
            <input type="hidden" name="quickpay-form" value="donate">
            <input type="hidden" name="targets" value="Стартовый взнос">
            <input type="hidden" name="sum" value="1000" data-type="number">
            <input type="hidden" name="need-fio" value="true">
            <input type="hidden" name="need-email" value="false">
            <input type="hidden" name="need-phone" value="true">
            <input type="hidden" name="need-address" value="false">
            <input type="hidden" name="successURL" value="https://fire-horn.ru/online/2/registered.php?team=<?=$team?>">

            <div class="form-group">
                <label>
                    Данные команды "<?=$team?>" внесены в систему.<br><br>
                    Стартовый взнос 1000 руб. с команды.<br>
                </label>
            </div>

            <div class="form-group">
                <label for="teamName">Название команды</label>
                <input type="text" name="comment" class="form-control" id="teamName" value="<?=$team?>">
            </div>
            
            <div class="form-group">
                <div class="form-check">
                    <input type="radio" name="paymentType" value="PC" class="form-check-input" id="paymentTypePC">
                    <label class="form-check-label" for="paymentTypePC">Яндекс.Деньгами</label>
                </div>
                <div class="form-check">
                    <input checked type="radio" name="paymentType" value="AC" class="form-check-input" id="paymentTypeAC"><label class="form-check-label" for="paymentTypeAC">Банковской картой</label>
                </div>
            </div>
            <input type="submit" value="Перевести" class="btn btn-primary"></form>
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