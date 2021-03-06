<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class Datapaket_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function Tambahpaket($data, $table) {
		return $this->db->insert($table, $data);
	}
	
	public function validasipaket($nama_paket,$id_tahun)
	{
		$this->db->select('*');
        $this->db->from('tbl_paket');
        $this->db->where('nama_paket',$nama_paket);
        $this->db->where('id_tahun',$id_tahun);
        $query = $this->db->get();
        return $query->num_rows();
	}

	public function daftarpaket($id_jenis,$id_ppk)
	{
		$query = $this->db->query("SELECT b.id_paket, a.nama_tahun, b.nama_paket, c.main_jenis, c.sub_jenis , b.input_by from tbl_tahun a , tbl_paket b , tbl_jenis c WHERE b.id_tahun = a.id_tahun and b.id_jenis = c.id_jenis AND b.id_jenis = '$id_jenis' AND b.id_ppk = '$id_ppk' ORDER BY b.id_paket DESC");
		return $query->result_array();
	}

	public function getwherepaket($id_paket)
	{
		$query = $this->db->query("SELECT b.id_jenis,b.id_paket, a.nama_tahun, b.nama_paket, c.main_jenis, c.sub_jenis , b.input_by from tbl_tahun a , tbl_paket b , tbl_jenis c WHERE b.id_tahun = a.id_tahun and b.id_jenis = c.id_jenis AND b.id_paket ='$id_paket'");
		return $query->result_array();
	}
	public function wherepaket($id_paket)
	{
		$query = $this->db->query("SELECT a.id_tahun, b.id_jenis,b.id_paket, a.nama_tahun, b.nama_paket, c.main_jenis, c.sub_jenis , b.input_by from tbl_tahun a , tbl_paket b , tbl_jenis c WHERE b.id_tahun = a.id_tahun and b.id_jenis = c.id_jenis AND b.id_paket ='$id_paket'");
		return $query->row_array();
	}

	public function deletepaket($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function cekpaket ($id_tahun,$id_jenis,$id_ppk)
	{
		$this->db->select('*');
		$this->db->from('tbl_paket');
		$this->db->where('id_tahun', $id_tahun);
		$this->db->where('id_jenis', $id_jenis);
		$this->db->where('id_ppk', $id_ppk);
		$this->db->order_by('id_paket','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function viewjenispaket ($id_tahun,$id_jenis,$id_ppk)
	{
		$this->db->select('*');
		$this->db->from('tbl_paket');
		$this->db->where('id_tahun' , $id_tahun);
		$this->db->where('id_jenis' , $id_jenis);
		$this->db->where('id_ppk' , $id_ppk);
		$this->db->order_by('id_paket','DESC');
		$query= $this->db->get();
		return $query->result_array();
	}

	public function jmlpaket()
	{
		$this->db->select('*');
        $this->db->from('tbl_paket');
        $query = $this->db->get();
        return $query->num_rows();
	}

}
 ?>