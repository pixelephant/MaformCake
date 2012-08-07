<?php
class PortfolioItemText extends AppModel {

	public $belongsTo = 'Portfolio';

    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'paragraphs' => array(
            'rule' => 'notEmpty'
        )
    );

}
?>