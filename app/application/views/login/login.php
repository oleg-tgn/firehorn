<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход | Fire Horn League</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="h1 text-center mt-6 mb-3" style="margin-top: 25px">Вход</h1>
        <div class="card col-6 mx-auto">
			<div class="card-header">
                Вход
			</div>			
			<div class="card-body">		
                <?php
                    if ($this->session->flashdata('message')) {
                        echo '
                            <div class="alert alert-success">
                                '.$this->session->flashdata('message').'
                            </div>
                        ';
                    }
                ?>
                <form action="<?php echo base_url();?>login/validation" method="post">
                    <div class="form-group mb-3">
                        <label>Введите Email</label>
                        <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>">
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                    </div>
                    <div class="form-group mb-3">
                        <label>Введите Пароль</label>
                        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>">
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Войти" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>