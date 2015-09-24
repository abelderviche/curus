<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cartilla extends CI_Controller {

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
        $arr['page'] ='novedades';
        $qry =' SELECT e.nombre especialidad,c.nombre, c.direccion, c.ciudad, c.telefono  
                FROM cartilla c
                LEFT JOIN especialidades e ON e.id =  c.id_especialidad
                ORDER BY c.nombre ASC'; // select data from db
        $arr['cartilla'] = $this->db->query($qry)->result_array();

        $qry2 =' SELECT e.nombre especialidad
                FROM especialidades e 
                ORDER BY e.nombre ASC'; // select data from db
        $arr['especialidades'] = $this->db->query($qry2)->result_array();


        $this->load->view('vwCartilla',$arr);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */