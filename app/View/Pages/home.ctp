<?php $this->layout = 'maform'; ?>
<?php 
  $this->start('home-slider');
?>
    <div class="flexslider carousel">
      <ul class="slides">        
        <li><img src="img/slider/slider-face.jpg" alt=""></li>
        <li><img src="img/slider/slider-m8.jpg" alt=""></li>
        <li><img src="img/slider/slider-pa.jpg" alt=""></li>
        <li><img src="img/slider/slider-paq.jpg" alt=""></li>
      </ul>
    </div>
<?php 
  $this->end();
?>

<?php $this->Html->css('flexslider', null, array('inline' => false)); ?>
<hgroup>
  <h1><?php echo __('home_title_first_line'); ?></h1>
  <h2><?php echo __('home_title_second_line'); ?></h2>
</hgroup>
<section id="members">
  <div class="member" id="peti">
    <a href="#" class="cv">CV</a>
    <img src="img/peti.png" alt="">
    <h3><?php echo __('peti_name'); ?></h3>
    <p><?php echo __('peti_paragraphs'); ?></p>
  </div>
  <div class="member" id="geza">
    <a href="#" class="cv">CV</a>
    <img src="img/geza.png" alt="">
    <h3><?php echo __('geza_name'); ?></h3>
    <p><?php echo __('geza_paragraphs'); ?></p>
</div>
</section>

<div id="cta" class="clearfix">
  <a href=""><?php echo __('Our method'); ?></a>
  <a class="most" href=""><b><?php echo __('Works'); ?></b></a>
  <a href=""><?php echo __('Hire us'); ?></a>
</div>