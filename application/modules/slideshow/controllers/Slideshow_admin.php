<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Slideshow controllers Class
 *
 * @package     SYSCMS
 * @subpackage  Controllers
 * @category    Controllers
 * @author      Sistiandy Syahbana nugraha <sistiandy.web.id>
 */
class Slideshow_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged') == NULL) {
            header("Location:" . site_url('admin/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }
        $this->load->model('slideshow/Slideshow_model');
    }

    public function index() {
        $data['slideshow'] = $this->Slideshow_model->get();
        $data['title'] = 'Slideshow';
        $data['main'] = 'slideshow/list';
        $this->load->view('admin/layout', $data);
    }

    public function ajax_list() {
        $keys = $this->Slideshow_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($keys as $key) {
            $no++;
            $row = array();
            $row[] = $key->slideshow_title;
            $row[] = '<img src="'.upload_url($key->slideshow_image).'" style="height:30px; width:150px">';
            $row[] = $key->slideshow_is_active == true? 'Terbit' : 'Draft';

            //add html for action
            $row[] = btn_list('slideshow', $key->slideshow_id, $key->slideshow_title) ;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Slideshow_model->count_all(),
            "recordsFiltered" => $this->Slideshow_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    // Add User and Update
    public function add($id = NULL) {
        $this->load->library('form_validation');
        $this->load->library('upload');

        $this->form_validation->set_rules('slideshow_title', 'Judul', 'trim|required|xss_clean');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button position="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        if ($_POST AND $this->form_validation->run() == TRUE) {

            if ($this->input->post('slideshow_id')) {
                $params['slideshow_id'] = $id;
            } else {
                $params['slideshow_input_date'] = date('Y-m-d H:i:s');
            }
            if (!empty($_FILES['inputPict']['name'])) {
                $params['slideshow_image'] = $this->do_upload('inputPict');
            }
            $params['slideshow_title'] = ucwords($this->input->post('slideshow_title'));
            $params['slideshow_desc'] = $this->input->post('slideshow_desc');
            $params['slideshow_is_active'] = $this->input->post('slideshow_is_active');
            $params['slideshow_last_update'] = date('Y-m-d H:i:s');
            $params['users_user_id'] = $this->session->userdata('uid');
            $status = $this->Slideshow_model->add($params);

            // activity log
            $this->load->model('logs/Logs_model');
            $this->Logs_model->add(
                    array(
                        'log_date' => date('Y-m-d H:i:s'),
                        'user_id' => $this->session->userdata('uid'),
                        'log_module' => 'Slideshow',
                        'log_action' => $data['operation'],
                        'log_info' => 'ID:' . $status . ';Name:' . $this->input->post('slideshow_title')
                    )
            );

            $this->session->set_flashdata('success', $data['operation'] . ' Slideshow Berhasil');
            redirect('admin/slideshow');
        } else {
            if ($this->input->post('slideshow_id')) {
                redirect('admin/slideshow/edit/' . $this->input->post('slideshow_id'));
            }

            // Edit mode
            if (!is_null($id)) {
                $object = $this->Slideshow_model->get(array('id' => $id));
                if ($object == NULL) {
                    redirect('admin/slideshow');
                } else {
                    $data['slideshow'] = $object;
                }
            }
            $data['title'] = $data['operation'] . ' Slideshow';
            $data['main'] = 'slideshow/add';
            $this->load->view('admin/layout', $data);
        }
    }

    // View data detail
    public function view($id = NULL) {
        $data['slideshow'] = $this->Slideshow_model->get(array('id' => $id));
        $data['title'] = 'Slideshow';
        $data['main'] = 'slideshow/view';
        $this->load->view('admin/layout', $data);
    }

    // Delete to database
    public function delete($id = NULL) {
        if ($_POST) {
            $this->Slideshow_model->delete($id);
            // activity log
            $this->load->model('logs/Logs_model');
            $this->Logs_model->add(
                    array(
                        'log_date' => date('Y-m-d H:i:s'),
                        'user_id' => $this->session->userdata('uid'),
                        'log_module' => 'Slideshow',
                        'log_action' => 'Hapus',
                        'log_info' => 'ID:' . $id . ';Title:' . $this->input->post('delName')
                    )
            );
            $this->session->set_flashdata('success', 'Hapus Slideshow berhasil');
            redirect('admin/slideshow');
        } elseif (!$_POST) {
            $this->session->set_flashdata('delete', 'Delete');
            redirect('admin/slideshow/edit/' . $id);
        }
    }


    // Setting Upload image Requied
    function do_upload($name) {
        $this->load->library('upload');
        $config['upload_path'] = FCPATH . 'uploads/';

        /* create directory if not exist */
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '32000';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload($name)) {
            echo $config['upload_path'];
            $this->session->set_flashdata('success', $this->upload->display_errors(''));
            redirect(uri_string());
        }

        $upload_data = $this->upload->data();

        return $upload_data['file_name'];
    }

}
