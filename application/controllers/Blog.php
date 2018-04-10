<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_artikel');
	}

	public function index()
	{
		$data['data'] = $this->m_data_artikel->Get_artikel();
		$this->load->view('home_view',$data);
	}

	public function detail()
	{
		$data['data'] = $this->m_data_artikel->Get_single($this->uri->segment(3));
		$this->load->view('home_detail',$data);
	}

	public function add()
	{
		$this->load->model('m_data_artikel');
		$data['tipe'] = "Add";

		if ($this->input->post('simpan')) {
			$upload = $this->m_data_artikel->upload();

			if ($upload['result'] == 'success') {
				$this->m_data_artikel->save($upload);
				redirect('blog');
			}else{
				$data['message'] = $upload['error'];
			}
		}

		$this->load->view('home_view_form', $data);
	}

	public function edit($id){
		$this->load->model("m_data_artikel");
		$data['tipe'] = "Edit";
		$data['default'] = $this->m_data_artikel->get_single($id);

		if(isset($_POST['simpan'])){
			$this->m_data_artikel->update($_POST, $id);
			redirect("blog");
		}

		$this->load->view("home_view_form",$data);
	}


	public function delete($id){
		$this->load->model("m_data_artikel");
		$this->m_data_artikel->hapus($id);
		redirect("blog");
	}

}


  

     