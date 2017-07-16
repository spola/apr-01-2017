<?php
class UsuarioModel extends CI_Model {
    
    public function isValid($email, $pass) {
        if($email != "adaBlah@blah.mx") {
            return false;
        } else if($pass != 'asdf123') {
            return false;
        } else {
          return true;
        }
    }
}
