<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Login extends CI_Model{ 

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function read(){
        $this->db->select('*');
        $this->db->from('msuser');
        $query = $this->db->get();
        return $query->result();
    }

    public function readBy($email, $password){
        $this->db->select('*');
        $this->db->from('msuser');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->row();
    }
}