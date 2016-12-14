<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	function index(){
		$this->load->view('login');
	}

}