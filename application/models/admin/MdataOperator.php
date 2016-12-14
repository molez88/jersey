<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class MdataOperator extends CI_Model
{
	
	function show(){
		return $this->db->query("SELECT op_nama, op_alamat, op_email FROM operator ORDER BY tgl DESC");
		// $this->db->order_by('tgl', 'asc');
		// $this->db->select('op_nama,op_alamat,op_email');
		// return $this->db->get('operator');
	}
}