<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->load->library('email');
    }

    public function index() {
        $arr['page'] ='home';
        
        $qry ='Select * from novedades WHERE mostrar = 1 ORDER BY fecha desc'; // select data from db
        $arr['cms'] = $this->db->query($qry)->result_array();

        $qry2 ='Select * from promociones WHERE mostrar = 1 ORDER BY fecha desc'; // select data from db
        $arr['promociones'] = $this->db->query($qry2)->result_array();

       
        $qry3 ='Select * from marcas WHERE mostrar = 1 ORDER BY marca ASC'; // select data from db
        $arr['marcas'] = $this->db->query($qry3)->result_array();



        $this->load->view('vwHome',$arr);
    }




    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */