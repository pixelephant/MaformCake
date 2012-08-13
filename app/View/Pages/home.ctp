<?php $this->layout = 'maform'; ?>
<?php $lang = CakeSession::read('Config.language'); ?>

<?php $this->start('title'); ?><?php echo __('home_meta_title'); ?><?php $this->end(); ?>
<?php $this->start('description'); ?><?php echo __('home_meta_desc'); ?><?php $this->end(); ?>
<?php $this->start('keywords'); ?><?php echo __('home_meta_keywords'); ?><?php $this->end(); ?>

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
    <?php echo $this->Html->link('CV', '/doc/peti_cv.pdf', array('class' => 'cv')); ?>
    <?php echo $this->Html->retinaImage('peti.png','img/',__('peti_name')); ?>
    <h3><?php echo __('peti_name'); ?></h3>
    <p><?php echo __('peti_paragraphs'); ?></p>
  </div>
  <div class="member" id="geza">
    <?php echo $this->Html->link('CV', '/doc/geza_cv.pdf', array('class' => 'cv')); ?>
    <?php echo $this->Html->retinaImage('geza.png','img/',__('geza_name')); ?>
    <h3><?php echo __('geza_name'); ?></h3>
    <p><?php echo __('geza_paragraphs'); ?></p>
</div>
</section>

<div id="cta" class="clearfix">
  <a href="<?php echo $this->webroot; ?><?php echo $lang ?>/method"><?php echo __('Our method'); ?></a>
  <a class="most" href="<?php echo $this->webroot; ?><?php echo $lang ?>/portfolio"><b><?php echo __('Works'); ?></b></a>
  <a href="<?php echo $this->webroot; ?><?php echo $lang ?>/hireus"><?php echo __('Hire us'); ?></a>
</div>