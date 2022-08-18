
	<h3 class="text-center">Данные клуба</h3>		
	<div class="form-group mb-3">
		<label for="">Название</label>
		<input type="text" name="club_name" class="form-control" value="<?php echo set_value('club_name')?>" required>
		<span class="text-danger"><?php echo form_error('club_name'); ?></span>
	</div>

	<div class="form-group mb-3">
		<label for="">Адрес</label>
		<input type="text" name="club_address" class="form-control" value="<?php echo set_value('club_address')?>" required>
		<span class="text-danger"><?php echo form_error('club_address'); ?></span>
	</div>

	<div class="form-group mb-3">
		<label for="">Телефон</label>
		<input type="text" name="club_phone" class="form-control" value="<?php echo set_value('club_phone')?>" required>
		<span class="text-danger"><?php echo form_error('club_phone'); ?></span>
	</div>

	<div class="form-group mb-3">
		<label for="">Вконтакте</label>
		<input type="text" name="club_vk" class="form-control" value="<?php echo set_value('club_vk')?>" placeholder="https://vk.com/name">
		<span class="text-danger"><?php echo form_error('club_vk'); ?></span>
	</div>

	<div class="form-group mb-3">
		<label for="">Инстаграм</label>
		<input type="text" name="club_inst" class="form-control" value="<?php echo set_value('club_inst')?>" placeholder="https://www.instagram.com/name">
		<span class="text-danger"><?php echo form_error('club_inst'); ?></span>
	</div>
