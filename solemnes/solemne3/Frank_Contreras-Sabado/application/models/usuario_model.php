<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{
    
    public function __construct(){
        
        parent::__construct();
    }
    
    public function login($username,$password){
        
        $this->db->where('name',$username);
        $this->db->where('password',$password);
        $this->db->where('enabled',1);
        $r = $this->db->get('users');
        
        if($r->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
}