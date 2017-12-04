<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitegenerator extends CI_Controller {

	public function createsite($site_name='') {
		if($this->verifysite($site_name) != TRUE) {
			return false;
		}
		$this->tl->all_templates($site_name);
	}

	private function verifysite($site_name) {
		if(empty(trim($site_name))) {
			return false;
		}
		return true;
	}
}
