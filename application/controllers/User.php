<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Beranda';
        $this->load->view('templates/header_user', $data);
        $this->load->view('page/beranda_user', $data);
        $this->load->view('templates/footer_user');
    }
}
