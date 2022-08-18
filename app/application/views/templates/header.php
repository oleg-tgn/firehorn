<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$this->load->view('templates/head');
	?>	
</head>
<body>
	<header class="header">
		<?php
			$this->load->view('templates/navbar');

			$this->load->view('templates/navbar_admin');
			
			$this->load->view('templates/login_modal');
		?>	
	</header>
