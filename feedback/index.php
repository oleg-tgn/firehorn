<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Fire Horn League | Турниры по League of Legends</title>
    <?php include '../include/head_styles.php'; ?>
    <style>
      .main-article__wrap {
        display: flex;
        flex-wrap: wrap;
      }
      .main-article {
        display: flex;
        width: calc(100% / 4 - 30px);
        margin: 20px 15px;
        align-items: top;
      }

      .main-article_top {
        width: 100%;
      }

      .card-title {
        padding: 15px;
        margin-bottom: 0;
      }
      .card-text {
        padding: 15px;
      }
      .card-text p {
        margin-bottom: 10px
      }
    </style>
</head>
<body>
<div class="wrapper">
    <?php include '../include/navbar.php'; ?>

    <section class="container">
        <style>
    .tournaments-info i {
        display: inline-block;
        width: 25px;
        text-align: center;
    }
</style>

<?php
  require '../include/filter.php';
?>
<h1 class="title">
    <span style="font-size:30px; display: block;">Обратная связь</span>
</h1>

<article class="article col-12 col-md-8 col-lg-8">
    <p class="article__parag">
        Напишите нам, что думаете по поводу турниров и всего, что относится к Fire Horn League. Можете оставить отзыв, жалобу, комментарий или пожелание. Мы хотим развиваться, именно вы можете помочь нам в этом.
    </p> 
</article>

        <div style="display: none; text-align: center; font-size: 30px; color: #ddd; margin-top: 50px;" class="js-feedback-success">
            Спасибо за ваш отзыв!
            Ваше мнение важно для нас.
        </div>

        <form action="feedback-send.php" method="post" class="js-feedback-form feedback-form col-12 col-md-8 col-lg-8" style="margin: 0 auto;">
            <div class="form-group">            
                <input class="form-control" type="text" name="name" placeholder='Ваше имя (можно оставить пустым)'>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Ваш отзыв"></textarea>
            </div>
            <input type="hidden" name="g-recaptha-response" id="g-recaptha-response">
            <input type="submit" value="Написать отзыв" class="btn btn-primary js-feedback-send">
        </form>

<script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY;?>"></script>
<script>
 $(document).ready(function () {
    $('.js-feedback-form').on('submit', function(e) {  
        e.preventDefault(); 
        grecaptcha.ready(function() {
          grecaptcha.execute('<?php echo SITE_KEY;?>', {action: 'submit'}).then(function(token) {
                document.getElementById('g-recaptha-response').value = token;

            var $form = $('.js-feedback-form');
            var $feedbackSuccess = $('.js-feedback-success');  
            $('html, body').animate({scrollTop: 300},250);          
            $form.fadeOut(250);

            $.ajax({
                url: $form.attr('action'),
                type: "POST",
                data: $form.serialize(),
                success: function(data, textStatus, xhr) {
                    $feedbackSuccess.fadeIn(250);
                },
                error: function(data, textStatus, xhr) {
                    let message = "Что-то пошло не так.<br>" +
                                "Пожалуйста, сообщите об ошибке  <b> <a href='https://vk.com/stelmah_o' target='_blank'> администратору сайта</a></b>.<br> <i>" + data.responseText+ "</i>";
                               
                    $feedbackSuccess.html(message);
                    $feedbackSuccess.fadeIn(500);
                }
            });
        });
      });
    })    
});
</script>
    </section>

   
    <?php
      include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
    ?>
    
    </div><!-- end wrapper-->
  
</body>
</html>
