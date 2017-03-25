<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model','mahasiswa_model');
  }
  public function index()
  {
    $this->load->view('mahasiswa/header');
    $this->load->view('mahasiswa/menu');
    $this->load->view('mahasiswa/footer');
  }
  public function add_krs()
  {
    $data = array();
    $data['tbl_mahasiswa'] = $this->mahasiswa_model->get_mahasiswa();
    $data['tbl_makul'] = $this->mahasiswa_model->get_makul();

    $this->load->view('mahasiswa/header');
    $this->load->view('mahasiswa/add_krs',$data);
    $this->load->view('mahasiswa/footer');
  }
  public function save_data_krs()
  {

      $this->load->model('Mahasiswa_model','mahasiswa_model');
      $data = array(
        'krs_id' => $this->input->post('krs_id'),
        'krs_semester' => $this->input->post('krs_semester'),
        'krs_mahasiswa_id' => $this->input->post('krs_mahasiswa_id'),
        'krs_makul_id' => $this->input->post('krs_makul_id'),
        'krs_status' => $this->input->post('krs_status'),
        'userinput' => $this->input->post('userinput')
        );
        $pesan['pesan'] = "Data KRS Berhasi Disimpan.";
        $result = $this->mahasiswa_model->insert_krs($data);
        $datanya =array();
        $datanya['all_krs'] =  $this->db->get('tbl_krs')->result_array();
        $this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/all_krs', $datanya);
        $this->load->view('mahasiswa/footer');
  }
  public function all_krs()
  {
    $datanya = array();
    $datanya['all_krs'] =  $this->db->get('tbl_krs')->result_array();
    $this->load->view('mahasiswa/header');
    $this->load->view('mahasiswa/all_krs', $datanya);
    $this->load->view('mahasiswa/footer');
  }
  public function login()
  {

    // create the data object
    $data = new stdClass();

    // load form helper and validation library
    $this->load->helper('form');
    $this->load->library('form_validation');

    // set validation rules
    $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
    $this->form_validation->set_rules('userpass', 'Password', 'required');

    if ($this->form_validation->run() == false) {

      // validation not ok, send validation errors to the view
      $this->load->view('mahasiswa/login');
      $this->load->view('admin/footer_login');

    } else {

      // set variables from the form
      $username = $this->input->post('username');
      $password = $this->input->post('userpass');

      if ($this->mahasiswa_model->resolve_user_login($username, $password)) {

        $user_id = $this->mahasiswa_model->get_user_id_from_username($username);
        $user    = $this->mahasiswa_model->get_user($user_id);

        // set session user datas
        $_SESSION['user_id']      = (int)$user->id;
        $_SESSION['username']     = (string)$user->username;
        $_SESSION['logged_in']    = (bool)true;
        // $_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
        // $_SESSION['is_admin']     = (bool)$user->is_admin;

        // user login ok

        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/menu',$data);
        $this->load->view('mahasiswa/footer');

      } else {

        // login failed
        $data->error = 'Wrong username or password.';

        // send error to the view
        $this->load->view('mahasiswa/login',$data);
        $this->load->view('admin/footer_login');

      }

    }

  }
  public function logout()
  {

    // create the data object
    $data = new stdClass();

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

      // remove session datas
      foreach ($_SESSION as $key => $value) {
        unset($_SESSION[$key]);
      }

      // user logout ok
      $this->load->view('welcome_message',$data);

    } else {

      // there user was not logged in, we cannot logged him out,
      // redirect him to site root
      redirect('/');

    }

  }
}
