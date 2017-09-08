<?php

class M_login extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function autenticacao($login, $senha,$filial) {
        $this->db->where('login', $login);
        $this->db->where('senha', $senha);
        $this->db->where('filial', $filial);
        
        $query = $this->db->get('login')->row();
        if ($query) {
            
            $query->ultimo_acesso =  date('Y-m-d H:i:s'); 
            return $query; 
        }
    }

    public function get_id($id) {
        $this->db->where('id_login', $id);
        
        
        $query = $this->db->get('login')->row();
        if ($query) {
           return $query; 
        }
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