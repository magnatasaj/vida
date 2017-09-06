<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Item extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'item/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'item/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'item/index.html';
            $config['first_url'] = base_url() . 'item/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Item_model->total_rows($q);
        $item = $this->Item_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'item_data' => $item,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('item/item_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Item_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_item' => $row->id_item,
		'id_requisicao' => $row->id_requisicao,
		'descricao' => $row->descricao,
		'valor' => $row->valor,
		'desconto' => $row->desconto,
	    );
            $this->load->view('item/item_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('item'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('item/create_action'),
	    'id_item' => set_value('id_item'),
	    'id_requisicao' => set_value('id_requisicao'),
	    'descricao' => set_value('descricao'),
	    'valor' => set_value('valor'),
	    'desconto' => set_value('desconto'),
	);
        $this->load->view('item/item_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_requisicao' => $this->input->post('id_requisicao',TRUE),
		'descricao' => $this->input->post('descricao',TRUE),
		'valor' => $this->input->post('valor',TRUE),
		'desconto' => $this->input->post('desconto',TRUE),
	    );

            $this->Item_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('item'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Item_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('item/update_action'),
		'id_item' => set_value('id_item', $row->id_item),
		'id_requisicao' => set_value('id_requisicao', $row->id_requisicao),
		'descricao' => set_value('descricao', $row->descricao),
		'valor' => set_value('valor', $row->valor),
		'desconto' => set_value('desconto', $row->desconto),
	    );
            $this->load->view('item/item_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('item'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_item', TRUE));
        } else {
            $data = array(
		'id_requisicao' => $this->input->post('id_requisicao',TRUE),
		'descricao' => $this->input->post('descricao',TRUE),
		'valor' => $this->input->post('valor',TRUE),
		'desconto' => $this->input->post('desconto',TRUE),
	    );

            $this->Item_model->update($this->input->post('id_item', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('item'));
        }
    }
    
    public function delete() 
    {
             $id =  $this->input->post('iditem',TRUE);

        $row = $this->Item_model->get_by_id($id);

        if ($row) {
            $this->Item_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
             echo json_encode(array('result'=> true));

        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            echo json_encode(array('result'=> false));
        }

    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_requisicao', 'id requisicao', 'trim|required');
	$this->form_validation->set_rules('descricao', 'descricao', 'trim|required');
	$this->form_validation->set_rules('valor', 'valor', 'trim|required');
	$this->form_validation->set_rules('desconto', 'desconto', 'trim|required');

	$this->form_validation->set_rules('id_item', 'id_item', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "item.xls";
        $judul = "item";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Requisicao");
	xlsWriteLabel($tablehead, $kolomhead++, "Descricao");
	xlsWriteLabel($tablehead, $kolomhead++, "Valor");
	xlsWriteLabel($tablehead, $kolomhead++, "Desconto");

	foreach ($this->Item_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_requisicao);
	    xlsWriteNumber($tablebody, $kolombody++, $data->descricao);
	    xlsWriteNumber($tablebody, $kolombody++, $data->valor);
	    xlsWriteLabel($tablebody, $kolombody++, $data->desconto);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=item.doc");

        $data = array(
            'item_data' => $this->Item_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('item/item_doc',$data);
    }

}

/* End of file Item.php */
/* Location: ./application/controllers/Item.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-04 18:57:53 */
/* http://harviacode.com */