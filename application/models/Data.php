<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model {


    public function getall($table) {
        $this->db->from("$table");
        return $this->db->get()->result();
    }
    
    
    public function getall_ongoing_gallery($table) {
        $this->db->where('status',0);
        $this->db->from("$table");
        return $this->db->get()->result();
    }
    
    public function getall_cmplt_gallery($table) {
        $this->db->where('status',1);
        $this->db->from("$table");
        return $this->db->get()->result();
    }

    public function getone($table, $id) {
        $this->db->where('id', $id);
        $this->db->limit(1);
        $this->db->from("$table");
        return $this->db->get()->result();
    }
    

    public function delete($table, $id) {
        $this->db->where('id', $id);
        $resul = $this->db->delete($table);
        if ($resul) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


    public function save($table, $data) {
 
        $result = $this->db->insert($table, $data);
        if ($result) {
            return $this->db->insert_id();
        } else {
            return FALSE;
        }
    }


    public function update($table, $id, $data) {
        $this->db->where('id', $id);
        $result = $this->db->update($table, $data);
        if($result)
        {
            return TRUE;
        }  else {
            return FALSE;   
         }
    }
    

 
    
}