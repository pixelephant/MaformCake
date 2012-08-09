<?php $this->layout = 'maform'; ?>
<?php $lang = CakeSession::read('Config.language'); ?>
<hgroup>
  <h1>Works</h1>
  <h2>We are proud of</h2>
</hgroup>

<section id="portfolio">
  <?php foreach($portfolio_items as $item): ?>

    <div class="element">
      <a href="<?php echo $this->webroot; ?>portfolio/<?php echo $item['Portfolio']['slug']; ?>">
        <?php echo $this->Html->image($item['Portfolio']['list_image'], array('alt' => $item['Portfolio']['name'])); ?>
        <div class="data">
          <h3><?php echo $item['Portfolio']['name']; ?></h3>
          <p><?php echo $item['Portfolio']['description']; ?></p>
          <p>&rarr;</p>
        </div>
      </a>
    </div>

  <?php endforeach; ?>
</section>

<div id="cta" class="clearfix">
  <a href="<?php echo $this->webroot; ?><?php echo $lang ?>"><?php echo __('About'); ?></a>
  <a class="most" href="<?php echo $this->webroot; ?><?php echo $lang ?>/hireus"><b><?php echo __('Hire us'); ?></b></a>
  <a href="<?php echo $this->webroot; ?><?php echo $lang ?>/method"><?php echo __('Our method'); ?></a>
</div>