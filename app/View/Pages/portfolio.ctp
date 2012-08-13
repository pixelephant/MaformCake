<?php $this->layout = 'maform'; ?>
<?php $lang = CakeSession::read('Config.language'); ?>

<?php $this->start('title'); ?><?php echo __('portfolio_meta_title'); ?><?php $this->end(); ?>
<?php $this->start('description'); ?><?php echo __('portfolio_meta_desc'); ?><?php $this->end(); ?>
<?php $this->start('keywords'); ?><?php echo __('portfolio_meta_keywords'); ?><?php $this->end(); ?>

<hgroup>
  <h1><?php echo __('portfolio_title_first_line') ?></h1>
  <h2><?php echo __('portfolio_title_second_line') ?></h2>
</hgroup>

<section id="portfolio">
  <?php foreach($portfolio_items as $item): ?>

    <div class="element">
      <a href="<?php echo $this->webroot; ?><?php echo ($lang == 'en' ? 'en/' : '') ?>portfolio/<?php echo $item['Portfolio']['slug']; ?>">
        <?php if($item['Portfolio']['badge'] == 1){ ?>
          <span class="badge">
            <?php echo $this->Html->retinaImage('badge.png','img/','Award winning project'); ?>
          </span>
        <?php } ?>
        <?php echo $this->Html->retinaImage($item['Portfolio']['list_image'],'img/portfolio/' . $item['Portfolio']['slug'] . '/',$item['Portfolio']['name']); ?>
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
  <a href="<?php echo $this->webroot; ?><?php echo ($lang == 'en' ? 'en/' : '') ?>"><?php echo __('About'); ?></a>
  <a class="most" href="<?php echo $this->webroot; ?><?php echo ($lang == 'en' ? 'en/' : '') ?>hireus"><b><?php echo __('Hire us'); ?></b></a>
  <a href="<?php echo $this->webroot; ?><?php echo ($lang == 'en' ? 'en/' : '') ?>method"><?php echo __('Our method'); ?></a>
</div>