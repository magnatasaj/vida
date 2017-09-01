<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Filiais extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Filiais_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'filiais/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'filiais/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'filiais/index.html';
            $config['first_url'] = base_url() . 'filiais/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Filiais_model->total_rows($q);
        $filiais = $this->Filiais_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'filiais_data' => $filiais,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('filiais/filiais_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Filiais_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_filial' => $row->id_filial,
		'nome' => $row->nome,
		'setor' => $row->setor,
		'status' => $row->status,
	    );
            $this->load->view('filiais/filiais_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('filiais'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('filiais/create_action'),
	    'id_filial' => set_value('id_filial'),
	    'nome' => set_value('nome'),
	    'setor' => set_value('setor'),
	    'status' => set_value('status'),
	);
        $this->load->view('filiais/filiais_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nome' => $this->input->post('nome',TRUE),
		'setor' => $this->input->post('setor',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Filiais_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('filiais'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Filiais_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('filiais/update_action'),
		'id_filial' => set_value('id_filial', $row->id_filial),
		'nome' => set_value('nome', $row->nome),
		'setor' => set_value('setor', $row->setor),
		'status' => set_value('status', $row->status),
	    );
            $this->load->view('filiais/filiais_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('filiais'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_filial', TRUE));
        } else {
            $data = array(
		'nome' => $this->input->post('nome',TRUE),
		'setor' => $this->input->post('setor',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Filiais_model->update($this->input->post('id_filial', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('filiais'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Filiais_model->get_by_id($id);

        if ($row) {
            $this->Filiais_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('filiais'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('filiais'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nome', 'nome', 'trim|required');
	$this->form_validation->set_rules('setor', 'setor', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_filial', 'id_filial', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "filiais.xls";
        $judul = "filiais";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nome");
	xlsWriteLabel($tablehead, $kolomhead++, "Setor");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->Filiais_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nome);
	    xlsWriteLabel($tablebody, $kolombody++, $data->setor);
	    xlsWriteNumber($tablebody, $kolombody++, $data->status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=filiais.doc");

        $data = array(
            'filiais_data' => $this->Filiais_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('filiais/filiais_doc',$data);
    }

}

/* End of file Filiais.php */
/* Location: ./application/controllers/Filiais.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-01 02:43:39 */
/* http://harviacode.com */