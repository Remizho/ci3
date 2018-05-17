<?php 

class M_data_artikel extends CI_Model{

	function Get_artikel($limit = FALSE, $offset = FALSE ){

		if ( $limit ) {
            $this->db->limit($limit, $offset);
        }
		//$query = $this->db->query('select * from artikel');
		//return $query;
		$this->db->order_by('artikel.tggl_buat_atk', 'DESC');

        // Inner Join dengan table Categories
        $this->db->join('categories', 'categories.id = artikel.fk_cat_id');
        
        $query = $this->db->get('artikel');

    	// Return dalam bentuk object
    	return $query->result();
	}

	public function get_total() 
    {
        // Dapatkan jumlah total artikel
        return $this->db->count_all("artikel");
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
			'tggl_atk' => $this->input->post('tggl_atk'),
			'tggl_buat_atk' => date("Y-m-d H:i:s"),
			'fk_cat_id' => $this->input->post('id'),
			'sumber_atk' => $this->input->post('sumber_atk'),
		);
		
		$this->db->insert('artikel', $data);
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$judul_atk = $this->db->escape($post['judul_atk']);
		$isi_atk = $this->db->escape($post['isi_atk']);
		$tggl_atk = $this->db->escape($post['tggl_atk']);
		$tggl_buat = date("Y-m-d H:i:s");
		$kategori_atk = $this->db->escape($post['id']);
		$sumber_atk = $this->db->escape($post['sumber_atk']);

		$sql = $this->db->query("UPDATE artikel SET judul_atk = $judul_atk, isi_atk = $isi_atk, tggl_atk = $tggl_atk, fk_cat_id = $kategori_atk, sumber_atk = $sumber_atk WHERE id_atk = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("DELETE from artikel WHERE id_atk = ".intval($id));
	}	

	public function get_artikel_by_category($category_id)
    {

        $this->db->order_by('artikel.id_blog', 'DESC');

        $this->db->join('categories', 'categories.id = artikel.fk_cat_id');
        $query = $this->db->get_where('artikel', array('id' => $category_id));
  
        return $query->result();
    }

}