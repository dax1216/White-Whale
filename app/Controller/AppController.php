<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * This is a placeholder class.
 * Create the same file in app/Controller/AppController.php
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       Cake.Controller
 * @link http://book.cakephp.org/view/957/The-App-Controller
 */
class AppController extends Controller {
	/*
	 public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'MyCollection', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'HomePage', 'action' => 'index'),
        	'authorize' => array('Controller')
        )
    );

	public function isAuthorized($user) {
		if (isset($user['role']) && $user['role'] === 'admin') {
			return true; //Admin can access every action
		}
		return false; // The rest don't
	}

    function beforeFilter() {
        $this->Auth->allow('index', 'view', 'logout', 'add');
		//$this->set('login_user_name', 'kjenson');  //$this->Auth-user('id'));
    }
	function beforeRender()
	{
		  if (!array_key_exists('requested', $this->params)) {
                $user = $this->Session->read($this->Auth->sessionKey);
				$this->set('login_user_name', $this->Auth->user('username'));
				$this->set('login_user_id', $this->Auth->user('user_id'));
                $this->set(compact('user'));
        } 
	}
	*/
}
