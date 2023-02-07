<?php
class member_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function cariMember()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT * from user where nama like '%$cari%' ");
        return $data->result();
    }
}
