<header class="globalHeader hidden-sm hidden-xs">
  <div class="logo"><a href="/">Huluanpao</a></div>
  <div class="container">
    <nav class="nav">
      <ul class="mainNav clearfix">
        <li class="first"><a href="<?php echo url('index.html'); ?>">Home</a>
        </li>
        <li class="menu-event">
          <!--          <a href="http://en.qiandaohu.huluanpao.com">Qiandaohu</a>-->
          <a href="">Event<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li><a href="<?php echo url('qdh.html'); ?>">Thousand Island Lake</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="menu-brand">
          <a href="">About Brand<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li><a href="<?php echo url('story.html'); ?>">Brand Story</a>
              </li>
              <li><a href="<?php echo url('about-us.html'); ?>">About Us</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="last national-flag">
          <a href="http://huluanpao.com" class=""><img src="<?php echo url(path_to_theme() . '/images/cn_logo.png') ?>" alt=""/></a>
          <a href="<?php echo url('<front>'); ?>" class="active"><img src="<?php echo url(path_to_theme() . '/images/en_logo.png') ?>" alt=""/></a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<nav class="navbar navbar-default visible-sm-block visible-xs-block mb-nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand mb-logo" href="#"><img src="/profiles/huluanpao/themes/huluanpao/images/logo.svg" alt="logo" class="img-responsive"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?php echo url('index.html'); ?>">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Event
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo url('qdh.html'); ?>">Thousand Island Lake</a></li>
            <li><a href="http://nanjing.huluanpao.com/en" target="_blank">Nanjing Mountain Marathon</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About
            Brand
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo url('story.html'); ?>">Brand Story</a></li>
            <li><a href="<?php echo url('about-us.html'); ?>">About Us</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>