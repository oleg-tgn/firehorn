<h3 class="text-center">Данные игрока</h3>		
<div class="form-group mb-3">
    <label for="">Фамилия</label>
    <input type="text" name="player_surname" class="form-control" value="<?php echo set_value('player_surname')?>" required>
    <span class="text-danger"><?php echo form_error('player_surname'); ?></span>
</div>

<div class="form-group mb-3">
    <label for="">Имя</label>
    <input type="text" name="player_name" class="form-control" value="<?php echo set_value('player_name')?>" required>
    <span class="text-danger"><?php echo form_error('player_name'); ?></span>
</div>

<div class="form-group mb-3">
    <label for="">Телефон</label>
    <input type="text" name="player_phone" class="form-control" value="<?php echo set_value('player_phone')?>" required>
    <span class="text-danger"><?php echo form_error('player_phone'); ?></span>
</div>

<div class="form-group mb-3">
    <label for="">Город</label>
    <input type="text" name="player_town" class="form-control" value="<?php echo set_value('player_town')?>" required>
    <span class="text-danger"><?php echo form_error('player_town'); ?></span>
</div>

<div class="form-group mb-3">
    <label for="">Ник</label>
    <input type="text" name="player_nik" class="form-control" value="<?php echo set_value('player_nik')?>" required>
    <span class="text-danger"><?php echo form_error('player_nik'); ?></span>
</div>

<div class="form-group mb-3">
    <label for="">Предпочитаемая позиция</label><br>
    <input type="radio" id="position1" name="player_position" class="form-check-input" value="Топ" <?php echo set_radio('player_position', 'Топ')?> required> 
    <label for="position1" class="form-check-label me-2">Топ</label>

    <input type="radio" id="position2" name="player_position" class="form-check-input" value="Лес" <?php echo set_radio('player_position', 'Лес')?> >
    <label for="position2" class="form-check-label me-2">Лес</label>

    <input type="radio" id="position3" name="player_position" class="form-check-input" value="Мид" <?php echo set_radio('player_position', 'Мид')?>> 
    <label for="position3" class="form-check-label me-2" >Мид</label>

    <input type="radio" id="position4" name="player_position" class="form-check-input" value="Адк" <?php echo set_radio('player_position', 'Адк')?>> 
    <label for="position4" class="form-check-label me-2">Адк</label>

    <input type="radio" id="position5" name="player_position"  class="form-check-input" value="Сап" <?php echo set_radio('player_position', 'Сап')?>> 
    <label for="position5" class="form-check-label me-2">Сап</label>

    <span class="text-danger"><?php echo form_error('player_position'); ?></span>
</div>

<div class="form-group mb-3">
    <label for="">Дополнительные позиции</label><br>
    <input type="checkbox" id="position-second1" name="player_position_second" class="form-check-input" value="Топ" <?php echo set_checkbox('player_position_second', 'Топ')?>> 
    <label for="position-second1" class="form-check-label me-2">Топ</label>

    <input type="checkbox" id="position-second2" name="player_position_second" class="form-check-input" value="Лес" <?php echo set_checkbox('player_position_second', 'Лес')?>>
    <label for="position-second2" class="form-check-label me-2">Лес</label>

    <input type="checkbox" id="position-second3" name="player_position_second" class="form-check-input" value="Мид" <?php echo set_checkbox('player_position_second', 'Мид')?>> 
    <label for="position-second3" class="form-check-label me-2" >Мид</label>

    <input type="checkbox" id="position-second4" name="player_position_second" class="form-check-input" value="Адк" <?php echo set_checkbox('player_position_second', 'Адк')?>> 
    <label for="position-second4" class="form-check-label me-2">Адк</label>

    <input type="checkbox" id="position-second5" name="player_position_second"  class="form-check-input" value="Сап" <?php echo set_checkbox('player_position_second', 'Сап')?>> 
    <label for="position-second5" class="form-check-label me-2">Сап</label>

    <span class="text-danger"><?php echo form_error('player_position_second'); ?></span>
</div>


<div class="form-group mb-3">
    <label for="">Ранг (указать наивысший ru/eu)</label>   

    <select class="form-select" aria-label="Default select example" name="player_rank" required>
        <option value="Железо IV">Железо IV</option>
        <option value="Железо III">Железо III</option>
        <option value="Железо II">Железо II</option>
        <option value="Железо I">Железо I</option>

        <option value="Бронза IV">Бронза IV</option>
        <option value="Бронза III">Бронза III</option>
        <option value="Бронза II">Бронза II</option>
        <option value="Бронза I">Бронза I</option>

        <option value="Серебро IV">Серебро IV</option>
        <option value="Серебро III">Серебро III</option>
        <option value="Серебро II">Серебро II</option>
        <option value="Серебро I">Серебро I</option>

        <option value="Золото IV">Золото IV</option>
        <option value="Золото III">Золото III</option>
        <option value="Золото II">Золото II</option>
        <option value="Золото I">Золото I</option>

        <option value="Платина IV">Платина IV</option>
        <option value="Платина III">Платина III</option>
        <option value="Платина II">Платина II</option>
        <option value="Платина I">Платина I</option>

        <option value="Алмаз IV">Алмаз IV</option>
        <option value="Алмаз III">Алмаз III</option>
        <option value="Алмаз II">Алмаз II</option>
        <option value="Алмаз I">Алмаз I</option>

        <option value="Мастер">Мастер</option>
        <option value="Грандмастер">Грандмастер</option>
        <option value="Претендент">Претендент</option>
    </select>

    <span class="text-danger"><?php echo form_error('player_rank'); ?></span>
</div>

<div class="form-group mb-3">
    <label for="">Вконтакте</label>
    <input type="text" name="player_vk" class="form-control" value="<?php echo set_value('player_vk')?>" placeholder="https://vk.com/name">
    <span class="text-danger"><?php echo form_error('player_vk'); ?></span>
</div>

<div class="form-group mb-3">
    <label for="">Инстаграм</label>
    <input type="text" name="player_inst" class="form-control" value="<?php echo set_value('player_inst')?>" placeholder="https://www.instagram.com/name">
    <span class="text-danger"><?php echo form_error('player_inst'); ?></span>
</div>
