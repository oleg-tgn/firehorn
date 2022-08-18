<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$this->load->view('templates/head');
	?>	
</head>
<body>
	<div class="banner" style="background-image: url('/app/static/uploads/slider/<?=$slide[0]['img']?>')">
		<header class="header header_home">
			<?php
				$this->load->view('templates/navbar');
				$this->load->view('templates/navbar_admin');				
				$this->load->view('templates/login_modal');
			?>	
		</header>
		<div class="banner__container">
			<div class="banner__content">
				<h1 class="banner__title">
					<?=$slide[0]['title']?>
				</h1>
				<p class="banner__description">
					<?=$slide[0]['description']?>
				</p>				
				<a href="<?=base_url()?><?=$slide[0]['link_url']?>" class="banner__btn"><?=$slide[0]['link_text']?></a>				
			</div>
		</div>
	</div>
