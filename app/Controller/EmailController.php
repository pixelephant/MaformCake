<?php

	class EmailController extends AppController {

		public function send() {
			$email = new CakeEmail();
			$email->config('smtp');
			$email->from(array('weboldal@maform.hu' => 'Maform Weboldal'))
    	->to('0antalbalazs0@gmail.com')
    	->subject('Üzenet a honlapról')
    	->send('ASD');
    	$email->send();
		}

	}

?>