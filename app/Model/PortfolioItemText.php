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

    public $actsAs = array(
        'Translate' => array(
            'title', 'paragraphs'
        )
    );

    public $translateModel = 'PortfolioItemTextTranslation';

    public function afterSave($created) {
        if($created){
            $id = $this->getInsertID();

            if(CakeSession::read('Config.language') == 'eng'){
                $lang = 'hun';
            }else{
                $lang = 'eng';
            }
            
            $this->query("INSERT INTO portfolio_item_text_translations (locale, model, foreign_key, field, content) VALUES ('" . $lang . "', 'PortfolioItemText', " . $id . ", 'title', '');");
            $this->query("INSERT INTO portfolio_item_text_translations (locale, model, foreign_key, field, content) VALUES ('" . $lang . "', 'PortfolioItemText', " . $id . ", 'paragraphs', '');");
        }
        return true;
    }

}
?>