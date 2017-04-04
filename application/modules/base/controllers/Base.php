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
        $this->load->model('slideshow/Slideshow_model');

        $data['slideshow'] = $this->Slideshow_model->get(array('limit' => 3, 'status' => true));
        $data['main'] = 'frontend/slideshow/index';
        $this->load->view('frontend/layout', $data);
    }

}
