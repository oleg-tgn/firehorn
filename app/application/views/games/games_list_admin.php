<section class="container">		
	<div class="games-admin">
		<?php foreach ($games as $key => $value): ?>
		<div class="games-admin__item">
			<div class="games-admin__value"><img width="200" src="/app/static/uploads/games/<?=$value['preview'] ?>"></div>
			<div class="games-admin__value"><a class="games__link" href="/games/9/"><?=$value['title'] ?></a></div>
			<div class="games-admin__value"><?=$value['date'] ?> </div>			
			<div class="games-admin__value"> <a class="btn btn-secondary mb-2"  href="<?=base_url()?>games/edit_game/<?=$value['id'] ?>"> Редактировать</a> </div>
			<div class="games-admin__value"> <button class="btn btn-light" onclick="confirmArchived(<?=$value['id'] ?>, '<?=$value['title'] ?>');">Архивировать</button> </div>
		</div>      
		<?php endforeach; ?>                           
</section>

<script>
	function confirmArchived(id, title) {		
		let del = confirm('Вы уверены, что хотите архивировать "' + title + '"?');
		if (del) {
		 	window.location.replace("/app/games/archive_game/"+id);
		}
	}
</script>


