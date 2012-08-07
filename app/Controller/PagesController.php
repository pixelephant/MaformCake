<?php

	class PagesController extends AppController {

		var $uses = array('Portfolio');

		public function display() {
			$path = func_get_args();

			if($path[0] == 'portfolio'){
				$portfolio_items = $this->Portfolio->find('all');
				$this->set('portfolio_items', $portfolio_items);
			}

			$this->render($path[0]);
		}

	}

?>