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
	}

	function index(){
		$label['label']="Data Operator"
		$data['konten'] = $this->load->view('admin/dataOperator/vDataOperator',$label,TRUE);
		$this->load->view('admin/masterData', $data);
	}
}