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

		public function portfolio_item() {

			$path = func_get_args();

			$portfolio = $this->Portfolio->findBySlug($path[0]);
			$this->set('portfolio', $portfolio);

			$this->render('portfolio_item');
		}

	}

?>