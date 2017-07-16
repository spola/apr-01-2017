<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monster_model extends CI_Model{
    
    public function __construct(){
        
        parent::__construct();
    }
    
    public function traer(){
        
        $monsters = $this->db
            ->select("id, name, species, weakness")
            ->from("monsters")
            ->where("enabled", 1)
            ->get();
        return $monsters->result();
    }
    
    public function insertMonster($name, $species, $weakness){
        
        $array = array(
            'name' => $name,
            'species' => $species,
            'weakness' => $weakness,
            'enabled' => 1
        );
            
        $this->db->insert('monsters', $array);
    }
    
    public function editMonster($id){
        $monsters = $this->db
            ->select("id, name, species, weakness")
            ->from("monsters")
            ->where("id", $id)
            ->get();
        
        return $monsters->result();
    }
    
    public function updateMonster($id, $name, $species, $weakness){
        
        $array = array(
            'id' => $id,
            'name' => $name,
            'species' => $species,
            'weakness' => $weakness,
        );
        
        $this->db->where('id',$id);
        $this->db->update('monsters',$array);
    }
}