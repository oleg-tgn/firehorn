<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Вход</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>	  
	  <form action="<?php echo base_url();?>login/validation" method="post">
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
			<div class="form-group mb-3">
				<label>Введите Email</label>
				<input type="text" name="user_email" class="form-control input" value="<?php echo set_value('user_email'); ?>">
				<span class="text-danger"><?php echo form_error('user_email'); ?></span>
			</div>
			<div class="form-group mb-3">
				<label>Введите Пароль</label>
				<input type="password" name="user_password" class="form-control input" value="<?php echo set_value('user_password'); ?>">
				<span class="text-danger"><?php echo form_error('user_password'); ?></span>
			</div>			    
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
			<button type="submit" class="btn btn-primary">Войти</button>
		</div>
	  </form>
    </div>
  </div>
</div>
