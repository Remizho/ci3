<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myweb extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('page/myhome');
		$this->load->view('templates/footer');
	}

	public function profil()
	{
		
		$this->load->view('templates/header');
		$this->load->view('page/myprofil');
		$this->load->view('templates/footer');
	}
}