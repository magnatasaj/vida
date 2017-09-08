<?php

class M_filial extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function lista() {

        $query = $this->db->get('filiais')->result_array();
        return $query;
    }

    public function get($id) {
     $this->db->where("id_filial", $id);

     $query = $this->db->get('filiais')->row();
     return $query;
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