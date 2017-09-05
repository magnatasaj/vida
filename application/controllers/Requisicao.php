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
        $this->load->model('M_item');

        if(null == $this->session->userdata('id')){
         $this->session->set_flashdata('erro','Voçê não está logado!'.
          '<br>Logue para ter acesso!');  
         redirect();
     }

 }

 public function add()
 {

     $contrato =  $this->uri->segment(3,0);
     if($this->M_cliente->validar($contrato)){
        $row = $this->M_cliente->consultar_por_matricula($contrato);
        $row->id_login = $this->session->userdata('id');
        $row->situacao = 1; 
        $dados = array(
            'id_cliente' =>  $row->id_cliente ,
            'id_login' => $row->id_login,
            'situacao' => 1,
            'data' => date('Y-m-d H:i:s'));
        $this->Requisicao_model->insert($dados);
        $row->protocolo = $this->db->insert_id();
        $this->visualizar($row);
        redirect('requisicao/visualizar/'.$row->protocolo.'/'.$contrato);


        
    }else{

        $this->session->set_flashdata('erro','Cartão está com alguma pendência!'.
            '<br> Atendente, faça uma consulta e verifique qual é a pendência. Em caso de dúvidas, ligar para ExistenceCard Tel: (75) 3631-5469');
        redirect('/solicitacao');


    }

}

public function visualizar()
{

    $contrato =  $this->uri->segment(4,0);
    $protocolo =  $this->uri->segment(3,0);

    $row = $this->M_cliente->consultar_por_matricula($contrato);
    $row->id_login = $this->session->userdata('id');
    $row->situacao = 1;
    $row->protocolo = $protocolo;
    $itens = $this->M_item->get_por_protocolo($protocolo); 
    $row->itens = $itens;

    $this->load->view('V-requisicao',$row);

}



public function additem()
{

 $data = array(
      'id_requisicao' => $this->input->post('id_requisicao',TRUE),
      'descricao' => $this->input->post('descricao',TRUE),
       'valor' =>  $this->input->post('valor',TRUE),
       'desconto' => $this->input->post('desconto',TRUE)
       );

 $this->M_item->insert($data);
 echo json_encode(array('result'=> true));



}


}

