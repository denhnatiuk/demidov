<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,user-scalable=no">
    <!-- safari 9 bug fix --><meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <!--stylesheets-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>">
    <!--search engines-->

    <!--open graph & social-->

    <!--fav-->
    <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-ipad-retina.png">
    <link rel="icon" type="image/png" href="64.png" sizes="64x64">
    <link rel="icon" type="image/png" href="128.png" sizes="128x128">

    <!-- scripts -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

    
    
  </head>
  <body>
    <header>
      <div id="top" class="container section">
        <div class="label">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img class="brand-logo" src="/wp-content/themes/demidov/assets/images/logo.png" alt="">
            <h1 class="brand-name hidden"><?php bloginfo( 'name' ); ?></h1>
          </a>
        </div>

   <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>

        <div class="item visible-xs-block">
          <div class="container">
            <div class="carousel-caption">
              <h2 class="section-header">Роскошь древесины <br> в Bашем доме</h2>
              <p>Позвольте себе качество</p>
              <p><a class="btn btn-lg btn-gold" href="#" role="button">Заказать сейчас</a></p>
            </div>
          </div>
        </div>
        <div class="slider">
          <div id="top-carousel" class="carousel slide hidden-xs" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#top-carousel" data-slide-to="0" class=""></li>
              <li data-target="#top-carousel" data-slide-to="1" class=""></li>
              <li data-target="#top-carousel" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item">
                <div class="container">
                  <div class="carousel-caption">
                    <h2 class="section-header">Роскошь древесины <br> в Bашем доме</h2>
                    <p>Позвольте себе качество</p>
                    <p><a class="btn btn-lg btn-gold" href="#" role="button">Заказать сейчас</a></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="container">
                  <div class="carousel-caption">
                    <h2 class="section-header">Роскошь древесины <br> в Bашем доме</h2>
                    <p>Позвольте себе качество</p>
                    <p><a class="btn btn-lg btn-gold" href="#" role="button">Заказать сейчас</a></p>
                  </div>
                </div>
              </div>
              <div class="item active">
                <div class="container">
                  <div class="carousel-caption">
                    <h2 class="section-header">Роскошь древесины <br> в Bашем доме</h2>
                    <p>Позвольте себе качество</p>
                    <p><a class="btn btn-lg btn-gold" href="#" role="button">Заказать сейчас</a></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> -->
          </div>
        </div>
          <?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
          	<a href="#content" class="menu-scroll-down">
          	  <div class="scroll">

              </div>
          	</a>
          <?php endif; ?>
      </div>
    </header>
    <div class="container-fluid">