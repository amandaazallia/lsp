t<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{


  public $status;
  public $roles;
  public $variable;

  function __construct(){
          parent::__construct();
          $this->status = $this->config->item('status');
          $this->roles = $this->config->item('roles');
  }
  public function updateUserInfo($post)
  {
      $data = array(
             'password' => $post['password'],
             'last_login' => date('Y-m-d h:i:s A'),
             'status' => $this->status[1]
          );
      $this->db->where('id', $post['user_id']);
      $this->db->update('users', $data);
      $success = $this->db->affected_rows();

      if(!$success){
          error_log('Unable to updateUserInfo('.$post['user_id'].')');
          return false;
      }

      $user_info = $this->getUserInfo($post['user_id']);
      return $user_info;
  }
  public function checkLogin($post)
  {
      $this->load->library('password');
      $this->db->select('*');
      $this->db->where('email', $post['email']);
      $query = $this->db->get('users');
      $userInfo = $query->row();

      if(!$this->password->validate_password($post['password'], $userInfo->password)){
          error_log('Unsuccessful login attempt('.$post['email'].')');
          return false;
      }

      $this->updateLoginTime($userInfo->id);

      unset($userInfo->password);
      return $userInfo;
  }
  public function updateLoginTime($id)
  {
      $this->db->where('id', $id);
      $this->db->update('users', array('last_login' => date('Y-m-d h:i:s A')));
      return;
  }
  public function updatePassword($post)
  {
      $this->db->where('id', $post['user_id']);
      $this->db->update('users', array('password' => $post['password']));
      $success = $this->db->affected_rows();

      if(!$success){
          error_log('Unable to updatePassword('.$post['user_id'].')');
          return false;
      }
      return true;
  }
  public function getUserInfoByEmail($email)
  {
      $q = $this->db->get_where('users', array('email' => $email), 1);
      if($this->db->affected_rows() > 0){
          $row = $q->row();
          return $row;
      }else{
          error_log('no user found getUserInfo('.$email.')');
          return false;
      }
  }

public function FunctionName($value='')
{
  # code...
}

}
