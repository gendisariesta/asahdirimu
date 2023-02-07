<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
            $this->load->model('member_model');
            $this->load->helper(['url_helper', 'form']);
            $this->load->library(['form_validation', 'session']);
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['list_data'] = $this->db->get('user');
        $data['title'] = 'Member';

        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('member/index', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('member/index', $data);
            $this->load->view('templates/footer_user');
        }

    }

    function hapus($id)
    {
        $this->db->delete('user', array('id' => $id));

        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Akun berhasil dihapus! </div>');

        redirect('Member');
    }
    function tambah_data()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Member';
        $this->load->view('templates/header_admin', $data);
        $this->load->view('member/tambah_data', $data);
        $this->load->view('templates/footer_admin');
    }
    function add_data()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => $this->input->post('role_id'),
            'is_active' => 1
        ];

        $this->db->insert('user', $data);

        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Akun anda berhasil diperbaharui! </div>');

        redirect('Member/index');
    }
    
    // function edit_member($id)
    // {
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['data'] = $this->db->get_where('user', array('id' => $id));
    //     $data['title'] = 'Edit Akun';
    //     $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $this->load->view('page/edit_akun', $data);
    //     if ($user['role_id'] == 1) {
    //         $this->load->view('templates/header_admin', $data);
    //         $this->load->view('templates/footer_admin');
    //     } else {
    //         $this->load->view('templates/header_user', $data);
    //         $this->load->view('templates/footer_user');
    //     }
    // }

    public function cari()
    {
        $this->load->view('Member/index', $data);
    }

    public function hasil()
    {
        $data2['cari'] = $this->member_model->cariMember();
        $this->load->view('member/result', $data2);
    }

    function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->db->get_where('user', array('id' => $id))->row_array();
        $data['title'] = 'Edit Akun';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('page/edit', $data);
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }

    function update_member(){
        $data = [
            'nama' => $this->input->post('enama'),
            'alamat' => $this->input->post('ealamat'),
            'jenis_kelamin' => $this->input->post('ekelamin'),
        ];

        $this->db->update('user', $data, array("id" => $this->input->post('id')));
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Data member berhasil diperbaharui! </div>');

        redirect('Member');
    }
}
