<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this
            ->load
            ->helper('url');

        if ($this->session->userdata('email') == true) { 
            redirect('dashboard');
        }

    }


    private function load($title = '', $datapath = '')
    {
    }
    
    public function index()
    {
        $this->load->view('dashboard/login', false);
    }

}
