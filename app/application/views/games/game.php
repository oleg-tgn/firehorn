<header class="header header-page">
	<div class="container">
		<h1 class="main-title">
			<?=$game['title']?>
		</h1>	
		<h2 class="main-date">
			<?=$game['date']?>
		</h2>
	</div>
</header>
<main class="main">	
	<?php if ($game['challonge']): ?>
		<h2 class="title-line">Турнирная сетка</h2>	
		<iframe src="https://challonge.com/ru/<?=$game['challonge']?>/module" width="100%" height="650" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
	<?php endif; ?>
</main>	

