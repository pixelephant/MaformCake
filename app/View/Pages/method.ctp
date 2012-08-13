<?php $this->layout = 'maform'; ?>
<?php $lang = CakeSession::read('Config.language'); ?>

<?php $this->start('title'); ?><?php echo __('method_meta_title'); ?><?php $this->end(); ?>
<?php $this->start('description'); ?><?php echo __('method_meta_desc'); ?><?php $this->end(); ?>
<?php $this->start('keywords'); ?><?php echo __('method_meta_keywords'); ?><?php $this->end(); ?>

<hgroup>
  <h1><?php echo __('method_title_first_line'); ?></h1>
  <h2><?php echo __('method_title_second_line'); ?></h2>
</hgroup>
<section id="steps">
  <div class="step">
    <?php echo $this->Html->retinaImage('discuss.png','img/','Discuss'); ?>
    <h3><?php echo __('discuss_title'); ?></h3>
    <p><?php echo __('discuss_text'); ?></p>
  </div>
  <div class="step">
    <?php echo $this->Html->retinaImage('research.png','img/','Research'); ?>
    <h3><?php echo __('research_title'); ?></h3>
    <p><?php echo __('research_text'); ?></p>
</div>
<div class="step">
    <?php echo $this->Html->retinaImage('design.png','img/','Design'); ?>
    <h3><?php echo __('design_title'); ?></h3>
    <p><?php echo __('design_text'); ?></p>
</div>
<div class="step">
    <?php echo $this->Html->retinaImage('implement.png','img/','Implement'); ?>
    <h3><?php echo __('implement_title'); ?></h3>
    <p><?php echo __('implement_text'); ?></p>
</div>
<div class="step">
    <?php echo $this->Html->retinaImage('present.png','img/','Present'); ?>
    <h3><?php echo __('present_title'); ?></h3>
    <p><?php echo __('present_text'); ?></p>
</div>
<div class="step">
    <?php echo $this->Html->retinaImage('feedback.png','img/','Feedback'); ?>
    <h3><?php echo __('feedback_title'); ?></h3>
    <p><?php echo __('feedback_text'); ?></p>
</div>
</section>

<div id="cta" class="">
  <a href="<?php echo $this->webroot; ?><?php echo ($lang == 'en' ? 'en/' : '') ?>"><?php echo __('About'); ?></a>
  <a class="most" href="<?php echo $this->webroot; ?><?php echo ($lang == 'en' ? 'en/' : '') ?>portfolio"><b><?php echo __('Works'); ?></b></a>
  <a href="<?php echo $this->webroot; ?><?php echo ($lang == 'en' ? 'en/' : '') ?>hireus"><?php echo __('Hire us'); ?></a>
</div>