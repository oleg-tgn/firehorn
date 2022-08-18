
<div class="container-fluid">
	<h1 class="mt-4 mb-4 text-center">Персональная страница</h1>

    <h1 class="mt-4 mb-4 text-center">Ваши заявки</h1>
	<?php
		if ($this->session->flashdata('message')) {
			echo '
				<div class="alert alert-success">
					'.$this->session->flashdata('message').'
				</div>
			';
		}
	?>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Позиция в заявке</th>            
            <th scope="col">Фамилия</th>
            <th scope="col">Имя</th>
            <th scope="col">Ник</th>
            <th scope="col">Телефон</th>
            <th scope="col">Город</th>
            <th scope="col">Предпочитаемая позиция</th>   
            <th scope="col">Вторая позиция</th>   
            <th scope="col">VK</th>
            <th scope="col">Instagram</th>
            <th scope="col">Принять</th>
            <th scope="col">Отклонить</th>
       </tr>
    </thead>
    <tbody>
        <?php foreach ($requests as $key => $value): ?>
        <tr>
            <th scope="row"><?=$key + 1?></th>
            <td><b><?=$value['req_position'] ?></b></td>
            <td><?=$value['surname'] ?></td>
            <td><?=$value['name'] ?></td>
            <td><?=$value['nik'] ?></td>
            <td><?=$value['phone'] ?></td>
            <td><?=$value['town'] ?></td>
            <td><?=$value['position'] ?></td>
            <td><?=$value['position_second'] ?></td>
            <td>
                <? if ($value['vk'] != ""): ?>
                    <a href="<?=$value['vk'] ?>" target="_blank">ВК</a>
                <? else: ?>
                    &nbsp;
                <? endif; ?>
            </td>
            <td>
                <? if ($value['inst'] != ""): ?><a href="<?=$value['inst'] ?>" target="_blank">Inst</a><? endif; ?>
            </td>

            <td>
                <button type="submit" name="register" class="btn btn-success">Принять</button>
            </td>
            <td>
                <button type="submit" name="register" class="btn btn-danger">Отклонить</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>