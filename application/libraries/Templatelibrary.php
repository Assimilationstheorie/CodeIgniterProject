<?php
class Templatelibrary {

  protected $CI;

  public function __construct() {
    $this->CI =& get_instance();
  }

  public function header_template($site_name) {
    echo $site_name;
  }

  public function content_template() {

  }

  public function footer_template() {

  }

  public function all_templates($site_name) {
    $this->header_template($site_name);
    $this->content_template();
    $this->footer_template();
  }


}
