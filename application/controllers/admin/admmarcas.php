<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admmarcas extends CI_Controller {
/**
 * ark Admin Panel for Codeigniter 
 * Author: Abhishek R. Kaushik
 * downloaded from http://devzone.co.in
 *
 */
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'admmarcas';
        
     
        $crud = new grocery_CRUD();
        $crud->set_table('promociones');
        $crud->columns('titulo','mostrar','precio_anterior','precio_actual','imagen');
        $crud->fields('titulo','mostrar','imagen','descripcion','precio_anterior','precio_actual');
        $crud->required_fields('titulo','mostrar','descripcion','precio_anterior','precio_actual');
        $crud->set_field_upload('imagen','assets/uploads/images');
        


        $output = $crud->render();
        $arr['output'] = $output;
        $this->load->view('admin/vwManageCMS',$arr);
   

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */