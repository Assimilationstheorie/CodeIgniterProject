<?php
class Templatelibrary {

  protected $CI;

  public function __construct() {
    $this->CI =& get_instance();
  }

  private function header_template() {
    $data['translation'] = $this->CI->ll->getCurrentLanguageFile('header');
    $this->CI->load->view('templates/header', $data);
  }

  public function template($options) {
    $this->header_template();
    $this->CI->load->view($options['site_name'], $options);
    $this->footer_template($options);
  }

  private function footer_template($options) {
    $this->CI->load->view('templates/footer', $options);
  }


}
