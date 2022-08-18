<div class="container">
	<h1 class="mt-4 mb-4">Клубы</h1>
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
			<th scope="col">Название</th>
			<th scope="col">Адрес</th>
			<th scope="col">Телефон</th>
			<th scope="col">VK</th>
			<th scope="col">Instagram</th>
			<? 
				if ($this->session->userdata('role') == 'player'):
			?>
			<th scope="col">Команда</th>
			<? 
				endif; 
			?>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($clubs as $key => $value): ?>
			<tr>
				<th scope="row"><?=$key + 1?></th>
				<td><?=$value['name'] ?></td>
				<td><?=$value['address'] ?></td>
				<td><?=$value['phone'] ?></td>
				<td><? if ($value['vk'] != ""): ?><a href="<?=$value['vk'] ?>" target="_blank">ВК</a><? endif; ?></td>
				<td><? if ($value['inst'] != ""): ?><a href="<?=$value['inst'] ?>" target="_blank">Inst</a><? endif; ?></td>
				<? 
					if ($this->session->userdata('role') == 'player'):
				?>
				<td>
					<ul>
						<li class="mb-1">Топ 
							<form action="<? echo base_url(); ?>players/make_requst" method="post">								
								<input type="hidden" name="club_id" value="<?= $value['id'] ?>">
								<input type="hidden" name="req_position" value="Топ">
								<button type="submit" href="#" class="btn btn-primary btn-sm ms-1">Подать заявку</a>
							</form>
							<br>
						</li>
						<li class="mb-1">Лес 
							<form action="<? echo base_url(); ?>players/make_requst" method="post">								
								<input type="hidden" name="club_id" value="<?= $value['id'] ?>">
								<input type="hidden" name="req_position" value="Лес">
								<button type="submit" href="#" class="btn btn-primary btn-sm ms-1">Подать заявку</a>
							</form>
						<br></li>
						<li class="mb-1">Мид 
							<form action="<? echo base_url(); ?>players/make_requst" method="post">								
								<input type="hidden" name="club_id" value="<?= $value['id'] ?>">
								<input type="hidden" name="req_position" value="Мид">
								<button type="submit" href="#" class="btn btn-primary btn-sm ms-1">Подать заявку</a>
							</form>
						<br></li>
						<li class="mb-1">Адк 
							<form action="<? echo base_url(); ?>players/make_requst" method="post">								
								<input type="hidden" name="club_id" value="<?= $value['id'] ?>">
								<input type="hidden" name="req_position" value="Адк">
								<button type="submit" href="#" class="btn btn-primary btn-sm ms-1">Подать заявку</a>
							</form>
						<br></li>
						<li class="mb-1">Сап 
							<form action="<? echo base_url(); ?>players/make_requst" method="post">								
								<input type="hidden" name="club_id" value="<?= $value['id'] ?>">
								<input type="hidden" name="req_position" value="Сап">
								<button type="submit" href="#" class="btn btn-primary btn-sm ms-1">Подать заявку</a><br>
							</form>
						</li>
					</ul>
				</td>
				<? endif; ?>
			</tr>
			<?php endforeach; ?>
		</tbody>
		</table>
</div>