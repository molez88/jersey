<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Data extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/head');
		$this->load->view('admin/menu_master_data');
		$this->load->model('admin/MJersey');
	}

	function index(){
		$data['show'] = $this->MJersey->show_kategori();
		$this->load->view('admin/kategoriBarang/v_kategori',$data);
	}
}