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
		$this->load->model('user/MdataOperator');
	}

	function index(){
		$data['hasil'] = $this->MdataOperator->show();
		$this->load->view('admin/dataOperator/v_dataOperator',$data);
	}
}