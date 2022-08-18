<?php
    $uri = $_SERVER['REQUEST_URI'];
?>
<div class="nav-scroller shadow-sm sub-navbar">
<section class="container">
    <nav class="nav nav-underline sub-navbar__nav">
        <a class="nav-link sub-navbar__link <?php if ($uri=='/games/5/index.php'): ?>active<?php endif;?>" href="index.php">Сетка</a>
        <a class="nav-link sub-navbar__link <?php if ($uri=='/games/5/teams.php'): ?>active<?php endif;?>" href="teams.php">Составы</a>
        <a class="nav-link sub-navbar__link <?php if ($uri=='/games/5/time.php'): ?>active<?php endif;?>" href="time.php">Расписание</a>
        <a class="nav-link sub-navbar__link <?php if ($uri=='/games/5/rules.php'): ?>active<?php endif;?>" href="rules.php">Регламент</a>
    </nav>
</section>
</div>