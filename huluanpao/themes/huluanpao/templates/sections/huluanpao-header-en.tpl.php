<header class="globalHeader">
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
              <li><a href="<?php echo url('qdh.html');?>">Thousand Island Lake</a>
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