<div class="container">

	<?php
		$this->load->view('slider/add_slide_modal');				
	?>	

	<ul class="admsliders__list">

		<?php foreach ($slider as $key => $slide): ?>
		<li class="admsliders__item">
			<div class="admsliders__img">
				<img width="150" src="/app/static/uploads/slider/<?=$slide['img']?>" alt="">
			</div>

			<h2 class="admsliders__title"><?=$slide['title']?></h2>
			<p class="admsliders__description"><?=$slide['description']?></p>
			<div class="admsliders__link">
				<a href="<?=$slide['link_url']?>" class="btn btn-light"><?=$slide['link_text']?></a>	
			</div>
			<div class="admsliders__actions">
				<a href="/app/slider/edit_slide/<?=$slide['id']?>" class="mb-2 btn btn-secondary">Редактировать</a>	
				<a href="/app/slider/archive_slide/<?=$slide['id']?>" class="mb-2 btn btn-light">Архивировать</a>	
			</div>
		</li>
		<?php endforeach; ?>

	</ul>
</div>


