<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() {
		$options = ['site_name' => 'welcome'];
		$this->tl->template($options);
	}

}
