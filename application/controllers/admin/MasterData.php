<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class MasterData extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/head');
		$this->load->view('admin/menu_master_data');
	}

	function index(){
		$this->load->view('admin/masterData');
	}
}