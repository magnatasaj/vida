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


    }

    public function index()
    {

     $contrato =  $this->uri->segment(2,0);
     if($this->M_cliente->validar($contrato)){
        $row = $this->M_cliente->consultar_por_matricula($contrato);
        $data = array(
            'id_cliente' => $row->id_cliente ,
            'id_login' => $this->session->userdata('id'),
            'situacao' =>  1 );
        $grava = $this->Requisicao_model->insert($data);
        $dados = array("produtosVendidos" => $row);
        $dados['protocolo'] = $this->db->insert_id();
        print_r($dados);


        
    }else{

        $this->session->set_flashdata('erro','Cartão está com alguma pendência!'.
            '<br> Atendente, faça uma consulta e verifique qual é a pendência. Em caso de dúvidas, ligar para ExistenceCard Tel: (75) 3631-5469');
        redirect('/solicitacao');


    }

}


}

