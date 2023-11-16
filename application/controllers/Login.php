<?php

defined('BASEPATH') or exit('no direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('LoginModel', 'login');
        $this->load->model('CrudModel', 'crudModel');
    } 

    public function index()
    {
        if ($this->login->is_logged_in()) {
            $this->login->is_role() === 'admin';
        } else {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

            if ($this->form_validation->run() === true) {
                $username = $this->input->post('username', true);
                $password = $this->input->post('password', true);

                $checking = $this->login->check_login('user', ['username' => $username], ['password' => $password]);

                if ($checking !== false) {
                    foreach ($checking as $data) {
                        $session_data = [
                            'user_id' => $data->user_id,
                            'username' => $data->username,
                            'password' => $data->password,
                            'role' => $data->role,
                        ];

                        $this->session->set_userdata($session_data);

                        if ($this->session->userdata('role') === 'admin') {
                            redirect('admin/');
                        } elseif ($this->session->userdata('role') === 'analyst') {
                            redirect('analyst/');
                        } elseif ($this->session->userdata('role') === 'staff') {
                            redirect('staff/');
                        }
                    }
                } else {
                    $this->load->view('login');
                }
            } else {
                $this->load->view('login');
            }
        }
    }
}
