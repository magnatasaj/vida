<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Solicitacao extends CI_Controller {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $this->load->model('M_login');
        $this->load->model('M_filial');
        $this->load->model('M_cliente');

    }

    public function index() {
        $this->load->view('V-solicitacao');
    }

    public function consultar() {

        $matricula = $this->input->post('matricula');
        $row = $this->M_cliente->consultar_por_matricula($matricula);
        $v; $s; $n; $contrato; $sequencia;
        $id;

        if( $row->id_cliente > 0){
            
       $this->load->view('V-solicitacao-consultar',$row);
        }else{
         $this->session->set_flashdata('erro','Cartão não encontrado na base de dados!'.
          '<br> Atendente, solicite que o cliente que  entre em contato, e peça o seu ExistenceCard Tel: (75) 3631-5469');
         redirect('/solicitacao');
     }

 }


 


}



?>