<?php $this->layout = 'maform'; ?>

<hgroup>
  <h1><?php echo $portfolio['Portfolio']['name']; ?></h1>
  <h2><?php echo $portfolio['Portfolio']['description']; ?></h2>
</hgroup>
<p id="portfolio-nav">
  <a class="prev" href="#"> <span aria-hidden="true">&laquo;</span> Előző</a>
  <a href="#" class="all"><?php echo $portfolio['Portfolio']['name'] ?></a>
  <a class="next" href="#">Következő <span aria-hidden="true">&raquo;</span></a>
</p>
<p id="data">
  <?php echo $portfolio['Portfolio']['data']; ?>
</p>

<section id="project">
  
  <img src="http://www.placekitten.com/1400/400" alt="">
  <?php $this->Html->image($portfolio['Portfolio']['large_image'], array('alt' => $portfolio['Portfolio']['name'])); ?>
  <?php foreach($portfolio['PortfolioItemText'] as $item): ?>
    <div class="text">
      <h3><?php echo $item['title']; ?></h3>
      <p><?php echo $item['paragraphs']; ?></p>
    </div>  
  <?php endforeach; ?>

  <?php foreach($portfolio['PortfolioItemImage'] as $item): ?>
    <figure>
      <?php echo $this->Html->image($item['image_file'], array('alt' => $item['title'])); ?>
      <p><?php echo $item['paragraphs'] ?></p>
    </figure>
  <?php endforeach; ?>
</section>

<div id="cta" class="clearfix">
  <a href="">About</a>
  <a class="most" href=""><b>Hire us</b></a>
  <a href="">Works</a>
</div>