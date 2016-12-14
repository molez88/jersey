<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class DataTransaksi extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->view('admin/head');
	}

	function index(){
		$this->load->view('admin/dataTransaksi');
	}
}