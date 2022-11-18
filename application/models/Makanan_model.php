<?php
require_once 'Base_model.php';

class Makanan_model extends Base_Model{
    //nama tabel
    var $table = "tbl_makanan";

    public function find_all(){
        return $this->db->query("SELECT tbl_makanan.*,tbl_kantin.nama_kantin as nama_kantin
        FROM tbl_makanan 
        INNER JOIN tbl_kantin ON tbl_kantin.id = tbl_makanan.id_kantin")->result_array();
    }

    public function find_by_id($id){
        return $this->db->query("SELECT tbl_makanan.*,tbl_kantin.nama_kantin as nama_kantin 
        FROM tbl_makanan 
        INNER JOIN tbl_kantin ON tbl_kantin.id = tbl_makanan.id_kantin 
        WHERE tbl_makanan.id='$id'")->row_array();
    }
	
	public function pagination($limit,$start){
		return $this->db->query("SELECT tbl_makanan.*,tbl_kantin.nama_kantin as nama_kantin
		FROM tbl_makanan 
		    INNER JOIN tbl_kantin ON tbl_kantin.id = tbl_makanan.id_kantin LIMIT $start,$limit")->result_array();
	}

	public function search($kw,$limit,$start){
		    if($kw != ''){
		      return $this->db->query("SELECT tbl_makanan.*,tbl_kantin.nama_kantin as nama_kantin
		      FROM tbl_makanan 
		      INNER JOIN tbl_kantin ON tbl_kantin.id = tbl_makanan.id_kantin WHERE tbl_makanan.nama LIKE '%$kw%' LIMIT $start,$limit")->result_array();
		    }
		    return $this->pagination($limit,$start);
	}
	
	public function get_total_search($kw){
		    $rows = $this->db->query("SELECT tbl_makanan.*,tbl_kantin.nama_kantin as nama_kantin
		    FROM tbl_makanan 
		    INNER JOIN tbl_kantin ON tbl_kantin.id = tbl_makanan.id_kantin WHERE tbl_makanan.nama LIKE '%$kw%'")->result_array();
		    
		    return count($rows);
	}
}
