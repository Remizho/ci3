<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myweb extends CI_Controller {

	public function index()
	{
		$this->load->view('myhome');
	}

	public function profil()
	{
		$this->load->view('myprofil');
	}
}