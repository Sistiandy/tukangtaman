<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Auth controllers class
 *
 * @package     SIJPT
 * @subpackage  Controllers
 * @category    Controllers
 * @author      Sistiandy Syahbana nugraha <sistiandy.web.id>
 */
class Auth_store extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('merchant/Merchant_model');
        $this->load->library('form_validation');
        $this->load->helper('string');
    }

    function index() {
        redirect('store/auth/login');
    }

    function login() {
        if ($this->session->userdata('loggedMerchant')) {
            redirect('store');
        }
        if ($this->input->post('location')) {
            $location = $this->input->post('location');
        } else {
            $location = NULL;
        }
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($_POST AND $this->form_validation->run() == TRUE) {
            $merchantname = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);

            $merchant = $this->Merchant_model->get(array('username' => $merchantname, 'password' => sha1($password)));

            if (count($merchant) > 0) {
                $this->session->set_userdata('loggedMerchant', TRUE);
                $this->session->set_userdata('mid', $merchant[0]['merchant_id']);
                $this->session->set_userdata('mname', $merchant[0]['merchant_name']);
                $this->session->set_userdata('memail', $merchant[0]['merchant_email']);
                $this->session->set_userdata('mowner', $merchant[0]['merchant_owner_name']);
                if ($location != '') {
                    header("Location:" . htmlspecialchars($location));
                } else {
                    redirect('store');
                }
            } else {
                if ($location != '') {
                    $this->session->set_flashdata('failed', 'Maaf, username dan password tidak cocok!');
                    header("Location:" . site_url('store/auth/login') . "?location=" . urlencode($location));
                } else {
                    $this->session->set_flashdata('failed', 'Maaf, username dan password tidak cocok!');
                    redirect('store/auth/login');
                }
            }
        } else {
            $this->load->view('store/login');
        }
    }

    function register() {
        $this->load->config('email');
        $this->load->library('email');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($_POST AND $this->form_validation->run() == TRUE) {
            $email = $this->input->post('email', TRUE);
            $merchant = $this->Merchant_model->get(array('email' => $email));
            if (count($merchant) > 0) {
                redirect('base');
            } else {
                $this->Merchant_model->add(
                    array(
                        'merchant_email' => $this->input->post('email'),
                        'merchant_status' => 'Baru',
                        'merchant_password' => sha1($this->input->post('password'))
                        )
                    );
                // send email
                if($this->config->item('email'))
                {
                    $params = array();
                    $this->email->from($this->config->item('from'), $this->config->item('from_name'));
                    $this->email->to($this->input->post('email')); 
                    $this->email->subject('Konfirmasi registrasi');
                    $this->email->message($this->load->view('email/registration', array('params' => $params), true));
                    $this->email->send();
                }
                $this->load->view('frontend/register_redirect');
            }
        } else {
            $this->load->view('store/login');
        }
    }

    // Logout Processing
    function logout() {
        $this->session->unset_userdata('loggedMerchant');
        $this->session->unset_userdata('mid');
        $this->session->unset_userdata('mname');
        $this->session->unset_userdata('memail');
        $this->session->unset_userdata('mowner');

        $q = $this->input->get(NULL, TRUE);
        if ($q['location'] != NULL) {
            $location = $q['location'];
        } else {
            $location = NULL;
        }
        header("Location:" . $location);
    }

}
