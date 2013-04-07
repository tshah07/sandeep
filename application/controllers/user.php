<?php

/**
 * 
 */
class User extends CI_Controller {
	
	function addUser() {
		$this->db->get('user');
	}
}

