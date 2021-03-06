<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  //-----------------------manage mahasiswa-------------------------------------
  public function insert_mahasiswa($data)
  {
    $this->db->insert('tbl_mahasiswa', $data);
    if ($this->db->affected_rows() > 0)
    {
      return true;
      } else
        {
          return false;
        }
  }
  public function get_mahasiswa()
  {
    $query = $this->db->get('tbl_mahasiswa');
    return $query;
  }
  //----------------------------------------------------------------------------
  //------------------------manage jurusan--------------------------------------
  public function insert_jurusan($data)
  {
    $this->db->insert('tbl_jurusan', $data);
    if ($this->db->affected_rows() > 0)
    {
      return true;
      } else
        {
          return false;
        }
  }
  public function get_jurusan()
  {
    $query = $this->db->get('tbl_jurusan');
    return $query;
  }
  //----------------------------------------------------------------------------
  //------------------------manage krs------------------------------------------
  public function insert_krs($data)
  {
    $this->db->insert('tbl_krs', $data);
    if ($this->db->affected_rows() > 0)
    {
      return true;
      } else
        {
          return false;
        }
  }
  //------------------------manage mata kuliah----------------------------------
  public function insert_matakuliah($data)
  {
    $this->db->insert('tbl_makul', $data);
    if ($this->db->affected_rows() > 0)
    {
      return true;
      } else
        {
          return false;
        }
  }
  public function get_makul()
  {
    $query = $this->db->get('tbl_makul');
    return $query;
  }
  //----------------------------------------------------------------------------
  public function resolve_user_login($username, $password) {

		$this->db->select('userpass');
		$this->db->from('tbl_user');
		$this->db->where('username', $username);
		$hash = $this->db->get()->row('userpass');

		return $this->verify_password_hash($password, $hash);

	}
  public function get_user_id_from_username($username) {

		$this->db->select('id');
		$this->db->from('tbl_user');
		$this->db->where('username', $username);

		return $this->db->get()->row('id');

	}
  public function get_user($user_id) {

		$this->db->from('tbl_user');
		$this->db->where('id', $user_id);
		return $this->db->get()->row();

	}
  private function hash_password($password) {

		return password_hash($password, PASSWORD_BCRYPT);

	}
  private function verify_password_hash($password, $hash) {

		return password_verify($password, $hash);

	}

}
