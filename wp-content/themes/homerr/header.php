<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?php echo site_url(); ?>/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-header.css">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>

    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-70930043-2', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- / Google Analytics -->

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
      n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
      document,'script','https://connect.facebook.net/en_US/fbevents.js');

      fbq('init', '1682710452043162');
      fbq('track', "PageView");</script>
      <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1682710452043162&ev=PageView&noscript=1"
      /></noscript>
    <!-- End Facebook Pixel Code -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
      $post = $wp_query->post;
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/shared.css">
    <?php if ($post->ID == 15 || $post->ID == 575): ?>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-body-home.css">
    <?php elseif ($post->ID == 1137 || $post->ID == 1139): ?>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-ons-netwerk.css">
    <?php elseif ($post->ID == 20 || $post->ID == 1216): ?>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-hoe-werkt-homerr.css">
    <?php elseif ($post->ID == 22): ?>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-over-ons.css">
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/footer.css">
</head>

<body>
    <?php get_template_part( 'top_navigation' ); ?>
    <div class="main-content">
