<?php

/**
 *
 */
class User extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> view('header');
		
	}

	function addUser() {
		$data = array('firstName' => 'tejas', 'lastName' => 'shah', 'email' => 'asdfasdfa@gmail.com');
		$this -> db -> insert('user', $data);
		echo "inserted";
	}

	public function getUser($value = '') {
		$data['gridData'] = $this -> db ->limit(30)-> get('quickDraw') -> result_array();
		$this -> load -> view('grid', $data);
		$this -> load -> view('footer');
	}

}
