<div class="container">
	<h1 class="mt-4 mb-4">Игроки</h1>
	<table class="table">
		<thead>
			<tr>
			<th scope="col">#</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Имя</th>
            <th scope="col">Ник</th>
            <th scope="col">Телефон</th>
			<th scope="col">Город</th>
            <th scope="col">Позиция</th>
            <th scope="col">Вторая позиция</th>
			<th scope="col">VK</th>
			<th scope="col">Instagram</th>
			<!-- <th scope="col">Команда</th> -->
			</tr>
		</thead>
		<tbody>
			<?php foreach ($clubs as $key => $value): ?>
			<tr>
                <th scope="row"><?=$key + 1?></th>
                <td><?=$value['surname'] ?></td>
                <td><?=$value['name'] ?></td>	
                <td><?=$value['nik'] ?></td>	
                <td><?=$value['phone'] ?></td>
                <td><?=$value['town'] ?></td>
                <td><?=$value['position'] ?></td>
                <td><?=$value['position_second'] ?></td>
				<td><? if ($value['vk'] != ""): ?><a href="<?=$value['vk'] ?>" target="_blank">ВК</a><? endif; ?></td>
				<td><? if ($value['inst'] != ""): ?><a href="<?=$value['inst'] ?>" target="_blank">Inst</a><? endif; ?></td>
				<!-- <td>
					<ul>
						<li class="mb-1">Топ: <b>Player1</b><br></li>
						<li class="mb-1">Лес: <a href="#" class="btn btn-primary btn-sm">Подать заявку</a><br></li>
						<li class="mb-1">Мид: <b>Player2</b><br></li>
						<li class="mb-1">Адк: <b>Player3</b><br></li>
						<li class="mb-1">Сап: <a href="#" class="btn btn-primary btn-sm">Подать заявку</a></li>
					</ul>
				</td> -->
			</tr>
			<?php endforeach; ?>
		</tbody>
		</table>
</div>