<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
  public $status;
  public $roles;
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('session'));
    $this->load->helper(array('url'));
    $this->load->model('Admin_model','admin_model');
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/menu');
    $this->load->view('admin/footer');
  }
  //----------------------------------------------------------------------------
  //-------------------------------manage mahasiswa-----------------------------
  public function add()
  {
    // if(empty($this->session->userdata['email']))
    //   {
    //     redirect(site_url().'main/login/');
    //   }
      $data = array();
      // $data = $this->session->userdata;
      $data['tbl_jurusan'] = $this->admin_model->get_jurusan();
      // $data['users'] = $this->db->where_in('id')->get('users')->row_array();
      // $token = base64_decode($this->uri->segment(4));
      // $cleanToken = $this->security->xss_clean($token);
      // $user_info = $this->admin_model->isTokenValid($cleanToken);

      $this->load->view('admin/header');
      $this->load->view('admin/add', $data);
      $this->load->view('admin/footer');
  }
  public function save_data_mahasiswa()
  {
    $this->load->model('Admin_model','admin_model');
    $data = array(
      'mahasiswa_id' => $this->input->post('mahasiswa_id'),
      'mahasiswa_nim' => $this->input->post('mahasiswa_nim'),
      'mahasiswa_jurusan_id' => $this->input->post('mahasiswa_jurusan_id'),
      'mahasiswa_nama' => $this->input->post('mahasiswa_nama'),
      'mahasiswa_tempat_lahir' => $this->input->post('mahasiswa_tempat_lahir'),
      'mahasiswa_tgl_lahir' => $this->input->post('mahasiswa_tgl_lahir'),
      'mahasiswa_jekel' => $this->input->post('mahasiswa_jekel'),
      'mahasiswa_alamat' => $this->input->post('mahasiswa_alamat'),
      'userinput' => $this->input->post('userinput')
      );
      $pesan['pesan'] = "Data Mahasiswa Berhasi Disimpan.";
      $result = $this->admin_model->insert_mahasiswa($data);
      $datanya =array();
      $datanya['all_mahasiswa'] =  $this->db->get('tbl_mahasiswa')->result_array();
      $this->load->view('admin/header',$data);
      $this->load->view('admin/all_mahasiswa',$datanya);
      $this->load->view('admin/footer');
  }
  public function all_mahasiswa()
  {
    $datanya =array();
    $datanya['all_mahasiswa'] =  $this->db->get('tbl_mahasiswa')->result_array();
    $this->load->view('admin/header');
    $this->load->view('admin/all_mahasiswa', $datanya);
    $this->load->view('admin/footer');
  }
  public function edit_mahasiswa($id_mahasiswa)
    {
      $a['editdata']	= $this->db->get_where('tbl_mahasiswa',array('mahasiswa_id'=>$id_mahasiswa))->result_object();

      $this->load->view('admin/header');
      $this->load->view('admin/edit_mahasiswa',$a);
      $this->load->view('admin/footer');
    }
  public function update_mahasiswa()
  {
    $id_mahasiswa = $this->input->post('mahasiswa_id');

    $object = array(
      'jenis_rumah' => 'Kontrakan',
      'id_pemilik' => $this->input->post('id_pemilik'),
      'tipe_pemilik' => $this->input->post('tipe_pemilik'),
      'email_pemilik' => $this->input->post('email_pemilik'),
      'nama_rumah' => $this->input->post('nama_rumah'),
      'nama_pemilik_rumah' => $this->input->post('nama_pemilik_rumah'),
      'nomor_kontak_pemilik' => $this->input->post('nomor_kontak_pemilik'),

    );
    $this->db->where('mahasiswa_id', $id_mahasiswa);
    $this->db->update('tbl_mahasiswa', $object);

    $data['data'] = $this->db->get('tbl_mahasiswa')->result_array();

    $this->load->view('admin/header');
    $this->load->view('admin/all_mahasiswa',$data);
    $this->load->view('admin/footer');
  }
  public function delete_mahasiswa($id)
  {
    $this->db->where('mahasiswa_id',$id);
    $this->db->delete('tbl_mahasiswa');
    redirect(base_url('Admin/all_mahasiswa'));
  }
  //----------------------------------------------------------------------------
  //-------------------------------manage jurusan-------------------------------
  public function add_jurusan()
  {
    // if(empty($this->session->userdata['email']))
    //   {
    //     redirect(site_url().'main/login/');
    //   }
      // $data = array();
      // $data = $this->session->userdata;
      // $data['users'] = $this->db->get('users')->result_array();
      // $data['users'] = $this->db->where_in('id')->get('users')->row_array();
      // $token = base64_decode($this->uri->segment(4));
      // $cleanToken = $this->security->xss_clean($token);
      // $user_info = $this->admin_model->isTokenValid($cleanToken);

      $this->load->view('admin/header');
      $this->load->view('admin/add_jurusan');
      $this->load->view('admin/footer');
  }
  public function save_data_jurusan()
  {
    $this->load->model('Admin_model','admin_model');
    $data = array(
      'jurusan_id' => $this->input->post('jurusan_id'),
      'jurusan_nama' => $this->input->post('jurusan_nama'),
      'jurusan_status' => $this->input->post('jurusan_status'),
      'userinput' => $this->input->post('userinput')
      );
      $pesan['pesan'] = "Data Jurusan Berhasi Disimpan.";
      $result = $this->admin_model->insert_jurusan($data);
      $this->load->view('admin/header',$data);
      $this->load->view('admin/add_jurusan', $pesan);
      $this->load->view('admin/footer');
  }
  public function all_jurusan()
  {
    $datanya =array();
    $datanya['all_jurusan'] =  $this->db->get('tbl_jurusan')->result_array();
    $this->load->view('admin/header');
    $this->load->view('admin/all_jurusan', $datanya);
    $this->load->view('admin/footer');
  }
  public function delete_jurusan($id)
  {
    $this->db->where('jurusan_id',$id);
    $this->db->delete('tbl_jurusan');
    redirect(base_url('Admin/all_jurusan'));
  }
  //----------------------------------------------------------------------------
  //--------------------------------manage mata kuliah--------------------------
  public function add_matakuliah()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/add_matakuliah');
    $this->load->view('admin/footer');
  }
  public function save_data_matakuliah()
  {
    $this->load->model('Admin_model','admin_model');
    $data = array(
      'makul_id' => $this->input->post('makul_id'),
      'makul_kode' => $this->input->post('makul_kode'),
      'makul_nama' => $this->input->post('makul_nama'),
      'makul_sks' => $this->input->post('makul_sks'),
      'makul_status' => $this->input->post('makul_status'),
      'userinput' => $this->input->post('userinput')
      );
      $pesan['pesan'] = "Data Mata Kuliah Berhasi Disimpan.";
      $result = $this->admin_model->insert_matakuliah($data);
      $datanya =array();
      $datanya['all_matakuliah'] =  $this->db->get('tbl_makul')->result_array();
      $this->load->view('admin/header',$data);
      $this->load->view('admin/all_matakuliah', $datanya);
      $this->load->view('admin/footer');
  }
  public function all_matakuliah()
  {
    $datanya =array();
    $datanya['all_matakuliah'] =  $this->db->get('tbl_makul')->result_array();
    $this->load->view('admin/header');
    $this->load->view('admin/all_matakuliah', $datanya);
    $this->load->view('admin/footer');
  }
  public function delete_matakuliah($id)
  {
    $this->db->where('makul_id',$id);
    $this->db->delete('tbl_makul');
    redirect(base_url('Admin/all_matakuliah'));
  }
  //----------------------------------------------------------------------------
  //------------------------Manage Krs------------------------------------------
  public function add_krs()
  {
    // if(empty($this->session->userdata['email']))
    //   {
    //     redirect(site_url().'main/login/');
    //   }
      // $data = array();
      // $data = $this->session->userdata;
      // $data['users'] = $this->db->get('users')->result_array();
      // $data['users'] = $this->db->where_in('id')->get('users')->row_array();
      // $token = base64_decode($this->uri->segment(4));
      // $cleanToken = $this->security->xss_clean($token);
      // $user_info = $this->admin_model->isTokenValid($cleanToken);
      $data = array();
      // $data = $this->session->userdata;
      $data['tbl_mahasiswa'] = $this->admin_model->get_mahasiswa();
      $data['tbl_makul'] = $this->admin_model->get_makul();

      $this->load->view('admin/header');
      $this->load->view('admin/add_krs',$data);
      $this->load->view('admin/footer');
  }
  public function save_data_krs()
  {
    $this->load->model('Admin_model','admin_model');
    $data = array(
      'krs_id' => $this->input->post('krs_id'),
      'krs_semester' => $this->input->post('krs_semester'),
      'krs_mahasiswa_id' => $this->input->post('krs_mahasiswa_id'),
      'krs_makul_id' => $this->input->post('krs_makul_id'),
      'krs_nilai' => $this->input->post('krs_nilai'),
      'krs_status' => $this->input->post('krs_status'),
      'userinput' => $this->input->post('userinput')
      );
      $pesan['pesan'] = "Data KRS Berhasi Disimpan.";
      $result = $this->admin_model->insert_krs($data);
      $datanya =array();
      $datanya['all_krs'] =  $this->db->get('tbl_krs')->result_array();
      $this->load->view('admin/header',$data);
      $this->load->view('admin/all_krs', $datanya);
      $this->load->view('admin/footer');
  }
  public function all_krs()
  {
    $datanya =array();
    $datanya['all_krs'] =  $this->db->get('tbl_krs')->result_array();
    $this->load->view('admin/header');
    $this->load->view('admin/all_krs', $datanya);
    $this->load->view('admin/footer');
  }
  public function delete_krs($id)
  {
    $this->db->where('krs_id',$id);
    $this->db->delete('tbl_krs');
    redirect(base_url('Admin/all_krs'));
  }
  //----------------------------------------------------------------------------
  //------------------------------login admin-----------------------------------
  public function login()
  {
    // $datanya = array();
    // $datanya['tbl_user'] = $this->db->get('tbl_user')->result_array();
    // $datanya['tbl_user'] = $this->db->where_in('id')->get('tbl_user')->row_array();
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
      $this->load->view('admin/login');
      $this->load->view('admin/footer_login');

    } else {

      // set variables from the form
      $username = $this->input->post('username');
      $password = $this->input->post('userpass');

      if ($this->admin_model->resolve_user_login($username, $password)) {

        $user_id = $this->admin_model->get_user_id_from_username($username);
        $user    = $this->admin_model->get_user($user_id);

        // set session user datas
        $_SESSION['user_id']      = (int)$user->id;
        $_SESSION['username']     = (string)$user->username;
        $_SESSION['logged_in']    = (bool)true;
        // $_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
        // $_SESSION['is_admin']     = (bool)$user->is_admin;

        // user login ok


        $this->load->view('admin/header');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/footer');

      } else {

        // login failed
        $data->error = 'Wrong username or password.';

        // send error to the view
        $this->load->view('admin/login',$data);
        $this->load->view('admin/footer_login');

      }

    }

  }

  //----------------------------------------------------------------------------
  //---------------------------Register Mahasiswa-------------------------------
  public function register_mahasiswa()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/register_mahasiswa');
    $this->load->view('admin/footer');
  }
  //----------------------------------------------------------------------------
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
