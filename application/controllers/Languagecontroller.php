<?php
class Languagecontroller extends CI_Controller{

  public function setLanguage() {
    $this->load->helper('url');
    $language = $this->input->post('language');
    $this->ll->setLanguage(strtolower($language));
  }

}
