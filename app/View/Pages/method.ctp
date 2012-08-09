<?php $this->layout = 'maform'; ?>
<?php $lang = CakeSession::read('Config.language'); ?>
<hgroup>
  <h1><?php echo __('method_title_first_line'); ?></h1>
  <h2><?php echo __('method_title_second_line'); ?></h2>
</hgroup>
<section id="steps">
  <div class="step">
    <?php echo $this->Html->image('discuss.png', array('alt' => 'Discuss')); ?>
    <h3><?php echo __('discuss_title'); ?></h3>
    <p><?php echo __('discuss_text'); ?></p>
  </div>
  <div class="step">
    <?php echo $this->Html->image('research.png', array('alt' => 'Research')); ?>
    <h3><?php echo __('research_title'); ?></h3>
    <p><?php echo __('research_text'); ?></p>
</div>
<div class="step">
    <?php echo $this->Html->image('design.png', array('alt' => 'Design')); ?>
    <h3><?php echo __('design_title'); ?></h3>
    <p><?php echo __('design_text'); ?></p>
</div>
<div class="step">
    <?php echo $this->Html->image('implement.png', array('alt' => 'Implement')); ?>
    <h3><?php echo __('implement_title'); ?></h3>
    <p><?php echo __('implement_text'); ?></p>
</div>
<div class="step">
    <?php echo $this->Html->image('present.png', array('alt' => 'Present')); ?>
    <h3><?php echo __('present_title'); ?></h3>
    <p><?php echo __('present_text'); ?></p>
</div>
<div class="step">
    <?php echo $this->Html->image('enjoy.png', array('alt' => 'Enjoy')); ?>
    <h3><?php echo __('enjoy_title'); ?></h3>
    <p><?php echo __('enjoy_text'); ?></p>
</div>
</section>

<div id="cta" class="">
  <a href="/<?php echo $lang ?>"><?php echo __('About'); ?></a>
  <a class="most" href="/<?php echo $lang ?>/portfolio"><b><?php echo __('Works'); ?></b></a>
  <a href="/<?php echo $lang ?>/hireus"><?php echo __('Hire us'); ?></a>
</div>