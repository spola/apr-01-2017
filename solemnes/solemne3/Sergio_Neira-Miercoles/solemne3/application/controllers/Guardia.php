<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Guardia extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            if(!$this->session->userdata('usuario'))
            {
                redirect("Welcome/index","refresh");
            }
        }
    }