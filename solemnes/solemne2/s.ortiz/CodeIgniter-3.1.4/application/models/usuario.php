<?php
class usuario extends CI_Model {
    
    public function isValid($email, $pass) {
        if($email != "san") {
            return false;
        } else if($pass != '1') {
            return false;
        } else {
          return true;
        }
    }
    
   
}