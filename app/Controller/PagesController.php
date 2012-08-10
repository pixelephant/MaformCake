<?php

	class PagesController extends AppController {

		var $uses = array('Portfolio','PortfolioItemText','PortfolioItemImage');

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
			$portfolio_texts = $this->PortfolioItemText->findAllByPortfolioId($portfolio['Portfolio']['id']);
			$portfolio_images = $this->PortfolioItemImage->findAllByPortfolioId($portfolio['Portfolio']['id']);
			
			$this->set('portfolio', $portfolio);
			$this->set('portfolio_texts', $portfolio_texts);
			$this->set('portfolio_images', $portfolio_images);

			$this->render('portfolio_item');
		}

	}

?>