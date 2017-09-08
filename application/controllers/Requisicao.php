<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');
ini_set('display_errors', 0);

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
        $this->load->helper('mpdf');
        $this->load->helper("moeda");

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
        print_r($row);
        $dados = array(
          'id_cliente' =>  $row->Código ,
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

       $valor = strtr($this->input->post('valor'), '.', '');
       $valor = strtr($valor, ',', '.');
       $desc = strtr($this->input->post('desconto'), '.', '');
       $desc = strtr($desc, ',', '.');

     $data = array(
      'id_requisicao' => $this->input->post('id_requisicao',TRUE),
      'descricao' => $this->input->post('descricao',TRUE),
      'valor' =>  $valor,
      'desconto' => $desc
      );
     if(validar($this->input->post('valor')) && validar($this->input->post('desconto'))){
     $this->M_item->insert($data);
          echo json_encode(array('result'=> true));

   }else{
         echo json_encode(array('result'=> FALSE, 'msg' => 'Valor não está no formado Brasleiro'));

   }  



   }

   public function upstatus()
   {

     $contrato =  $this->uri->segment(3,0);
     $id_protocolo =  $this->uri->segment(4,0);
     $row->id_login = $this->session->userdata('id');

     if($this->M_cliente->validar($contrato)){
      $row = $this->M_cliente->consultar_por_matricula($contrato);
      $row->id_login = $this->session->userdata('id');
      $row->filial = $this->M_filial->get($this->session->userdata('filial'));
      
      // dados para update
      $dados = array(
       'id_login' => $row->id_login,
       'situacao' => 2,
       'data' => date('Y-m-d H:i:s'));
      
      $this->Requisicao_model->update($id_protocolo,$dados);
      // fecha dados para update 
      $row->user = $this->M_login->get_id($row->id_login);
      $row->protocolo = $id_protocolo;
      $row->d = date('Y-m-d H:i:s');
      $itens = $this->M_item->get_por_protocolo($id_protocolo); 
      $row->itens = $itens;

      
       $html = $this->load->view('relatorio/V-protocolo',$row,true);
      pdf_create($html, 'a', TRUE);
       //print_r($row);
//style="border: 1px solid #dddddd; padding: 0.21cm"

    }else{

      $this->session->set_flashdata('erro','Cartão está com alguma pendência!'.
        '<br> Atendente, faça uma consulta e verifique qual é a pendência. Em caso de dúvidas, ligar para ExistenceCard Tel: (75) 3631-5469');
      redirect('/solicitacao');


    }

  }





}

