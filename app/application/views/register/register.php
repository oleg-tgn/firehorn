

<div class="container" id="app">
	<h1 class="h1 text-center mt-6" style="margin-top: 25px">Регистрация</h1>
	<div class="col-6 mx-auto">			
		<?php
			if ($this->session->flashdata('message')) {
				echo '
					<div class="alert alert-success">
						'.$this->session->flashdata('message').'
					</div>
				';
			}
		?>
		<form action="<? echo base_url(); ?>register/validation" method="post">	
			<div class="form-group mb-3">
				<label for="">Email</label>
				<input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email')?>" required>
				<span class="text-danger"><?php echo form_error('user_email'); ?></span>
			</div>

			<div class="form-group mb-3">
				<label for="">Пароль</label>
				<input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password')?>" required>
				<span class="text-danger"><?php echo form_error('user_password'); ?></span>
			</div>

			<div class="form-group mb-3">
				<label for="">Тип аккаунта</label><br>
				<input type="radio" id="contactChoice1" name="user_role" v-model="role" value="player" <?php echo  set_radio('user_role', 'player', TRUE); ?> required/>
				<label for="contactChoice1">Игрок</label><br>

				<input type="radio" id="contactChoice2" name="user_role" v-model="role" value="club" <?php echo  set_radio('user_role', 'club'); ?> required/>
				<label for="contactChoice2">Клуб</label>
				<span class="text-danger"><?php echo form_error('user_role'); ?></span>
			</div>

			<div v-if="role === 'club'">
				<?php include 'register_club.php'; ?>
			</div>

			<div v-if="role === 'player'">
			<?php include 'register_player.php'; ?>
			</div>

			<div class="form-group mb-3">						
				<input type="submit" name="register" class="btn btn-primary" value="Зарегистрироваться">						
			</div>
		</form>
	</div>
</div>



<script>
    var app = new Vue({
        el: '#app',
        data: {
            role: ""
        }
    })
</script>