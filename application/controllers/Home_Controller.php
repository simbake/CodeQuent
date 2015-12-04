<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller{

    public function __constructor() {
        parent::__constructor();
    }

	public function index(){

		//echo "It worked. Hooray!!";
		$data['content']='user/home';
		$data['title']="User Login";
		$this->load->view('template',$data);
	}

}