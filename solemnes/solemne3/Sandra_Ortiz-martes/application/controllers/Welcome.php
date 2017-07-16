<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
         
        //Obtengo parámetro error desde que viene como get
      $showError = $this->input->get("error");
      //Valido que el texto es un boolean true o false
      $showError = ($showError === 'true');
      
      //Invoco la vista y asigno parámetros
		$this->load->view('welcome_message', array(
        "error" => $showError ));
	}
    
     public function logged (){
         //Tomo los valores de usuario y contraseña
        $email = $this->input->post("usuario");
        $pass1 = $this->input->post("contraseña");
         $pass = $pass1."lollapaloza";
        
         //Me ire al modelo de nombre usuario 
        $this->load->model("usuario");
        //$this->load->helper("url");
        
        if($this->usuario->isValid($email, $pass)) {
           
            session_start();
            $_SESSION['sesion']=true;
            $tabla = $this->usuario->agarrarDatos();
            $this->load->view('tabla_registros',$tabla);
        } else {
            //Se regresa pero con error
            redirect("?error=true" , "welcome_message");
            
        }
            
            }
    
    public function loggedSinUsuario(){
            session_start();
            $_SESSION['sesion']=false;
            $this->load->model("usuario");
            $tabla = $this->usuario->agarrarDatos();
            $this->load->view('tabla_registros',$tabla);
    }
    
    
    
    public function registrarse(){
        $this->load->view('registro_nuevo');
    }
    
   public function modificar(){
            $this->load->model("usuario");
            $tabla = $this->usuario->agarrarDatosId();
       
            $this->load->view('modificar',$tabla);
       
   }
    
    public function guardarModificado(){
         $datos ['id'] = $this->input->post("id");
         $datos ['nombre'] = $this->input->post("nombre");
         $datos ['apellido'] = $this->input->post("apellido");
         $datos ['area'] = $this->input->post("area");
         $datos ['pasatiempos'] = $this->input->post("pasatiempos");
         $datos ['mounstro'] = $this->input->post("monstruo"); 
         $datos ['correo'] = $this->input->post("correo");
        
         $this->load->model("usuario");
         $this->usuario-> agregarModificado($datos);
         redirect('welcome/pato',"refresh");
         
         
        
    }
    
    public function pato(){
         $this->load->model("usuario");
         $tabla = $this->usuario->agarrarDatos();
         $this->load->view('tabla_registros',$tabla);
    }
    
    
     public function otroRegistro(){
    
         //$datos ['id'] = $this->input->post("ide");
         $datos ['nombre'] = $this->input->post("nombre");
         $datos ['apellido'] = $this->input->post("apellido");
         $datos ['area'] = $this->input->post("area");
         $datos ['pasatiempos'] = $this->input->post("pasatiempos");
         $datos ['mounstro'] = $this->input->post("monstruo"); 
         $datos ['correo'] = $this->input->post("correo");
    
         $this->load->model("usuario");
         $this->usuario->agregarNuevo($datos);
          redirect('welcome/pato',"refresh");
        // $tabla = $this->usuario->agarrarDatos();
         //$this->load->view('tabla_registros',$tabla);
         
     }
    
    public function buscar(){
        
         $cualbuscar = $this->input->post("cualbuscar");
         $this->load->model("usuario");
         $tabla = $this->usuario->agarrarBuscar($cualbuscar);
         $this->load->view('tabla_registros',$tabla);
        
    }
    
 }




