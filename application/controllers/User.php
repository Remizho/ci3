<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
				
		$this->load->library('form_validation');
		$this->load->helper('MY');
		$this->load->model('user_model');
		$this->load->model('blog_model');
		$this->load->model('category_model');
	}

	// Register user
	public function register(){
		$data['page_title'] = 'Sign Up';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('users/register', $data);
			$this->load->view('templates/footer');
		} else {
			// Encrypt password
			$enc_password = md5($this->input->post('password'));

			$this->user_model->register($enc_password);

			// Set message
			$this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');

			redirect('blog');
		}
	}

	// Log in user
	public function login(){
		$data['page_title'] = 'Sign In Tong';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('users/login',$data);
			$this->load->view('templates/footer');
		} else {
			
	// Get username
	$username = $this->input->post('username');
	// Get & encrypt password
	$password = md5($this->input->post('password'));

	// Login user
	$user_id = $this->user_model->login($username, $password);

	if($user_id){
		// Buat session
		$user_data = array(
			'user_id' => $user_id,
			'username' => $username,
			'logged_in' => true,
			'fk_level_id' => $this->user_model->get_user_level($user_id),
		);

		$this->session->set_userdata($user_data);

		// Set message
		$this->session->set_flashdata('user_loggedin', 'Anda sudah login loo');

		redirect('user/dashboard');
	} else {
		// Set message
		$this->session->set_flashdata('login_failed', 'Login gagal, periksa username dan password anda');

		redirect('user/login');
	}		
		}
	}

	// Log user out
	public function logout(){
		// Unset user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

		// Set message
		$this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

		redirect('user/login');
	}

	public function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
       }
	// Fungsi Dashboard
	function dashboard()
	{
		// Must login
		if(!$this->session->userdata('logged_in')) 
			redirect('user/login');

		$user_id = $this->session->userdata('user_id');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details( $user_id );
 		$userData = $this->get_userdata();
        if ($userData['fk_level_id'] === '1'){
            $this->load->view('templates/header');
            $this->load->view('users/dashboard', $data);
            $this->load->view('templates/footer');
        } else if ($userData['fk_level_id'] === '2'){
            $this->load->view('templates/header_member1');
            $this->load->view('users/dashboard', $data);
            $this->load->view('templates/footer');
        } else if ($userData['fk_level_id'] === '3') {
            $this->load->view('templates/header_member2');
            $this->load->view('users/dashboard', $data);
            $this->load->view('templates/footer');
        }
	}

	public function member1_about(){
		$this->load->view('templates/header_member1');
		$this->load->view('page/myprofil');
		$this->load->view('templates/footer');
	}

	public function member2_about(){
		$this->load->view('templates/header_member2');
		$this->load->view('page/myprofil');
		$this->load->view('templates/footer');
	}

	public function member1_blog(){
		$data['page_title'] = 'IKI ARTIKEL'; 
		
		// Dapatkan data dari model Blog dengan pagination
		// Jumlah artikel per halaman
		$limit_per_page = 4;

		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

		// Dapatkan jumlah data 
		$total_records = $this->blog_model->get_total();
		
		if ($total_records > 0) {
			// Dapatkan data pada halaman yg dituju
			$data["all_artikel"] = $this->blog_model->get_all_artikel($limit_per_page, $start_index);
			
			// Konfigurasi pagination
			$config['base_url'] = base_url() . 'blog/index';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;
			
			$this->pagination->initialize($config);
				
			// Buat link pagination
			$data["links"] = $this->pagination->create_links();
		}

		$this->load->view("templates/header_member1");
		// Passing data ke view
		$this->load->view('blogs/blog_view', $data);
		$this->load->view("templates/footer");
	}

	public function member2_blog(){
		$data['page_title'] = 'IKI ARTIKEL'; 
		
		// Dapatkan data dari model Blog dengan pagination
		// Jumlah artikel per halaman
		$limit_per_page = 4;

		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

		// Dapatkan jumlah data 
		$total_records = $this->blog_model->get_total();
		
		if ($total_records > 0) {
			// Dapatkan data pada halaman yg dituju
			$data["all_artikel"] = $this->blog_model->get_all_artikel($limit_per_page, $start_index);
			
			// Konfigurasi pagination
			$config['base_url'] = base_url() . 'blog/index';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;
			
			$this->pagination->initialize($config);
				
			// Buat link pagination
			$data["links"] = $this->pagination->create_links();
		}

		$this->load->view("templates/header_member2");
		// Passing data ke view
		$this->load->view('blogs/blog_view_member2', $data);
		$this->load->view("templates/footer");
	}

}