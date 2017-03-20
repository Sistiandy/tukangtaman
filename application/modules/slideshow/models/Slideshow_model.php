<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Slideshow Model Class
 *
 * @package     SYSCMS
 * @subpackage  Models
 * @category    Models
 * @author      Sistiandy Syahbana nugraha <sistiandy.web.id>
 */
class Slideshow_model extends CI_Model {

    var $table = 'slideshows';
    var $all_column = array('slideshows.slideshow_id', 'slideshow_title', 'slideshow_desc', 'slideshow_is_active', 'slideshow_image'); //set all column field database
    var $order = array('slideshow_last_update' => 'desc'); // default order 

    function __construct() {
        parent::__construct();
    }

    private function _get_datatables_query() {

        $this->db->from($this->table);

        $i = 0;

        foreach ($this->all_column as $item) { // loop column 
            if ($_POST['search']['value']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->all_column) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->all_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables() {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);

        $this->db->select('slideshows.slideshow_id, slideshow_title, slideshow_desc, slideshow_image, slideshow_input_date, slideshow_last_update, slideshow_is_active');
        $this->db->select('users_user_id, user_full_name');
        $this->db->join('users', 'users.user_id = slideshows.users_user_id', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered() {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // Get From Databases
    function get($params = array()) {
        if (isset($params['id'])) {
            $this->db->where('slideshows.slideshow_id', $params['id']);
        }
        if (isset($params['limit'])) {
            if (!isset($params['offset'])) {
                $params['offset'] = NULL;
            }

            $this->db->limit($params['limit'], $params['offset']);
        }

        if (isset($params['order_by'])) {
            $this->db->order_by($params['order_by'], 'desc');
        } else {
            $this->db->order_by('slideshow_last_update', 'desc');
        }
        $this->db->select('slideshows.slideshow_id, slideshow_title, slideshow_desc, slideshow_image, slideshow_input_date, slideshow_last_update, slideshow_is_active');
        $this->db->select('users_user_id, users.user_full_name');

        $this->db->join('users', 'users.user_id = slideshows.users_user_id', 'left');
        $res = $this->db->get('slideshows');

        if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
    }

    // Insert some data to table
    function add($data = array()) {

        if (isset($data['slideshow_id'])) {
            $this->db->set('slideshow_id', $data['slideshow_id']);
        }

        if (isset($data['slideshow_title'])) {
            $this->db->set('slideshow_title', $data['slideshow_title']);
        }

        if (isset($data['slideshow_desc'])) {
            $this->db->set('slideshow_desc', $data['slideshow_desc']);
        }

        if (isset($data['slideshow_image'])) {
            $this->db->set('slideshow_image', $data['slideshow_image']);
        }

        if (isset($data['slideshow_is_active'])) {
            $this->db->set('slideshow_is_active', $data['slideshow_is_active']);
        }

        if (isset($data['slideshow_input_date'])) {
            $this->db->set('slideshow_input_date', $data['slideshow_input_date']);
        }

        if (isset($data['slideshow_last_update'])) {
            $this->db->set('slideshow_last_update', $data['slideshow_last_update']);
        }

        if (isset($data['users_user_id'])) {
            $this->db->set('users_user_id', $data['users_user_id']);
        }

        if (isset($data['slideshow_id'])) {
            $this->db->where('slideshow_id', $data['slideshow_id']);
            $this->db->update('slideshows');
            $id = $data['slideshow_id'];
        } else {
            $this->db->insert('slideshows');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }

    // Drop some data to table
    function delete($id) {
        $this->db->where('slideshow_id', $id);
        $this->db->delete('slideshows');
    }

}
