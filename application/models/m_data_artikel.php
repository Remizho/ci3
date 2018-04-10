<?php 

class M_data_artikel extends CI_Model{

	function Get_artikel(){
		$query = $this->db->query('select * from artikel');
		return $query;
	}

	function Get_single($id){
		$data = array();
  		$options = array('id_atk' => $id);
  		$Q = $this->db->get_where('artikel',$options,1);
    		if ($Q->num_rows() > 0){
      			$data = $Q->row_array();
   			}
  		$Q->free_result();
 		return $data;
	}

	public function upload(){
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('foto_atk')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		$data = array(
			'id_atk' => $this->input->post('null'),
			'judul_atk' => $this->input->post('judul_atk'),
			'isi_atk' => $this->input->post('isi_atk'),
			'foto_atk' => $upload['file']['file_name'],
			'tggl_atk' => $this->input->post('tggl_atk')			
		);
		
		$this->db->insert('artikel', $data);
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$judul_atk = $this->db->escape($post['judul_atk']);
		$isi_atk = $this->db->escape($post['isi_atk']);
		$tggl_atk = $this->db->escape($post['tggl_atk']);

		$sql = $this->db->query("UPDATE artikel SET judul_atk = $judul_atk, isi_atk = $isi_atk, tggl_atk = $tggl_atk WHERE id_atk = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("DELETE from artikel WHERE id_atk = ".intval($id));
	}	

}