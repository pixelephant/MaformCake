<?php $this->layout = 'maform'; ?>
<hgroup>
  <h1>Works</h1>
  <h2>We are proud of</h2>
</hgroup>

<section id="portfolio">
  <?php foreach($portfolio_items as $item): ?>

    <div class="element">
      <a href="/portfolio/<?php echo $item['Portfolio']['slug']; ?>">
        <?php echo $this->Html->image($item['Portfolio']['list_image'], array('alt' => $item['Portfolio']['name'])); ?>
        <div>
          <h3><?php echo $item['Portfolio']['name']; ?></h3>
          <p><?php echo $item['Portfolio']['description']; ?></p>
          <p>&rarr;</p>
        </div>
      </a>
    </div>

  <?php endforeach; ?>
</section>

<div id="cta" class="clearfix">
  <a href="">Previous</a>
  <a class="most" href=""><b>Hire us</b></a>
  <a href="">Next</a>
</div>