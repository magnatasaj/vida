<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Requisicao extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        date_default_timezone_set('America/Sao_Paulo'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $this->load->model('M_login');
        $this->load->model('M_filial');
        $this->load->model('Requisicao_model');
        $this->load->model('M_cliente');

         if(null == $this->session->userdata('id')){
         $this->session->set_flashdata('erro','Voçê não está logado!'.
          '<br>Logue para ter acesso!');  
        redirect();
        }

    }

    public function index()
    {

     $contrato =  $this->uri->segment(2,0);
     if($this->M_cliente->validar($contrato)){
        $row = $this->M_cliente->consultar_por_matricula($contrato);
        $row->id_login = $this->session->userdata('id');
        $row->situacao = 1; 
        $dados = array(
            'id_cliente' =>  $row->id_cliente ,
            'id_login' => $row->id_login,
            'situacao' => 1);
        $this->Requisicao_model->insert($dados);
        $row->protocolo = $this->db->insert_id();
        print_r($row);


        
    }else{

        $this->session->set_flashdata('erro','Cartão está com alguma pendência!'.
            '<br> Atendente, faça uma consulta e verifique qual é a pendência. Em caso de dúvidas, ligar para ExistenceCard Tel: (75) 3631-5469');
        redirect('/solicitacao');


    }

}


}

