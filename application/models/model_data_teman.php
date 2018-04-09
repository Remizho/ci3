<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_data_teman extends CI_Model{

	public function load_teman(){
		$sql = $this->db->query("SELECT * FROM teman");
		return $sql->result_array();
	}

	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$nama = $this->db->escape($post['nama']);
		$alamat = $this->db->escape($post['alamat']);
		$email = $this->db->escape($post['email']);

		$sql = $this->db->query("INSERT INTO teman VALUES (NULL, $nama, $alamat, $email, 1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM teman WHERE id_friend = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$nama = $this->db->escape($post['nama']);
		$alamat = $this->db->escape($post['alamat']);
		$email = $this->db->escape($post['email']);

		$sql = $this->db->query("UPDATE teman SET nama = $nama, alamat = $alamat, email = $email WHERE id_friend = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("DELETE from teman WHERE id_friend = ".intval($id));
	}	

}