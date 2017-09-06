<?php
class M_cliente extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function consultar_por_matricula($matricula) {
        $this->db->select('*', FALSE);
        $this->db->where('CONCAT(contrato, contrato_sequencia) like ',$matricula);
        $query = $this->db->get('cadastro')->row();         
        return $query;
    }

    public function validar($contrato){
        $query = $this->consultar_por_matricula($contrato);
        $retorno  = FALSE;
        if(strtotime($query->validade) < strtotime(date('Y-m-d')) || 1!= 1 ){

        }else{
            $retorno = true;
        }
        return $retorno;

    }

    public function insert($data) {
        if ($this->db->insert("login", $data)) {
            return true;
        }
    }

    public function delete($roll_no) {
        if ($this->db->delete("stud", "roll_no = " . $roll_no)) {
            return true;
        }
    }

    public function update($data, $id) {

        $this->db->set($data);
        $this->db->where("id_login", $id);
        $this->db->update("login", $data);
        return True;
    }

}

?>