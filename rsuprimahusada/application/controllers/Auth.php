<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'RSU PRIMA HUSADA | Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->action_login();
        }
    }

    private function action_login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['email' => $email])->row_array();
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        
        if($admin) {
            if(password_verify($password, $admin['password'])) {
                $data = [
                    'email' => $admin['email'],
                    'role' => $admin['role']
                ];
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="col-10 alert alert-danger" role="alert">Password salah!</div>');
                redirect('./');
            }
        } else if($user) {
            if(password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                redirect('user');
            } else {
                $this->session->set_flashdata('message', '<div class="col-10 alert alert-danger" role="alert">Password salah!</div>');
                redirect('./');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="col-10 alert alert-danger" role="alert">Akun tidak ada</div>');
            redirect('./');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]', [
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('namaDepan', 'Nama Depan', 'required|trim');
        $this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'RSU PRIMA HUSADA | Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $this->action_registration();
        }
    }

    private function action_registration() {
        $this->load->library('uid');
        $data = [
            'id_user' => $this->uid->id('user'),
            'email' => $this->input->post('email', true),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'nama_lengkap' => $this->input->post('namaDepan', true) . " " . $this->input->post('namaBelakang', true),
            'jenis_kelamin' => $this->input->post('jenisKelamin', true),
            'agama' => $this->input->post('agama', true),
            'tempat_lahir' => $this->input->post('tempatLahir', true),
            'tanggal_lahir' => $this->input->post('tanggalLahir', true),
            'alamat' => $this->input->post('alamat', true),
            'no_telepon' => $this->input->post('noTelepon', true),
            'role' => "user",
            "is_active" => 1
        ];

        $this->db->insert('user', $data);

        $this->session->set_flashdata('message', '<div class="col-10 alert alert-success" role="alert">Selamat! Registrasi telah berhasil. Anda bisa login sekarang!</div>');
        redirect('./');
    }

    public function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<div class="col-10 alert alert-success" role="alert">Anda telah keluar!</div>');
        redirect('./');
    }
}
?>