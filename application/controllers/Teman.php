<?php
Class Teman extends CI_Controller{
	public function index(){
		$this->load->model("model_data_teman");
		$data['list_teman'] = $this->model_data_teman->load_teman();

		$this->load->view("data_teman",$data);
	}


	public function add(){
		$this->load->model("model_data_teman");
		$data['tipe'] = "Add";

		if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->model_data_teman->simpan($_POST);
			redirect("teman");
		}

		$this->load->view("data_form_teman",$data);
	}

	

	public function edit($id){
		$this->load->model("model_data_teman");
		$data['tipe'] = "Edit";
		$data['default'] = $this->model_data_teman->get_default($id);

		if(isset($_POST['tombol_submit'])){
			$this->model_data_teman->update($_POST, $id);
			redirect("teman");
		}

		$this->load->view("data_form_teman",$data);
	}


	public function delete($id){
		$this->load->model("model_data_teman");
		$this->model_data_teman->hapus($id);
		redirect("teman");
	}



}