<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');


class Login extends CI_Controller {
	
	
	public function index()
	{
		if(isset($_POST['password'])){
		$this->load->model('usuario_model');
		if($this->usuario_model->login($_POST['email'],$_POST['password'])){
			redirect('menu');
		}else{
			redirect('login#bad-password');
		}
		}
		$this->load->view('login');
	}
	
}