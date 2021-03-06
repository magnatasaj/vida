<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $this->load->model('M_login');
        $this->load->model('M_filial');
    }

    public function index() {
        $dados['dados'] = $this->M_filial->lista();
        $this->load->view('V-login', $dados);
        
    }

    public function entrar() {
        $login = $this->input->post('login');
        $senha = $this->input->post('senha');
        $filial = $this->input->post('filial');
        $row =  $this->M_login->autenticacao($login, $senha,$filial);
        

        if ($row) {


            $d_sessao = array(
                'id' => $row->id_login,
                'login' => $login,
                'nome' => $row->nome,
                'filial' => $filial
                );
            $this->session->set_userdata($d_sessao);
            redirect('solicitacao');
            //$this->load->view('V-painel');
        } else {
            $this->session->set_flashdata('erro', 'Login ou senha incorretos, tente novamente.');
            redirect();
        }
    }

    public function add() {
        $data = array(
            'nome' => $this->input->post('login'),
            'senha' => $this->input->post('senha')
            );


        $this->M_login->insert($data);
        $this->session->set_flashdata('resposta', 'teste');

        redirect();
    }

    public function sair(){
        $this->session->sess_destroy();
        redirect();
    }

}
