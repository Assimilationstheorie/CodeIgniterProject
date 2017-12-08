<?php
class Languagecontroller extends CI_Controller{

  public function setLanguage() {
    $language = $this->input->post('language');
    $current_link = $this->input->post('current_link');
    $this->ll->setLanguage(strtolower(trim($language)));
    if($current_link != 'welcome') {
      redirect($current_link, 'refresh');
    } else {
      redirect('/', 'refresh');
    }
  }

}
