<?php
class PortfolioItemImage extends AppModel {

	public $belongsTo = 'Portfolio';

	public $validate = array(
      'title' => array(
          'rule' => 'notEmpty'
      ),
      'image_file' => array(
          'rule' => 'notEmpty'
      ),
      'paragraphs' => array(
          'rule' => 'notEmpty'
      )
  );

}
?>