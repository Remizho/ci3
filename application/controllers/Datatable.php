<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatable extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_data_artikel');
	}

	public function index()
	{
		// Dapatkan data artikel dari model
		$artikel['data'] = $this->m_data_artikel->get_artikel();

		$this->load->view("templates/header");
		$this->load->view('v_datatable_basic', $artikel);
		$this->load->view("templates/footer");
	}

	public function get_json()
	{
		$artikel['data'] = $this->m_data_artikel->get_artikel();
		
		// Tampilkan dalam bentuk format
		echo json_encode($artikel);
	}

	public function view_json()
	{
		$this->load->view("templates/header");
		$this->load->view('v_datatable_json');
		$this->load->view("templates/footer");
	}

}
