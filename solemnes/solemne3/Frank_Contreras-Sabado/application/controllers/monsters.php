<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monsters extends CI_Controller {

    public function __construct(){
        
        parent::__construct();
        $this->load->model("monster_model");
    }
    
    public function index(){
         
        $monsters = $this->monster_model->traer();
        $title['title'] = 'Monster register';
    
        $this->load->view('layouts/header', $title);
        $this->load->view('monsters_list', array('monsters' => $monsters));
        $this->load->view('layouts/footer');
    }
    
    public function insert(){
        $data = $this->input->post();
        
        if(isset($data)){
            $name = $data['name'];
            $species = $data['species'];
            $weakness = $data['weakness'];
            
            $this->monster_model->insertMonster($name, $species, $weakness);
            redirect('monsters');
        }
    }
    
    public function irInsert(){
        
        $title['title'] = 'Inserting a monster';
        
        $this->load->view("layouts/header",$title);
        $this->load->view("monster_add");
        $this->load->view("layouts/footer");
    }
    
    public function edit($id = NULL){
        if($id != NULL){
            $title['title'] = 'Editing a monster';
            $data['dataMonster'] = $this->monster_model->editMonster($id);
            $this->load->view("layouts/header",$title);
            $this->load->view('monster_edit', $data);
            $this->load->view("layouts/footer");
        }else{
            redirect('monsters');
        }
    }
    
    public function update(){
        $data = $this->input->post();
        
        if(isset($data)){
            $id = $data['id'];
            $name = $data['name'];
            $species = $data['species'];
            $weakness = $data['weakness'];
            
            $this->monster_model->updateMonster($id, $name, $species, $weakness);
            redirect('monsters');
        }
    }
}
