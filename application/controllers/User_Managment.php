<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Managment extends CI_Controller {
      
public function __construct() {
          parent::__construct();
          $this->load->model('users');
      }

public function index(){
$this->login_view();
}

public function login_view(){
//echo "Hurrayy!! it worked.";
	$data['content']='user/login_v';
	$data['title']="User Login";
$this->load->view('template',$data);

}
	public function signup(){

		$data['title']="SignUp";
		$data['content']="user/signup";
		$this->load->view('template',$data);
	}

	 public function list_users() {
          $users = Users::all();
          foreach ($users as $user) {
              echo '<li>' . $user->username . '</li>';
              echo '<li>' . $user->password . '</li>';
              echo '<li>' . $user->email . '</li>';
          }
          echo '</ul>';
      }


}