<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class AppHelper extends Helper {

	public function retinaImage($file, $dir='img/', $alt='', $mobile = false){

		$f = explode(".",$file);

		$e = $f[count($f)-1];
		unset($f[count($f)-1]);
		$f = implode(".",$f);

		$dir = $this->webroot . $dir;

		if($mobile){
			return '<div class="img" data-picture data-alt="' . $alt . '">
								<div data-src="'. $dir . $f .'-m.' . $e . '"></div>
								<div data-src="' . $dir . $f . '-m@2x.' . $e . '" data-media="(min-device-pixel-ratio: 2.0)"></div>
					      <div data-src="' . $dir . $f . '.' . $e . '" data-media="(min-width: 767px)></div>
					      <div data-src="' . $dir . $f . '@2x.' . $e . '" data-media="(min-width: 767px) and (min-device-pixel-ratio: 2.0)"></div>
					      <noscript>
					        <img src="' . $dir . $f . '-m.' . $e . '" alt="' . $alt . '">
					      </noscript>
					    </div>';
		}else{
			return '<div data-picture data-alt="' . $alt . '">
					      <div data-src="' . $dir . $f . '.' . $e . '"></div>
					      <div data-src="' . $dir . $f . '@2x.' . $e . '" data-media="(min-device-pixel-ratio: 2.0)"></div>
					      <noscript>
					        <img src="' . $dir . $f . '.' . $e . '" alt="' . $alt . '">
					      </noscript>
					    </div>';
		}
	}




}
