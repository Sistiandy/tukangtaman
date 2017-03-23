<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    /**
     * Dashboard controllers Class
     *
     * @package     TukangTaman
     * @subpackage  Controllers
     * @category    Controllers
     * @author      Sistiandy Syahbana nugraha <sistiandy.web.id>
     */
class Base extends CI_Controller {
    
  public function __construct()
    {
        parent::__construct();
    }
    
    public function index() {
        $data['main'] = 'base/index';
        $this->load->view('frontend/base', $data);
    }

}
