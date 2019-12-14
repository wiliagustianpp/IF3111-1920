<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_model extends CI_Model{
	private $_table = "laporan";

	//Membuat model untuk mengambil database dari tabel laporan 
    public function tambah($data,$table){    
        return $this->db->insert($table, $data);
    }

    public function edit_data($id, $table, $data){
    	$this->db->where('ID', $id);
    	$this->db->update($table, $data);
    }
    public function showDataEdit($id, $table){
    	$this->db->where('ID', $id);
    	$query = $this->db->get($table);
    	return $query->result();
    }

   public function hapus($id, $table){
   		$this->db->where('ID', $id);
   		$this->db->delete($table);
   }

}
?>