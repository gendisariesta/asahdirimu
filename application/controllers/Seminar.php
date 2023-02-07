<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seminar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('Auth');
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Info Seminar';
        $this->load->view('seminar/index');
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }
    public function seminar1()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Asah Dirimu - Seminar';
        $this->load->view('seminar/seminar1');
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }
    public function seminar2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Asah Dirimu - Seminar';
        $this->load->view('seminar/seminar2');
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }
    public function seminar3()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('seminar/seminar3');
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }
    public function seminar4()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Asah Dirimu - Seminar';
        $this->load->view('seminar/seminar4');
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }
}
