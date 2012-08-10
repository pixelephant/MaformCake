<?php $this->layout = 'maform'; ?>

<hgroup>
  <h1><?php echo $portfolio['Portfolio']['name']; ?></h1>
  <h2><?php echo $portfolio['Portfolio']['description']; ?></h2>
</hgroup>
<p id="portfolio-nav">
  <a class="prev" href="#"> <span aria-hidden="true">&laquo;</span> Previous</a>
  <a href="#" class="all"><?php echo $portfolio['Portfolio']['name']; ?></a>
  <a class="next" href="#">Next <span aria-hidden="true">&raquo;</span></a>
</p>
<p id="data">
  <?php echo $portfolio['Portfolio']['data']; ?>
</p>

<section id="project">
  <?php echo $this->Html->retinaImage($portfolio['Portfolio']['large_image'],'img/portfolio/' . $portfolio['Portfolio']['slug'] . '/','Award winning project'); ?>
  <div class="text">
    <?php foreach($portfolio_texts as $text): ?>
      <h3><?php echo $text['PortfolioItemText']['title']; ?></h3>
      <p><?php echo $text['PortfolioItemText']['paragraphs']; ?></p>
    <?php endforeach; ?>
  </div>

  <figure>
    <?php foreach($portfolio_images as $image): ?>
      <?php echo $this->Html->retinaImage($image['PortfolioItemImage']['image_file'],'img/portfolio/' . $portfolio['Portfolio']['slug'] . '/',$portfolio['Portfolio']['name']); ?>
      <p><?php echo $image['PortfolioItemImage']['paragraphs']; ?></p>
    <?php endforeach; ?>
  </figure>
</section>