<section class="container">	
	<h2 class="title">Проведенные мероприятия</h2>
	<div class="games">
		<?php foreach ($games as $key => $value): ?>
		<div class="games__item">	
			<a href="<?=base_url();?>games/game/<?=$value['alias'] ? $value['alias'] : $value['id']?>" class="games__image" style="background-image: url(/app/static/uploads/games/<?=$value['preview'] ?>)"></a>
			<div class="games__desc">
				<h3 class="games__title"> 
					<a class="games__link" href="<?=base_url();?>games/game/<?=$value['alias'] ? $value['alias'] : $value['id']?>"><?=$value['title'] ?></a>
					<!-- <a href="<?=base_url();?>games/delete_game/<?=$value['id']?>">del</a> -->
				</h3>
				<div class="games__date"> <?=$value['date'] ?> </div>
			</div>			
		</div>      
		<?php endforeach; ?>                           
</section>
