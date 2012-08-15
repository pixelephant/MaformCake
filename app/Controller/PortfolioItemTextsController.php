<?php
class PortfolioItemTextsController extends AppController {
	
	public $scaffold = 'admin';

	public $components = array(
      'Session',
      'Auth' => array(
          'loginRedirect' => array('controller' => 'pages', 'action' => 'display'),
          'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
      )
  );

}
?>