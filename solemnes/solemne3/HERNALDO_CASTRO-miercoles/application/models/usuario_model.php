<?php 
 
class Usuario_model extends CI_Model {

	public $variable;
	public function_construct()
	{
		parent::_construct();
	}
	public function login($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$q = $this->db->get('usuarios');
		if($q->num_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}