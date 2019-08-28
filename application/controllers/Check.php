<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Check extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this
        ->load
        ->model('M_Login');
        $this
        ->load
        ->helper('url');
    }

    private function load($title = '', $datapath = '')
    {
    }

        //MENGECEK USERNAME DAN PASSWORD DARI DATABASE
    public function index()
    {
        $email = $this
        ->input
        ->post('email');
        
        $password = md5($this
            ->input
            ->post('password'));

        $data = $this
        ->M_Login
        ->readBy($email, $password);
        if (isset($data->email) && isset($data->password)) {
            if ($email == $data->email && $password == $data->password) {
                if ($data->status == 'Y') {
                    $newdata = array(
                        "id_user" => $data->id_user,
                        "nama_user" => $data->nama_user,
                        "password" => $data->password,
                        "email" => $data->email,
                    );
                    $this
                    ->session
                    ->set_userdata($newdata);
                    redirect('dashboard', 'refresh');
                }else{
                 $this->session->set_flashdata('notif_login', '<script>swal("Error", "Account Not Active !", "error");</script>');
                 redirect('login'); 
             }
         } else {
            $this->session->set_flashdata('notif_login', '<script>swal("Error", "Account Not Found !", "error");</script>');
            redirect('login');
        }

    } else {
        $this->session->set_flashdata('notif_login', '<script>swal("Error", "Your Email Or Password Incorrect!", "error");</script>');
        redirect('login');
    }
}

    //UNTUK LOGOUT DAN MENGHAPUS SESSION LOGIN
public function logout()
{
    $this
    ->session
    ->sess_destroy();
    redirect('login', 'refresh');

}

}
