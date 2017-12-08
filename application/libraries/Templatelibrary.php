<?php
class Templatelibrary {

  protected $CI;

  public function __construct() {
    $this->CI =& get_instance();
  }

  private function header_template($options) {
    return $this->CI->load->view('templates/header', $options);
  }

  public function template($options) {
    $this->CI->ll->getCurrentLanguageFile($options['site_name']);
    $this->header_template($options);
    $this->CI->load->view($options['site_name'], $options);
    $this->footer_template();
  }

  private function footer_template() {
    return $this->CI->load->view('templates/footer');
  }


}
