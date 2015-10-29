<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admpromociones extends CI_Controller {
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
        $arr['page'] = 'admpromociones';
        
     
        $crud = new grocery_CRUD();
        $crud->set_table('promociones');
        $crud->columns('titulo','mostrar','precio_anterior','precio_actual','imagen','limite');
        $crud->fields('titulo','mostrar','imagen','descripcion','precio_anterior','precio_actual','limite');
        $crud->required_fields('titulo','mostrar','descripcion','precio_anterior','precio_actual');
        $crud->set_field_upload('imagen','assets/uploads/images');
        


        $output = $crud->render();
        $arr['output'] = $output;
        $this->load->view('admin/vwManageCMS',$arr);
   

    }




     public function edit_cms($id='') {
        $arr['page'] = 'admnovedades';
        if($id!=''){
          $qry ='Select id,label,`content` from tbl_cms where id='.$id ; // select data from db
        $arr['cms'] = $this->db->query($qry)->result_array();
        
        $this->load->view('admin/vwEditCMS',$arr);
        }else{
            redirect('admin/cms');
        }
    }
   
    public function employees()
    {
        $this->grocery_crud->set_table('novedades');
        echo "test";
        $output = $this->grocery_crud->render();
 
        echo "<pre>";
        print_r($output);
        echo "</pre>";
        die();
    }
       public function update_cms() {
          
           
           
           $id = $_POST['pst_id'];
           $new_content = $_POST['tst_content'];
            
        if(isset($id) && !empty($id) ){
             $sql = "update tbl_cms set `content`='".$new_content."' where id=".$id;
             $val = $this->db->query($sql,array($new_content ,$id ));
             redirect('admin/cms/edit_cms/'.$id);
        }
        
        $arr['page'] = 'admnovedades';
        $this->load->view('admin/vwEditCMS',$arr);
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */