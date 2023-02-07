<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function hubungikami()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Hubungi Kami';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('beranda/hubungikami');
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('hnamadepan', 'hnamadepan', 'trim|required|', ['required' => 'Nama depan harus diisi']);
        $this->form_validation->set_rules('hnamabelakang', 'hnamabelakang', 'trim');
        $this->form_validation->set_rules('hemail', 'hemail', 'trim|required|valid_email', ['required' => 'Email harus diisi', 'valid_email' => 'Penulisan email tidak tepat']);
        $this->form_validation->set_rules('hnotelpon', 'hnotelpon', 'trim|required', ['required' => 'Nomor Telpon harus diisi']);
        $this->form_validation->set_rules('hsubjek', 'hsubjek', 'trim');
        $this->form_validation->set_rules('hpesan', 'hpesan', 'trim|required', ['required' => 'Pesan harus diisi']);
        if ($this->form_validation->run() == true) {
            $data = [
                'hnamadepan' => htmlspecialchars($this->input->post('hnamadepan', true)),
                'hnamabelakang' => htmlspecialchars($this->input->post('hnamabelakang', true)),
                'hemail' => htmlspecialchars($this->input->post('hemail', true)),
                'hnotelpon' => htmlspecialchars($this->input->post('hnotelpon', true)),
                'hsubjek' => htmlspecialchars($this->input->post('hsubjek', true)),
                'hpesan' => htmlspecialchars($this->input->post('hpesan', true))
            ];
            $this->db->insert('hubungi_kami', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Pesan berhasil terkirim, terimakasih!
            </div>');
        }
    }

    public function tentangkami()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Info Lomba';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('beranda/tentangkami');
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }
}
