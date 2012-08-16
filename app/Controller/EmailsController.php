<?php

	class EmailsController extends AppController {

		public function send() {
			$email = new CakeEmail();
			$email->config('default');
			$email->from(array('weboldal@maform.hu' => 'Maform Weboldal'))
    	->to('info@maform.hu')
    	->subject('Üzenet a honlapról')
    	->emailFormat('both')
    	->template('default');

    	$email->viewVars(array('budget' => $_POST['budget'], 'name' => $_POST['name'], 'email' => $_POST['email'], 'description' => $_POST['description']));
    	
    	if($email->send('ASD')){
    		$response['status'] = 'true';
    	}else{
    		$response['status'] = 'false';
    	}

    	return new CakeResponse(array('body' => json_encode($response)));
		}

	}

?>