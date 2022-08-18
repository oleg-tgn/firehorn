


<section class="container">	
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="margin-top: 50px; margin-bottom: 50px;">
		Добавить турнир
	</button>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Добавить турнир</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="<? echo base_url(); ?>games/add_game" method="post" enctype="multipart/form-data">	
      <div class="modal-body">
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
				<input type="text" name="title" class="form-control input" value="<?php echo set_value('title')?>" required>
				<span class="text-danger"><?php echo form_error('title'); ?></span>
			</div>

			<div class="form-group mb-3">
				<label for="">Дата</label>
				<input type="date" name="date" class="input form-control input" value="<?php echo set_value('date')?>" required>
				<span class="text-danger"><?php echo form_error('date'); ?></span>
			</div>

			<div class="form-group mb-3">
				<label for="">Изображение</label>
				<input type="file" name="preview" class="input form-control input" value="<?php echo set_value('preview')?>" required>
				<span class="text-danger"><?php echo form_error('preview'); ?></span>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary">Создать</button>
      </div>
	  </form>
    </div>
  </div>
</div>
