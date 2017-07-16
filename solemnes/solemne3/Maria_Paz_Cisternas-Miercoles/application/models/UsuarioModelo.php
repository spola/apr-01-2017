<?php
class UsuarioModelo extends CI_Model{
    public function isValid($email,$pass){
        if($email != "a@b.c"){
            return false;
        }
        else if($pass != "qwerty"){
            return false;
        }
        else{
            return true;
        }
    }
}