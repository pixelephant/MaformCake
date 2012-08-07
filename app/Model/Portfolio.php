<?php
class Portfolio extends AppModel {

	public $hasMany = array(
		'PortfolioItemText' => array(
        'className'  => 'PortfolioItemText',
        'order'      => 'id DESC'
    ),
    'PortfolioItemImage' => array(
        'className'  => 'PortfolioItemImage',
        'order'      => 'id DESC'
    )
	);

	public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'description' => array(
            'rule' => 'notEmpty'
        ),
        'data' => array(
            'rule' => 'notEmpty'
        ),
        'list_image' => array(
            'rule' => 'notEmpty'
        ),
        'large_image' => array(
            'rule' => 'notEmpty'
        )
    );

}
?>