<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

public $status;
public $roles;
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model','user_model');//load model User MOdel
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    $this->status = $this->config->item('status');
    $this->roles = $this->config->item('roles');
  }
  public function index()
  {
    if(empty($this->session->userdata['email']))
    {
      redirect(site_url().'main/login/');
    }
    $data = array();
    $data = $this->session->userdata;
    $data['tbl_mahasiswa'] = $this->db->get('tbl_mahasiswa')->result_array();
    $data['tbl_mahasiswa'] = $this->db->where_in('id')->get('tbl_mahasiswa')->row_array();

    $token = base64_decode($this->uri->segment(4));
    $cleanToken = $this->security->xss_clean($token);
    $user_info = $this->user_model->isTokenValid($cleanToken);

      $this->load->view('mahasiswa/index', $data);

  }
  public function login()
  {
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');
      if($this->form_validation->run() == FALSE)
      {
        }else{
            $post = $this->input->post();
              $clean = $this->security->xss_clean($post);

              $userInfo = $this->user_model->checkLogin($clean);

              if(!$userInfo){
                  $this->session->set_flashdata('flash_message', 'The login was unsucessful');
                  redirect(site_url().'main/login');
              }
              foreach($userInfo as $key=>$val){
                  $this->session->set_userdata($key, $val);
              }
              redirect(site_url().'main/');
          }
  }
  protected function _islocal()
    {
      return strpos($_SERVER['HTTP_HOST'], 'local');
    }
}
