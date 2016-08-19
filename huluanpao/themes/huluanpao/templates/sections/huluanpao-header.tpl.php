<header class="globalHeader hidden-sm hidden-xs">
  <div class="logo"><a href="/">湖乱跑</a></div>
  <div class="container">
    <nav class="nav">
      <ul class="mainNav clearfix">
        <li class="first"><a href="<?php echo url('index.html'); ?>">首页</a></li>
        <li>
          <!--                  <a href="http://qiandaohu.huluanpao.com">千岛湖马拉松</a>-->
          <a href="">赛事活动<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li><a href="<?php echo url('qdh.html'); ?>">2016 千岛湖马拉松</a></li>
              <li><a href="http://nanjing.huluanpao.com/" target="_blank">2016 汇添富南京山地马拉松</a></li>
            </ul>
          </div>
        </li>
        <li class="menu-brand">
          <a href="">关于品牌<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li><a href="<?php echo url('story.html'); ?>">品牌故事</a></li>
              <li><a href="<?php echo url('about-us.html'); ?>">关于我们</a></li>
            </ul>
          </div>
        </li>
        <li class="last national-flag">
          <a href="<?php echo url('<front>'); ?>" class="active"><img src="<?php echo url(path_to_theme() . '/images/cn_logo.png') ?>" alt=""/></a>
          <a href="http://en.huluanpao.com"><img src="<?php echo url(path_to_theme() . '/images/en_logo.png') ?>" alt=""/></a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<!--<header class="globalHeader visible-sm-block visible-xs-block">-->
<!--  <div class="mb-logo">-->
<!--    <img src="/profiles/huluanpao/themes/huluanpao/images/logo.svg" alt="logo" class="img-responsive"></div>-->
<!--</header>-->

<nav class="navbar navbar-default visible-sm-block visible-xs-block mb-nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <!--        <span class="sr-only">Toggle navigation</span>-->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand mb-logo" href="#"><img src="/profiles/huluanpao/themes/huluanpao/images/logo.svg" alt="logo" class="img-responsive"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?php echo url('index.html'); ?>">首页</a></li>
<!--        <li><a href="#">Link</a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">赛事活动
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo url('qdh.html'); ?>">2016 千岛湖马拉松</a></li>
            <li><a href="http://nanjing.huluanpao.com/" target="_blank">2016 汇添富南京山地马拉松</a></li>
<!--            <li><a href="#">Something else here</a></li>-->
<!--            <li role="separator" class="divider"></li>-->
<!--            <li><a href="#">Separated link</a></li>-->
<!--            <li role="separator" class="divider"></li>-->
<!--            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">关于品牌
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo url('story.html'); ?>">品牌故事</a></li>
            <li><a href="<?php echo url('about-us.html'); ?>">关于我们</a></li>
          </ul>
        </li>
      </ul>
<!--      <ul class="nav navbar-nav navbar-right">-->
<!--        <li><a href="#">Link</a></li>-->
<!--        <li class="dropdown">-->
<!--          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown-->
<!--            <span class="caret"></span></a>-->
<!--          <ul class="dropdown-menu">-->
<!--            <li><a href="#">Action</a></li>-->
<!--            <li><a href="#">Another action</a></li>-->
<!--            <li><a href="#">Something else here</a></li>-->
<!--            <li role="separator" class="divider"></li>-->
<!--            <li><a href="#">Separated link</a></li>-->
<!--          </ul>-->
<!--        </li>-->
<!--      </ul>-->
    </div>
  </div>
</nav>