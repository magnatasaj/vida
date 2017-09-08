<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');
ini_set('display_errors', 0);

class Solicitacao extends CI_Controller {

  function __construct() {
    parent::__construct();

        date_default_timezone_set('America/Sao_Paulo'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $this->load->model('M_login');
        $this->load->model('M_filial');
        $this->load->model('M_cliente');
        $this->load->model('Requisicao_model');

        if(null == $this->session->userdata('id')){
         $this->session->set_flashdata('erro','Voçê não está logado!'.
          '<br>Logue para ter acesso!');  
         redirect();
       }

       

     }

     public function index() {
      $this->load->view('V-solicitacao');
    }

    public function consultar() {

      $matricula = $this->input->post('matricula');
      $row = $this->M_cliente->consultar_por_matricula($matricula);
      if($row){

       $this->load->view('V-solicitacao-consultar',$row);
     }else{
       $this->session->set_flashdata('erro','Cartão não encontrado na base de dados!'.
        '<br> Atendente, solicite que o cliente que  entre em contato, e peça o seu ExistenceCard Tel: (75) 3631-5469');
       redirect('/solicitacao');
     }

   
   }

     public function consultar_matricula_protocolo() {
      
      if($this->input->post('matricula')){
      $matricula = $this->input->post('matricula');
    }else{
      $matricula = 0;
    }
      $row = $this->M_cliente->consultar_por_matricula($matricula);
      if($row){
        echo 'entrou';
        $pro = $this->Requisicao_model->get_all_por_cliente($row->Código);
        $row->requisicao_data = $pro;
        $this->load->view('V-solicitacao-consultar-protocolo',$row);
      }else{
        if($matricula != 0){
       $this->session->set_flashdata('erro','Cartão não encontrado na base de dados!'.
        '<br> Atendente, solicite que o cliente que  entre em contato, e peça o seu ExistenceCard Tel: (75) 3631-5469');}
        $this->load->view('V-solicitacao-consultar-protocolo');

     }

   }




 }



 ?>