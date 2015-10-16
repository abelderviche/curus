<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sendmail extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $invalid_characters = array("$", "%", "#", "<", ">", "|");

        $nombre_nombre  = $this->input->post("nombre");
        $email_contacto = $this->input->post("email");
        $consulta = $this->input->post("consulta");
        $nombre_nombre = str_replace($invalid_characters, "", $nombre_nombre);
        $email_contacto = str_replace($invalid_characters, "", $email_contacto);
        $consulta = str_replace($invalid_characters, "", $consulta);

        $this->load->library('email');

        $this->email->from($email_contacto, $nombre_nombre);
        $this->email->to('abelderviche@gmail.com'); 
      /*  $this->email->cc('another@another-example.com'); 
        $this->email->bcc('them@their-example.com'); 
*/
        $this->email->subject('Consulta Web');
        $this->email->message($consulta);  
      //  echo "ok";

        if($this->email->send()){
            echo "ok";
        }else{
            echo "nok";
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */