<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="hu"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="hu"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="hu"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="hu"> <!--<![endif]-->
<head>
  <?php header('Content-type: text/html; charset=UTF-8') ;?>
  <?php echo $this->Html->charset('utf-8'); ?>

  <?php $current_lang = CakeSession::read('Config.language'); ?>
  <?php $other_lang = $this->params->lang == 'hu' ? 'en' : 'hu'; ?>

  <?php 
    $url = explode("/", $this->here);
    unset($url[0]);
    unset($url[1]);
    unset($url[2]);
    $other_url = implode("/", $url);
  ?>

  <?php $current_page = $this->params->url; ?>

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Maform</title>
  <meta name="description" content="">
  <meta name="apple-mobile-web-app-capable" content="yes" />  

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <?php echo $this->Html->meta('icon'); ?>
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <?php echo $this->Html->css('flexslider'); ?>
  <?php echo $this->Html->css('style'); ?>
  <?php echo $this->fetch('style'); ?>
  <?php echo $this->fetch('meta'); ?>

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <?php echo $this->Html->script('modernizr-2.5.3.min'); ?>
  <?php echo $this->fetch('script'); ?>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>
      <a id="logo" href="<?php echo $this->webroot; ?><?php echo $current_lang; ?>">
        <div data-picture data-alt="Maform logó">
          <div data-src="<?php echo $this->webroot; ?>img/logo.png"></div>
          <div data-src="<?php echo $this->webroot; ?>img/logo@2x.png" data-media="(min-device-pixel-ratio: 2.0)"></div>
          <noscript>
            <?php echo $this->Html->image('logo.png', array('alt' => 'Maform logó')); ?>
          </noscript>
        </div>
      </a>
      <span id="language">
        <?php echo $this->Html->Link('hu', "/hu/" . $other_url, array('class' => $current_lang == 'hu' ? 'active' : '')); ?> / 
        <?php echo $this->Html->Link('en', "/en/" . $other_url, array('class' => $current_lang == 'en' ? 'active' : '')); ?>
      </span>
    <nav>
      <ul>
        <li><?php echo $this->Html->link(__('menu_method'), '/' . $current_lang . '/method', ($current_page == 'method' ? array('class' => 'active') : '')); ?></li>
        <li><?php echo $this->Html->link(__('menu_portfolio'), '/' . $current_lang . '/portfolio', ($current_page == 'portfolio' ? array('class' => 'active') : '')); ?></li>
        <li><?php echo $this->Html->link(__('menu_hireus'), '/' . $current_lang . '/hireus', ($current_page == 'hireus' ? array('class' => 'active') : '')); ?></li>
      </ul>
    </nav>
    <?php echo $this->fetch('home-slider'); ?>
  </header>

  <section id="content">
    <?php echo $this->fetch('content'); ?>
  </section>
  <footer>
   <p><?php echo __('contact_email', '<a href="mailto:info@maform.hu">info@maform.hu</a>', '<a href="tel:+36307472416">+36-30-747-2416</a>'); ?></p>
    <ul>
      <li>
        <a href="http://www.facebook.com/maformdesign">
          <div data-picture data-alt="Maform on Facebook">
            <div data-src="<?php echo $this->webroot; ?>/img/facebook.png"></div>
            <div data-src="<?php echo $this->webroot; ?>/img/facebook@2x.png" data-media="(min-device-pixel-ratio: 2.0)"></div>
            <noscript>
              <?php echo $this->Html->image('facebook.png', array('alt' => 'Facebook')); ?> 
            </noscript>
          </div>
          <?php echo __('facebook'); ?>
        </a>
      </li>
      <li>
        <a href="http://www.be.net/maform">
          <div data-picture data-alt="Maform on Behance">
            <div data-src="<?php echo $this->webroot; ?>/img/behance.png"></div>
            <div data-src="<?php echo $this->webroot; ?>/img/behance@2x.png" data-media="(min-device-pixel-ratio: 2.0)"></div>
            <noscript>
              <?php echo $this->Html->image('behance.png', array('alt' => 'Behance')); ?>
            </noscript>
          </div>
          <?php echo __('behance'); ?>
        </a>
      </li>
      <li>
        <a href="http://www.maform.tumblr.com">
          <div data-picture data-alt="Maform on Tumblr">
            <div data-src="<?php echo $this->webroot; ?>/img/tumblr.png"></div>
            <div data-src="<?php echo $this->webroot; ?>/img/tumblr@2x.png" data-media="(min-device-pixel-ratio: 2.0)"></div>
            <noscript>
              <?php echo $this->Html->image('tumblr.png', array('alt' => 'Tumblr')); ?>
            </noscript>
          </div>
          <?php echo __('tumblr'); ?>
        </a>
      </li>
      <li>
        <a href="http://www.vimeo.com/user5301012">
          <div data-picture data-alt="Maform on Vimeo">
            <div data-src="<?php echo $this->webroot; ?>/img/vimeo.png"></div>
            <div data-src="<?php echo $this->webroot; ?>/img/vimeo@2x.png" data-media="(min-device-pixel-ratio: 2.0)"></div>
            <noscript>
              <?php echo $this->Html->image('vimeo.png', array('alt' => 'Vimeo')); ?>
            </noscript>
          </div>
          <?php echo __('vimeo'); ?>
        </a>
      </li>
    </ul>
    <p id="copy">
      Webdesign by <a href="http://www.pixelephant.hu">Pixelephant Media</a>
      <span>&copy; 2012 - Maform</span>
    </p>
  </footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <!--[if lt IE 9]>  <script src="js/ie.js"></script> <![endif]-->
  <!--<script src="js/retina.js"></script>-->
  <?php echo $this->Html->script('main'); ?>
  <?php echo $this->Html->script('jquery.flexslider-min'); ?>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>