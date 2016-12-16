<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->view('admin/head');
		$this->load->view('admin/menu_master_data');
		$this->load->model('user/MdataOperator');
		$this->load->model('admin/MDataMember');
	}

	public function index()
	{
		$data['show'] = $this->MDataMember->show_member();
		$this->load->view('admin/dataMember/v_dataMember',$data);
	}

	function detail_member($id=0){
		$data['show']=$this->MDataMember->show_detail_member($id);
		$this->load->view('admin/dataMember/v_detailMember',$data);
	}

}
