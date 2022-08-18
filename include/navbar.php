<?php

$uri = $_SERVER['REQUEST_URI'];
?>
<style>
  .social-link i{
    color: #ddd;
  }

  .social-link:hover i{
    color: #ffac10;
  }

  @media (max-width: 991.98px) {
    .navbar-brand {
        width: 120px;
    }
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <section class="container-fluid">
      <a class="navbar-brand" href="/"> <img src="/img/fhl_it_2.svg"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav menu-links">
          <li class="nav-item <?php if ($uri=='/'): ?>active<?php endif;?>">
            <a class="nav-link" href="/">Главная</a>
          </li>
          <li class="nav-item dropdown <?php if (stripos($uri, 'tournaments') != false): ?>active<?php endif;?>">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Турниры <span class="sr-only">(current)</span>
            </a> 
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item <?php if  (stripos($uri, 'games/9')): ?>active<?php endif;?>"    href="/games/9/">#9 Лан-турнир (5x5) - 20 сентября 2020</a>
              <a class="dropdown-item <?php if (stripos($uri, 'games/8')): ?>active<?php endif;?>" 
                  href="/games/8/">#8 Онлайн РТК (5x5) - 25 июля 2020</a>
              <a class="dropdown-item <?php if (stripos($uri, 'games/7')): ?>active<?php endif;?>" 
                  href="/games/7/">#7 Онлайн-турнир (1x1) - 4 июля 2020</a>
              <a class="dropdown-item <?php if (stripos($uri, 'games/6')): ?>active<?php endif;?>" 
                  href="/games/6/">#6 Онлайн-турнир (1x1) - 26 апреля 2020</a>
              <a class="dropdown-item <?php if (stripos($uri, 'games/5')): ?>active<?php endif;?>" 
                  href="/games/5/">#5 Онлайн-турнир (5x5) - 24 февраля 2020</a>
              <a class="dropdown-item <?php if (stripos($uri, 'games/4')): ?>active<?php endif;?>" 
                  href="/games/4/">#4 Микс-турнир - 26 января 2020</a>
              <a class="dropdown-item <?php if (stripos($uri, 'games/3')): ?>active<?php endif;?>" 
                  href="/games/3/">#3 Микс-турнир - 11 января 2020</a>
              <a class="dropdown-item <?php if (stripos($uri, 'games/2')): ?>active<?php endif;?>" 
                  href="/games/2/">#2 Лан-турнир (5x5) - 30 нобря 2019</a>
              <a class="dropdown-item <?php if (stripos($uri, 'games/1')): ?>active<?php endif;?>"  href="/games/1/">#1 Лан-турнир (5x5) - 5 октября 2019</a>
            </div>
          </li>
          <li class="nav-item dropdown <?php if (stripos($uri, 'broadcast') != false): ?>active<?php endif;?>">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                События
            </a> 
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item <?php if ($uri=='/broadcast/2019/11/10/'): ?>active<?php endif;?>" href="/broadcast/2019/11/10">Финал ЧМ 2019 в New York Coffee</a>
              <a class="dropdown-item <?php if ($uri=='/broadcast/2019/10/16/'): ?>active<?php endif;?>" href="/broadcast/2019/10/16">Юбилейная трансляция 10 лет LOL</a>
            </div>
          </li>
          <li class="nav-item <?php if (stripos($uri, 'donate') != false): ?>active<?php endif;?>">
            <a class="nav-link" href="/donate" id="navbarDropdownMenuLink">
                Поддержать
            </a> 
          </li>
        </ul>
        <ul class="navbar-nav flex-row d-none d-md-flex navbar-nav-social">
                    
          <li class="nav-item" style="padding: 0 15px">
            <a href="https://vk.com/firehorn" target="_blank">
              <i class="icon-vk" style="font-size: 24px;"></i></a>
          </li>

          <li class="nav-item" style="padding: 0 15px">
            <a href="https://t.me/firehorn" target="_blank" class="social-link" >
              <i class="fa fa-telegram" aria-hidden="true" style="font-size: 23px;"></i>
          </li>

          <li class="nav-item" style="padding: 0 15px">
            <a href="https://www.youtube.com/channel/UChaA9krZaM5qgR6-u0YE2pA/f" target="_blank">
              <i class="icon-youtube" style="font-size: 23px;"></i></a>
          </li>
          <li class="nav-item" style="padding: 0 15px">
            <a href="https://www.instagram.com/firehornleague/" target="_blank">
              <i class="icon-instagram" style="font-size: 21px; line-height: 23px"></i></a>
          </li>
          
        </ul>
    </div>
    </section>
</nav>