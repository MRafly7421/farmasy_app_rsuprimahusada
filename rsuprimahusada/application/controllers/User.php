<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        if(!($this->session->userdata('email')) || $this->session->userdata('role') !== "user") {
            redirect('./');
        }
    }

    public function index() {
        $data['title'] = "Home | User";
        $data['user'] = $this->db->get_where('user',[
            'email' => $this->session->userdata('email')
        ])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer', $data);
    }
}
?>