<style>
    .tournaments-info i {
        display: inline-block;
        width: 25px;
        text-align: center;
    }
</style>

<?php
require 'include/filter.php';
?>
<h1 class="title">
    <span style="font-size:30px; display: block;">Командный лан-турнир</span>
</h1>

<article class="article col-12 col-md-8 col-lg-5">
    <p class="article__parag">
        Осталось 4 из 8 слотов для команд. Дерзайте!
    </p> 
    <p class="article__parag">
        <ul style="list-style-type: none;" class="tournaments-info">
        <li><i class="fa fa-calendar-o" aria-hidden="true"></i> 20 сентября</li>
        <li><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="https://goo.gl/maps/VAKfadf8kabcSR9bA" target="_blank">КЗ "Легион", г. Таганрог, ул. Чехова, 322/2</a></li>
        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 13:00</li>
        <li><a href="/lan/3/rules.php" class="article__link">Подробнее</a></li>
        </ul>
    </p>

</article>
    
        
        <h2 class="title js-team-title">
            <span style="font-size:20px; display: block;">Регистрация команды</span>
        </h2>

        <div style="display: none; text-align: center; font-size: 30px; color: #ddd; margin-top: 50px;" class="js-team-success">
            Команда зарегистрирована. <br>
            Вы великолепены!<br>
            С Вами свяжется администратор турнира.
        </div>

        <form action="lan-send.php" method="post" class="js-team-form registration-form col-12 col-md-8 col-lg-5" style="margin: 0 auto;">
            <div class="form-group">            
                <input class="form-control" type="text" name="team" placeholder='Название команды' required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="vk" placeholder='vk капитана' required>
            </div>
            <div class="form-group">
                <input class="form-control" type="phone" name="phone" placeholder='Телефон капитана' required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="name1" placeholder='1: Имя "Ник" Фамилия' required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="name2" placeholder='2: Имя "Ник" Фамилия' required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="name3" placeholder='3: Имя "Ник" Фамилия' required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="name4" placeholder='4: Имя "Ник" Фамилия' required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="name5" placeholder='5: Имя "Ник" Фамилия' required>
            </div>
            <input type="hidden" name="g-recaptha-response" id="g-recaptha-response">
            <input type="submit" value="Зарегистрироваться" class="btn btn-primary js-team-send">
        </form>


        <h2 class="title js-find-title">
            <span style="font-size:20px; display: block;">Ищу команду</span>
        </h2>
        <form action="lan-send-find.php" method="post" class="registration-form col-12 col-md-8 col-lg-5 js-find-form" style="margin: 0 auto;" id="find-form">
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder='Имя "Ник" Фамилия' required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="vk" placeholder='VK игрока' required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="rank" placeholder='Ранг (можно указать ru и west)' required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="position" placeholder='Позиция (можно несколько)' required>
            </div>
            <input type="hidden" name="g-recaptha-response-find" id="g-recaptha-response-find">
            <input type="submit" value="Искать команду" class="btn btn-primary js-find-btn">
        </form>
        
        <div style="display: none; text-align: center; font-size: 36px; color: #ddd; margin-top: 50px;" class="js-find-success">
            Спасибо за заявку! <br>
            Организаторы турнира помогут вам подобрать команду.
        </div>

<script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY;?>"></script>
<script>
 $(document).ready(function () {


    $('.js-team-form').on('submit', function(e) {  
        e.preventDefault(); 
        grecaptcha.ready(function() {
          grecaptcha.execute('<?php echo SITE_KEY;?>', {action: 'submit'}).then(function(token) {
                document.getElementById('g-recaptha-response').value = token;

            var $form = $('.js-team-form');
            var $teamSuccess = $('.js-team-success');  
            $('html, body').animate({scrollTop: 300},250);          
            $form.fadeOut(250);
            $('.js-find-form').fadeOut(250);
            $('.js-find-title').fadeOut(250);

            $.ajax({
                url: $form.attr('action'),
                type: "POST",
                data: $form.serialize(),
                success: function(data, textStatus, xhr) {
                    $teamSuccess.fadeIn(250);
                },
                error: function(data, textStatus, xhr) {
                    let message = "Что-то пошло не так.<br>" +
                                "Пожалуйста, сообщите об ошибке  <b> <a href='https://vk.com/stelmah_o' target='_blank'> администратору сайта</a></b>.<br> <i>" + data.responseText+ "</i>";
                               
                    $teamSuccess.html(message);
                    $teamSuccess.fadeIn(500);
                }
            });
        });
      });
    })    


    $('.js-find-form').on('submit', function(e) {  
        e.preventDefault(); 

        grecaptcha.ready(function() {
          grecaptcha.execute('<?php echo SITE_KEY;?>', {action: 'submit'}).then(function(token) {
                document.getElementById('g-recaptha-response-find').value = token;

                var $form = $('.js-find-form');
                var $teamSuccess = $('.js-find-success');
                $('html, body').animate({scrollTop: 300},250);
                $form.fadeOut(250);        
                $('.js-team-form').fadeOut(250);
                $('.js-team-title').fadeOut(250);

                $.ajax({
                    url: $form.attr('action'),
                    type: "POST",
                    data: $form.serialize(),
                    success: function(data, textStatus, xhr) {
                        $teamSuccess.fadeIn(250);
                    },
                    error: function(data, textStatus, xhr) {
                        let message = "Что-то пошло не так.<br>" +
                                    "Пожалуйста, сообщите об ошибке  <b> <a href='https://vk.com/stelmah_o' target='_blank'> администратору сайта</a></b>.<br> <i>" + data.responseText+ "</i>";
                                   
                        $teamSuccess.html(message);
                        $teamSuccess.fadeIn(500);
                    }
                });
        });
        });
    });

});
</script>