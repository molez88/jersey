<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Data extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->view('admin/head');
		$this->load->view('admin/menu_master_data');
		$this->load->model('admin/MJasaPengiriman');
	}

	function index(){
		$data['show'] = $this->MJasaPengiriman->show();
		$this->load->view('admin/jasaPengiriman/v_dataPengiriman',$data);
	}
}