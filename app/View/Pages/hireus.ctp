<?php $this->layout = 'maform'; ?>
<?php $lang = CakeSession::read('Config.language'); ?>
<hgroup>
  <h1><?php echo __('hireus_title_first_line'); ?></h1>
  <h2><?php echo __('hireus_title_second_line'); ?></h2>
</hgroup>
<section id="form">
  <div class="clearfix">
    <a class="active" href="#" data-type="offer"><?php echo __('offer'); ?></a>
    <a href="#" data-type="contact"><?php echo __('contact'); ?></a>
  </div>
  <form action="/email" method="POST" id="offer-form" class="formy" validate>
    <fieldset>
      <label for="offer-name"><?php echo __('form_name'); ?></label>
      <input type="text" name="offer-name" id="offer-name" required>
    </fieldset>
    <fieldset>
      <label for="offer-email"><?php echo __('form_email'); ?></label>
      <input type="email" name="offer-email" id="offer-email" required>
    </fieldset>
    <fieldset id="budget-field">
      <label for="offer-budget"><?php echo __('form_budget'); ?></label>
      <select name="offer-budget" id="offer-budget">
        <option value="1000&euro;">~ 1 000 &euro;</option>
        <option value="5000&euro;">~ 5 000 &euro;</option>
        <option value="10000&euro;">~ 10 000 &euro;</option>
        <option value="10001&euro;">&gt; 10 000 &euro;</option>
      </select>
    </fieldset>
    <fieldset>
      <label id="description-label" for="offer-description"><?php echo __('form_description'); ?></label>
      <textarea name="offer-description" id="offer-description" cols="30" rows="10" required></textarea>
    </fieldset>
    <input type="submit" value="<?php echo __('form_send'); ?>">
  </form>
</section>

<div id="cta" class="clearfix">
  <a href="<?php echo $this->webroot; ?><?php echo $lang ?>"><?php echo __('About'); ?></a>
  <a class="most" href="<?php echo $this->webroot; ?><?php echo $lang ?>/portfolio"><b><?php echo __('Works'); ?></b></a>
  <a href="<?php echo $this->webroot; ?><?php echo $lang ?>/method"><?php echo __('Our method'); ?></a>
</div>