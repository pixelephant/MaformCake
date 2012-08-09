<?php $this->layout = 'maform'; ?>
<?php $lang = CakeSession::read('Config.language'); ?>
<?php 
  $this->start('home-slider');
?>
    <div class="flexslider carousel">
      <ul class="slides">        
        <li>
          <div class="img" data-picture data-alt="">
            <div data-src="<?php echo $this->webroot; ?>img/slider/slider-01.jpg"></div>
            <div data-src="<?php echo $this->webroot; ?>img/slider/slider-01-m@2x.jpg" data-media="(min-device-pixel-ratio: 2.0)"></div>
            <div data-src="<?php echo $this->webroot; ?>img/slider/slider-01.jpg" data-media="(min-width: 767px)"></div>
            <div data-src="<?php echo $this->webroot; ?>img/slider/slider-01@2x.jpg" data-media="(min-width: 767px) and (min-device-pixel-ratio: 2.0)"></div>
            <noscript>
              <img src="<?php echo $this->webroot; ?>img/slider/slider-01-m.png" alt="">
            </noscript>
          </div>
        </li>
        <li>
          <div class="img" data-picture data-alt="">
            <div data-src="<?php echo $this->webroot; ?>img/slider/slider-02.jpg"></div>
            <div data-src="<?php echo $this->webroot; ?>img/slider/slider-02-m@2x.jpg" data-media="(min-device-pixel-ratio: 2.0)"></div>
            <div data-src="<?php echo $this->webroot; ?>img/slider/slider-02.jpg" data-media="(min-width: 767px)"></div>
            <div data-src="<?php echo $this->webroot; ?>img/slider/slider-02@2x.jpg" data-media="(min-width: 767px) and (min-device-pixel-ratio: 2.0)"></div>
            <noscript>
              <img src="<?php echo $this->webroot; ?>img/slider/slider-02-m.png" alt="">
            </noscript>
          </div>
        </li>
        <li>
          <div class="img" data-picture data-alt="">
            <div data-src="<?php echo $this->webroot; ?>img/slider/slider-03.jpg"></div>
            <div data-src="<?php echo $this->webroot; ?>img/slider/slider-03-m@2x.jpg" data-media="(min-device-pixel-ratio: 2.0)"></div>
            <div data-src="<?php echo $this->webroot; ?>img/slider/slider-03.jpg" data-media="(min-width: 767px)"></div>
            <div data-src="<?php echo $this->webroot; ?>img/slider/slider-03@2x.jpg" data-media="(min-width: 767px) and (min-device-pixel-ratio: 2.0)"></div>
            <noscript>
              <img src="<?php echo $this->webroot; ?>img/slider/slider-03-m.png" alt="">
            </noscript>
          </div>
        </li>
      </ul>
    </div>
<?php 
  $this->end();
?>

<hgroup>
  <h1><?php echo __('home_title_first_line'); ?></h1>
  <h2><?php echo __('home_title_second_line'); ?></h2>
</hgroup>
<section id="members">
  <div class="member" id="peti">
    <a href="#" class="cv">CV</a>
    <div data-picture data-alt="Molnár Péter">
      <div data-src="<?php echo $this->webroot; ?>img/peti.png"></div>
      <div data-src="<?php echo $this->webroot; ?>img/peti@2x.png" data-media="(min-device-pixel-ratio: 2.0)"></div>
      <noscript>
        <img src="<?php echo $this->webroot; ?>img/peti.png" alt="Molnár Péter">
      </noscript>
    </div>
    <h3><?php echo __('peti_name'); ?></h3>
    <p><?php echo __('peti_paragraphs'); ?></p>
  </div>
  <div class="member" id="geza">
    <a href="#" class="cv">CV</a>
    <div data-picture data-alt="Csire Géza">
      <div data-src="<?php echo $this->webroot; ?>img/geza.png"></div>
      <div data-src="<?php echo $this->webroot; ?>img/geza@2x.png" data-media="(min-device-pixel-ratio: 2.0)"></div>
      <noscript>
        <img src="<?php echo $this->webroot; ?>img/geza.png" alt="Csire Géza">
      </noscript>
    </div>
    <h3><?php echo __('geza_name'); ?></h3>
    <p><?php echo __('geza_paragraphs'); ?></p>
</div>
</section>

<div id="cta" class="clearfix">
  <a href="<?php echo $this->webroot; ?><?php echo $lang ?>/method"><?php echo __('Our method'); ?></a>
  <a class="most" href="<?php echo $this->webroot; ?><?php echo $lang ?>/portfolio"><b><?php echo __('Works'); ?></b></a>
  <a href="<?php echo $this->webroot; ?><?php echo $lang ?>/hireus"><?php echo __('Hire us'); ?></a>
</div>