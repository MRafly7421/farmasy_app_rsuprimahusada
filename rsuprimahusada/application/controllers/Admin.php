<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        if (!($this->session->userdata('email')) || $this->session->userdata('role') !== "admin") {
            redirect('./');
        }
    }

    public function index()
    {
        $data['title'] = "Dashboard | Admin";
        $data['admin'] = $this->db->get_where('admin', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function register_admin()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        $data['title'] = "Admin | Tambahkan Admin";
        $data['admin'] = $this->db->get_where('admin', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('admin/register_admin', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->action_register_admin();
        }
    }

    private function action_register_admin()
    {
        $this->load->library('uid');
        $data = [
            'id_admin' => $this->uid->id('admin'),
            'email' => $this->input->post('email', true),
            'nama' => $this->input->post('nama', true),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'role' => "admin"
        ];

        $this->db->insert('admin', $data);

        redirect('admin');
    }

    public function obat_masuk($submenu)
    {
        if ($submenu == "cek_obat_masuk") {
            $data['title'] = "Admin | Cek Obat Masuk";
            $data['admin'] = $this->db->get_where('admin', [
                'email' => $this->session->userdata('email')
            ])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('admin/obat_masuk/cek_obat_masuk', $data);
            $this->load->view('templates/footer', $data);
        } else if($submenu == "tambah_obat_masuk") {
            $data['title'] = "Admin | Tambah Obat Masuk";
            $data['admin'] = $this->db->get_where('admin', [
                'email' => $this->session->userdata('email')
            ])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('admin/obat_masuk/tambah_obat_masuk', $data);
            $this->load->view('templates/footer', $data);
        } else {
            redirect('./');
        }
    }

    public function sisa_obat($submenu)
    {
        if ($submenu == "cek_sisa_obat") {
            $data['title'] = "Admin | Cek Sisa Obat";
            $data['admin'] = $this->db->get_where('admin', [
                'email' => $this->session->userdata('email')
            ])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('admin/sisa_obat/cek_sisa_obat', $data);
            $this->load->view('templates/footer', $data);
        } else if($submenu == "tambah_obat") {
            $data['title'] = "Admin | Tambah Obat";
            $data['admin'] = $this->db->get_where('admin', [
                'email' => $this->session->userdata('email')
            ])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('admin/sisa_obat/tambah_obat', $data);
            $this->load->view('templates/footer', $data);
        } else {
            redirect('./');
        }
    }

    public function obat_keluar($submenu)
    {
        if ($submenu == "cek_obat_keluar") {
            $data['title'] = "Admin | Cek Obat Keluar";
            $data['admin'] = $this->db->get_where('admin', [
                'email' => $this->session->userdata('email')
            ])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('admin/obat_keluar/cek_obat_keluar', $data);
            $this->load->view('templates/footer', $data);
        } else if($submenu == "tambah_obat_keluar") {
            $data['title'] = "Admin | Tambah Obat Keluar";
            $data['admin'] = $this->db->get_where('admin', [
                'email' => $this->session->userdata('email')
            ])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('admin/obat_keluar/tambah_obat_keluar', $data);
            $this->load->view('templates/footer', $data);
        } else {
            redirect('./');
        }
    }
}
