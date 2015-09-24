<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Solicite extends CI_Controller {

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
           $arr['page'] ='solicite';
        $this->load->view('vwSolicite',$arr);
    }

    public function enviar(){
        $nombre = $this->input->post('nombre');
        $email = $this->input->post('email');
        $telefono = $this->input->post('telefono');
        $consulta = $this->input->post('consulta');


         //set to_email id to which you want to receive mails
        $to_email = 'abelderviche@gmail.com';

        //send mail
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'abelderviche@gmail.com',
            'smtp_pass' => '42165033a',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);


        $this->email->from($email, $nombre);
        $this->email->to($to_email);
        $this->email->subject($telefono);
        $this->email->message($consulta);

        $this->email->set_newline("\r\n");




        if ($this->email->send()){
        // mail sent
           // $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
            echo "test";
            //redirect('contactform/index');
        }
        else{
        //error
            //$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
             echo "error";
            //redirect('contactform/index');
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */