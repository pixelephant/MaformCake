<?php
class PortfoliosController extends AppController {
	
	public $scaffold = 'admin';

	function beforeFilter() {
    parent::beforeFilter();
    $this->Portfolio->locale = $this->Session->read('Config.language');
	}

}
?>