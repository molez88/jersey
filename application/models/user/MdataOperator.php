<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class MdataOperator extends CI_Model
{
	
	function show(){
		return $this->db->query("SELECT username, password, nama FROM user WHERE level='operator'");
		// $this->db->order_by('tgl', 'asc');
		// $this->db->select('op_nama,op_alamat,op_email');
		// return $this->db->get('operator');
	}
}