<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Homepage extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/head');
	}
	function index(){
		$this->load->view('admin/homepage');
	}
}