<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="description" content="Odrazový můstek pro mladé internetové nadšence.">
  <meta name="author" content="Abdoc">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="wp-content/themes/juniorinternet/style-index.css" type="text/css" />
  <link rel="stylesheet" href="wp-content/themes/juniorinternet/style-sponsors.css" type="text/css" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <!-- Facebook -->
  <meta property="og:title" content="Junior Internet">
  <meta property="og:description" content="Odrazový můstek pro mladé internetové nadšence.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://www.juniorinternet.cz">
  <meta property="og:image" content="">

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-36437500-1', 'juniorinternet.cz');
    ga('send', 'pageview');
  </script>
</head>
<body>

<div class='resp-menu'>
    <div class='menu-icon'></div>
    <?php
  $leftMenu = array(
    'theme_location'  => 'primary',
    'container'   => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'items_wrap'      => '<ul class="left">%3$s</ul>',
    'depth'           => 0
  );
  wp_nav_menu( $leftMenu );
    ?>
</div>
<div class='menu fixed-menu'>
  <div class='inside'>
   <nav class='left'>
      <?php
        $leftMenu = array(
          'theme_location'      => 'primary',
            'container'   => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<ul class="left">%3$s</ul>',
            'depth'           => 0
          );
          wp_nav_menu( $leftMenu );
        ?>
      </nav>
      <nav class='right'>
        <?php
          $rightMenu = array(
            'theme_location'  => 'secondary',
            'container'   => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<ul class="right">%3$s</ul>',
            'depth'           => 0
          );
          wp_nav_menu( $rightMenu );
        ?>

        <div class="fb-like" data-href="https://www.facebook.com/juniorinternet.cz" data-width="50" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="www.juniorinternet.cz" data-text="Junior Internet pomáhá mladým lidem uspět na internetu - www.juniorinternet.cz" data-dnt="true"></a>
      </nav>
  </div>
</div>

<div class='resp-flag section'>
  <h3 class='competition'>KONFERENCE</h3>
  <h3>2014</h3>
  <p>Přijďte se podívat, kdo vyhraje 15. ročník Junior Internetu.</p>
  <div class='icons'>
    <a href=# class='icon money' data-icon='c'></a>
    <a href=# class='icon airplane' data-icon='b'></a>
    <a href=# class='icon document' data-icon='c'></a>
    <a href=# class='icon users' data-icon='b'></a>
  </div>
  <a href='<?php echo get_permalink(73); ?>' class='join'>Chci přijít</a>
</div>

<header class='section'>
  <div class='inside'>
    <h1 class='header-logo'>
      <div class='side left-side'>junior</div>
      <div class='side middle letter'>1</div>
      <div class='side right-side'>internet</div>
    </h1>

    <div class='rocket-start'>
      <div class='rocket-container'>
        <div class='rocket'></div>
        <div class='light'></div>
      </div>
      <div class='big-cloud'></div>
      <div class='left-cloud'></div>
      <div class='right-cloud'></div>
    </div>
  </div>
</header>
