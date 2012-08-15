<?php
class Portfolio extends AppModel {

    public $order = "Portfolio.position ASC";

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

    public $actsAs = array(
        'Translate' => array(
            'description', 'data', 'client'
        )
    );

    public $translateModel = 'PortfolioTranslation';

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

    public function afterSave($created) {
        if($created){
            $id = $this->getInsertID();

            if(CakeSession::read('Config.language') == 'eng'){
                $lang = 'hun';
            }else{
                $lang = 'eng';
            }
            
            $this->query("INSERT INTO portfolio_translations (locale, model, foreign_key, field, content) VALUES ('" . $lang . "', 'Portfolio', " . $id . ", 'data', '');");
            $this->query("INSERT INTO portfolio_translations (locale, model, foreign_key, field, content) VALUES ('" . $lang . "', 'Portfolio', " . $id . ", 'description', '');");
            $this->query("INSERT INTO portfolio_translations (locale, model, foreign_key, field, content) VALUES ('" . $lang . "', 'Portfolio', " . $id . ", 'client', '');");
        }
        return true;
    }

}
?>