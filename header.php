<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Odrazový můstek pro mladé internetové nadšence.">
  <meta name="author" content="Abdoc">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/wp-content/themes/juniorinternet/style.css" type="text/css" />
  <link rel="stylesheet" href="/wp-content/themes/juniorinternet/style-sponsors.css" type="text/css" />
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
<div class='menu'>
  <div class='inside'>
  <nav class='left'>
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
<header class='section'>
<div class='inside'>
  <h3 class='category'><?php the_tags('', ', ', ' - Category'); ?> </h3>
  <h2 class='title'><?php the_title(); ?></h2>
</div>
</header>
