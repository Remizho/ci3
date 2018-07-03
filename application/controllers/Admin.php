<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper('MY');

		$this->load->model('blog_model');
		$this->load->model('admin_model');
	}

	public function index() 
	{
		if(!$this->session->userdata('logged_in')) 
			redirect('user/login');
		// Judul Halaman
		$data['page_title'] = 'IKI MEMBER MEMBERE';

		// Dapatkan semua kategori
		$user_id = $this->session->userdata('user_id');
		$data['admin'] = $this->admin_model->get_all_admin($user_id);

		$this->load->view('templates/header');
		$this->load->view('admin/user_view', $data);
		$this->load->view('templates/footer');
	}

	public function create() 
	{	
		if(!$this->session->userdata('logged_in')){
			redirect('user/login');
		}

		// Judul Halaman
		$data['page_title'] = 'Buat Member Baru';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('admin/user_create', $data);
			$this->load->view('templates/footer');
		} else {
			// Encrypt password
			$enc_password = md5($this->input->post('password'));

			$this->admin_model->register($enc_password);

			// Set message
			$this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');

			redirect('admin');
		}
	}

	// Membuat fungsi edit
	public function edit($id = NULL)
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/login');
		}

		$data['page_title'] = 'Edit Member';

		// Get artikel dari model berdasarkan $id
		$data['admin'] = $this->admin_model->get_member_by_id($id);
		// Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman list category
		if ( empty($id) || !$data['admin'] ) redirect('blog');

		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    // Kita validasi input sederhana, sila cek http://localhost/ci3/user_guide/libraries/form_validation.html
		$this->form_validation->set_rules('nama', 'Nama', 'required');
	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('templates/header');
	        $this->load->view('admin/user_edit', $data);
	        $this->load->view('templates/footer');

	    } else {
	    	
	    	$enc_password = md5($this->input->post('password'));
	    	$post_data = array(
	    	    'nama' => $this->input->post('nama'),
	            'email' => $this->input->post('email'),
	            'username' => $this->input->post('username'),
	            'password' => $enc_password,
	            'kodepos' => $this->input->post('kodepos'),
	            'fk_level_id' => $this->input->post('membership')
	    	);
		    $this->load->view('templates/header');
    		
    		// Update kategori sesuai post_data dan id-nya
	        if ($this->admin_model->update_admin($post_data, $id, $enc_password)) {
		        $this->load->view('blogs/blog_success', $data);
	        } else {
		        $this->load->view('blogs/blog_failed', $data);
	        }
	        $this->load->view('templates/footer'); 

	    }
	}


	public function delete($id)
	{
		if(!$this->session->userdata('logged_in')){
			redirect('user/login');
		}


		$data['page_title'] = 'Delete Member';

		$this->admin_model->delete_member($id);

		$this->load->view('templates/header');
		$this->load->view('blogs/blog_success', $data);
		$this->load->view('templates/footer'); 

	}
}
