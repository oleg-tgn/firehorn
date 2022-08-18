<?php
    $uri = $_SERVER['REQUEST_URI'];
?>
<div class="nav-scroller shadow-sm sub-navbar">
<section class="container">
    <nav class="nav nav-underline sub-navbar__nav">
        <a class="nav-link sub-navbar__link <?php if ($uri=='/games/9/index.php'): ?>active<?php endif;?>" href="index.php">Предварительная</a>
        <a class="nav-link sub-navbar__link <?php if ($uri=='/games/9/playoff.php'): ?>active<?php endif;?>" href="playoff.php">Плей-офф</a>
        <a class="nav-link sub-navbar__link <?php if ($uri=='/games/9/rules.php'): ?>active<?php endif;?>" href="rules.php">Регламент</a>
        <a class="nav-link sub-navbar__link <?php if ($uri=='/games/9/teams.php'): ?>active<?php endif;?>" href="teams.php">Составы</a>
    </nav>
</section>
</div>