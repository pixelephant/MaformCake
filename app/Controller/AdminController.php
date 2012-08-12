<?php

	class AdminController extends AppController {

		var $uses = array('Portfolio','PortfolioItemText','PortfolioItemImage');

		public function file_upload_form() {


 			$upload_dir = 'img';
			$this->set('data', $this->data);
			
			if (!empty($this->data)) {

				$item = $this->Portfolio->findById($this->data['Admin']['portfolio_item']);

				if(isset($this->data['Admin']['portfolio_item'])){
					$upload_dir = $upload_dir . "/portfolio/" . $item['Portfolio']['slug'];
				}

				$this->Uploader = new Uploader(array('uploadDir' => $upload_dir));
				if ($data = $this->Uploader->uploadAll()) {
					// Upload successful, do whatever
				}
			}

			// $portfolio_items = $this->Portfolio->find('all', array('recursive' => -1, 'fields' => array('id')));
			$portfolio_items = $this->Portfolio->find('list');
			$this->set('portfolio_items', $portfolio_items);

			$this->render('file_upload');
		}

		public function lang(){
			CakeSession::write('Config.language', 'eng');
	 		Configure::write('Config.language', $_POST['lang']);

	 		$this->redirect('/admin');
		}
	
	}

?>