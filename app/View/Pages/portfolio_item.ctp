<?php $this->layout = 'maform'; ?>
<?php $lang = CakeSession::read('Config.language'); ?>

<?php $this->start('title'); ?><?php echo $portfolio['Portfolio']['name']; ?> formatervezés<?php $this->end(); ?>
<?php $this->start('description'); ?><?php echo $portfolio['Portfolio']['description']; ?><?php $this->end(); ?>
<?php $this->start('keywords'); ?><?php $this->end(); ?>

<hgroup>
  <h1><?php echo $portfolio['Portfolio']['name']; ?></h1>
  <h2><?php echo $portfolio['Portfolio']['description']; ?>
    <?php 
      if($portfolio['Portfolio']['client'] != ''){
       echo "<span>" . __('client') . ": " . $portfolio['Portfolio']['client'] . "</span>";
      }
    ?>
  </h2>
</hgroup>
<p id="portfolio-nav">
  <a class="prev" href="<?php echo $this->webroot; ?><?php echo ($lang == 'en' ? 'en/' : ''); ?>portfolio/<?php echo $prev_item[0]['portfolios']['slug']; ?>"> <span aria-hidden="true">&laquo;</span> <?php echo __('previous'); ?></a>
  <a href="#" class="all"><?php echo $portfolio['Portfolio']['name']; ?></a>
  <a class="next" href="<?php echo $this->webroot; ?><?php echo ($lang == 'en' ? 'en/' : ''); ?>portfolio/<?php echo $next_item[0]['portfolios']['slug']; ?>"><?php echo __('next'); ?> <span aria-hidden="true">&raquo;</span></a>
</p>
<p id="data">
  <?php echo $portfolio['Portfolio']['data']; ?>
</p>

<section id="project">
  <?php echo $this->Html->retinaImage($portfolio['Portfolio']['large_image'],'img/portfolio/' . $portfolio['Portfolio']['slug'] . '/','Award winning project', true); ?>
  
    <?php foreach($portfolio_texts as $text): ?>
    <div class="text">
      <h3><?php echo $text['PortfolioItemText']['title']; ?></h3>
      <p><?php echo $text['PortfolioItemText']['paragraphs']; ?></p>
    </div>
    <?php endforeach; ?>

    <?php foreach($portfolio_images as $image): ?>
      <figure>
        <?php if($image['PortfolioItemImage']['video'] == 1){ ?>
            <div class="video"><?php echo $image['PortfolioItemImage']['image_file']; ?></div>
        <?php 
          }else{
            echo $this->Html->retinaImage($image['PortfolioItemImage']['image_file'],'img/portfolio/' . $portfolio['Portfolio']['slug'] . '/',$image['PortfolioItemImage']['title'], true);
          } 
        ?>
        <p><?php echo $image['PortfolioItemImage']['paragraphs']; ?></p>
      </figure>
    <?php endforeach; ?>

</section>

<div id="cta" class="clearfix">
  <a href="<?php echo $this->webroot; ?><?php echo ($lang == 'en' ? 'en/' : '') ?>"><?php echo __('About'); ?></a>
  <a class="most" href="<?php echo $this->webroot; ?><?php echo ($lang == 'en' ? 'en/' : '') ?>hireus"><b><?php echo __('Hire us'); ?></b></a>
  <a href="<?php echo $this->webroot; ?><?php echo ($lang == 'en' ? 'en/' : '') ?>method"><?php echo __('Our method'); ?></a>
</div>