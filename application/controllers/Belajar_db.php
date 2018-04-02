<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar_db extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('action');
	}

	function user(){
		$data['data'] = $this->action->get_query_manual_array();
		$this->load->view('v_belajar_db.php',$data);
	}

}