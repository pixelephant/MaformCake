<div id="content">
	<div class="index">
		<?php

			echo $this->Form->create('Admin', array('type' => 'file'));
			echo $this->Form->input('portfolio_item', array(
		    'options' => $portfolio_items,
		    'empty' => '(choose one)'
			));
			echo $this->Form->input('fileName', array('type' => 'file'));
			echo $this->Form->end('Upload');

		?>
	</div>

	<div class="actions">
		<h3>Actions</h3>
		<ul>
			<li><a href="<?php echo $this->webroot; ?>admin/portfolios">List Portfolios</a></li>
			<li><a href="<?php echo $this->webroot; ?>admin/portfolios/add">New Portfolio</a></li>
			<li><a href="<?php echo $this->webroot; ?>admin/portfolio_item_texts">List Portfolio Item Texts</a></li>
			<li><a href="<?php echo $this->webroot; ?>admin/portfolio_item_texts/add">New Portfolio Item Text</a></li>
			<li><a href="<?php echo $this->webroot; ?>admin/portfolio_item_images">List Portfolio Item Images</a></li>
			<li><a href="<?php echo $this->webroot; ?>admin/portfolio_item_images/add">New Portfolio Item Image</a></li>
		</ul>
	</div>
</div>