<?php

	class PagesController extends AppController {

		var $uses = array('Portfolio','PortfolioItemText','PortfolioItemImage');

		public function display() {
			$path = func_get_args();

			if($path[0] == 'portfolio'){
				$portfolio_items = $this->Portfolio->find('all', array('recursive' => -1));
				$this->set('portfolio_items', $portfolio_items);
			}

			$this->render($path[0]);
		}

		public function portfolio_item() {

			$path = func_get_args();

			$portfolio = $this->Portfolio->findBySlug($path[0]);
			$portfolio_texts = $this->PortfolioItemText->findAllByPortfolioId($portfolio['Portfolio']['id']);
			$portfolio_images = $this->PortfolioItemImage->findAllByPortfolioId($portfolio['Portfolio']['id']);
			
			$prev_item = $this->Portfolio->query("SELECT * FROM portfolios WHERE id < " . $portfolio['Portfolio']['id'] . " ORDER BY ID DESC LIMIT 1");
			$next_item = $this->Portfolio->query("SELECT * FROM portfolios WHERE id > " . $portfolio['Portfolio']['id'] . " ORDER BY ID ASC LIMIT 1");

			if(empty($prev_item)){
				$prev_item = $this->Portfolio->query("SELECT * FROM portfolios ORDER BY ID DESC LIMIT 1");
			}

			if(empty($next_item)){
				$next_item = $this->Portfolio->query("SELECT * FROM portfolios ORDER BY ID ASC LIMIT 1");
			}

			$this->set('portfolio', $portfolio);
			$this->set('portfolio_texts', $portfolio_texts);
			$this->set('portfolio_images', $portfolio_images);
			$this->set('prev_item', $prev_item);
			$this->set('next_item', $next_item);

			$this->render('portfolio_item');
		}

		public function beforeFilter(){
	 	
		 	if($this->params->lang == 'en'){
		 		CakeSession::write('Config.language', 'en');
		 		Configure::write('Config.language', 'en');
		 	}else{
		 		CakeSession::write('Config.language', 'hu');
		 		Configure::write('Config.language', 'hu');
		 	}

	 	}

	}

?>