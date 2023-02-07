<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lomba extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Info Lomba';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('lomba/index');
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }

    public function lomba1()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Info Lomba';
        $this->load->view('lomba/lomba1');
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }
    public function lomba2()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Info Lomba';
        $this->load->view('lomba/lomba2');
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }
    public function lomba3()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Asah Dirimu - Lomba';
        $this->load->view('lomba/lomba3');
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }
    public function lomba4()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Asah Dirimu - Lomba';
        $this->load->view('lomba/lomba4');
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }
}
