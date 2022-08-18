<div class="container">
	<form action="<? echo base_url(); ?>games/update_game/<?= $game['id'] ?>" method="post" enctype="multipart/form-data" class="form">			
		<?php
			if ($this->session->flashdata('message')) {
				echo '
					<div class="alert alert-success">
						'.$this->session->flashdata('message').'
					</div>
				';
			}
		?>				
		<div class="form-group mb-3">
			<label for="">Заголовок</label>
			<input type="text" name="title" class="form-control input" value="<?= $game['title'] ?>" required>					
		</div>
		<div class="form-group mb-3">
			<label for="">Дата</label>
			<input type="date" name="date" class="form-control input" value="<?= $game['date'] ?>" required>					
		</div>
		<div class="form-group mb-3">
			<label for="">Изображение</label>
			<div><img width="200" src="/app/static/uploads/games/<?= $game['preview'] ?>" alt=""></div>
								
			<input type="file" name="preview" class="form-control input" value="">
		</div>	
		<div class="form-group mb-3">
			<label for="tournament_grid">Турнирная сетка Challonge</label>
			<input type="text" name="challonge" class="form-control input" value="<?= $game['challonge'] ?>">			
		</div>
		<button type="submit" class="btn btn-primary mr-auto">Сохранить изменения</button>	
		<a href="<?=base_url();?>dashboard/games/" class="btn btn-secondary">Назад</a>					
	</form>
</div>
