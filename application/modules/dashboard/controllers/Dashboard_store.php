<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    /**
     * Store controllers Class
     *
     * @package     Lapak Tukang Taman
     * @subpackage  Controllers
     * @category    Controllers
     * @author      Sistiandy Syahbana nugraha <sistiandy.web.id>
     */
class Dashboard_store extends CI_Controller {
    
  public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedMerchant') == NULL) {
            header("Location:" . site_url('store/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }
    }
    
    public function index() {
        $data['title'] = 'Dashboard';
        $data['main'] = 'store/dashboard/dashboard';
        $this->load->view('store/layout', $data);
    }

}
