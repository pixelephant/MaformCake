<?php
class ErrorController extends AppController {

	public function notfound() {			
		throw new NotFoundException(__('page_not_found'));
	}

}
?>