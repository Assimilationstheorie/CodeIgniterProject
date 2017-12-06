<?php
class Templatelibrary {

  protected $CI;

  public function __construct() {
    $this->CI =& get_instance();
  }

  private function header_template() {
    return $this->CI->load->view('templates/header');
  }

  public function template($options) {
    $this->CI->ll->getCurrentLanguageFile($options['site_name']);
    $this->header_template();
    $this->CI->load->view($options['site_name'], $options);
    $this->footer_template($options);
  }

  private function footer_template() {
    return $this->CI->load->view('templates/footer');
  }


}
