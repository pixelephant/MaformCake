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
   <h1>Industrial designers &trade;</h1>
  <h2>We are</h2>
</hgroup>
<section id="members">
  <div class="member" id="peti">
    <a href="#" class="cv">CV</a>
    <img src="img/peti.png" alt="">
    <h3>Péter Molnár</h3>
    <p>During a presonal meeting we get to know you and the design problem. We define the goals and other shit like budget and milestones.</p>
  </div>
  <div class="member" id="geza">
    <a href="#" class="cv">CV</a>
    <img src="img/geza.png" alt="">
    <h3>Géza Csire</h3>
    <p>During a presonal meeting we get to know you and the design problem. We define the goals and other shit like budget and milestones.</p>
</div>
</section>

<div id="cta" class="clearfix">
  <a href="">Our Method</a>
  <a class="most" href=""><b>Works</b></a>
  <a href="">Hire us</a>
</div>