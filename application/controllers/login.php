<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_login');
  }

  public function index()
  {
    $valid = $this->form_validation;  

    $valid->set_rules(
      'email',
      'email',
      'required',
      array('required'  =>  'Email harus diisi')
    );

    $valid->set_rules(
      'password',
      'Password',
      'required|min_length[6]',
      array('required'  =>  'Password harus diisi',
        'min_length' =>  'Password minimal 6 karakter')
    );
    
    if ($valid->run() == false) {
      $data = array('title' => 'Login Ukai' );
      $this->load->view('v_login', $data, false);
    } else {  
      $i            = $this->input;
      $email        = $i->post('email');     
      $password     = md5($i->post('password'));
      $check_login  = $this->M_login->login($email, $password);

      if ($check_login) {
        $this->session->set_userdata('email', $email);
        $this->session->set_userdata('nama_lengkap', $check_login->nama_lengkap);
        $this->session->set_userdata('akses_level', $check_login->akses_level);

        if($this->session->userdata('akses_level') == 'admin'){
          redirect(site_url('admin/dasboard'), 'refresh');
        }else if($this->session->userdata('akses_level') == 'user'){
          redirect(site_url('user/dasboard'), 'refresh');
        }
        
      } else {
        $this->session->set_flashdata('notifikasi', '<center>Email dan password tidak cocok</center>');
        redirect(site_url('index.php/login'), 'refresh');
      }
    }
  }
  public function logout(){
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('akses_level');
    $this->session->unset_userdata('id_user');
    $this->session->unset_userdata('nama_lengkap');
    $this->session->set_flashdata('notifikasi', '<center>Anda berhasil logout</center>');
    redirect(site_url('index.php/login'),'refresh');
  }

}
