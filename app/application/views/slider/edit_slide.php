<div class="container">
	<form action="<? echo base_url(); ?>slider/update_slide/<?=$slide['id']?>" method="post" enctype="multipart/form-data" class="mt-5">	      
	  	<?php
			if ($this->session->flashdata('message')) {
				echo '
					<div class="alert alert-success">
						'.$this->session->flashdata('message').'
					</div>
				';
			}
		?>		
			<input type="hidden" name="id" class="form-control input" value="">

			<div class="form-group mb-3">
				<label for="">Заголовок</label>
				<input type="text" name="title" class="form-control input" value="<?=$slide['title']?>" required>				
			</div>

			<div class="form-group mb-3">
				<label for="">Описание</label>
				<textarea name="description" class="input form-control input" value="<?=$slide['description']?>" required> </textarea>				
			</div>

			<div class="form-group mb-3">
				<label for="">Изображение</label>
				<input type="file" name="img" class="input form-control input" value="<?=$slide['img']?>">				
			</div>

			<div class="form-group mb-3">
				<label for="">Текст кнопки</label>
				<input type="text" name="link_text" class="form-control input" value="<?=$slide['link_text']?>" required>				
			</div>
			
			<div class="form-group mb-3">
				<label for="">Ссылка</label>
				<input type="text" name="link_url" class="form-control input" value="<?=$slide['link_url']?>" required>				
			</div>          
        <a href="/app/dashboard/slider" class="btn btn-secondary">Назад</a>
        <button type="submit" class="btn btn-primary">Сохранить</button>      
	  </form>
</div>
