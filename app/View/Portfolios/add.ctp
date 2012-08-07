<h1>Add Post</h1>
<?php
echo $this->Form->create('Portfolio');
echo $this->Form->input('name');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->input('list_image');
echo $this->Form->input('data');
echo $this->Form->end('Save Post');
?>