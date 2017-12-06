<?php
class Languagelibrary {

  protected $CI;

  public function __construct() {
    $this->CI =& get_instance();
    $this->CI->load->library('session');
  }

  public function getCurrentLanguageFile($file_name) {
    $this->setLanguage('german');
    $sites = ['header', $file_name, 'footer'];
    return $this->CI->lang->load($sites, $this->getLanguage());
  }

  public function setLanguage($language) {
    $this->CI->session->set_userdata('language', $language);
    $language = $this->CI->session->language;
    if($this->verifylanguage($language) == TRUE) {
      return $this->CI->session->language;
    }
    return $this->CI->session->set_userdata('language', 'english');
  }

  private function getLanguage() {
    if($this->CI->session->has_userdata('language') == TRUE) {
      return $this->CI->session->language;
    }
    return $this->CI->session->set_userdata('language', 'english');
  }

  private function verifylanguage($language) {
    $all_languages = [
      'german' => 'Deutsch',
      'english' => 'English',
      'russian' => 'Pусски'
    ];
    if (array_key_exists($language, $all_languages)) {
      return true;
    }
    return false;
  }

}
