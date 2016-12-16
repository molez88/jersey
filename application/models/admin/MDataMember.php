<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MDataMember extends CI_Model {

	

	public function __construct()
	{
		parent::__construct();
		
	}

	function show_member(){
		return $this->db->query("SELECT member.username, member.nama, member.email, pengiriman.provinsi FROM member LEFT JOIN pengiriman ON member.id_prov = pengiriman.id_prov ORDER BY tgl");
	}
	function show_detail_member($id){
		$query = $this->db->query("SELECT member.username, member.password, member.nama, member.email,member.no_telp, member.alamat, pengiriman.provinsi FROM member LEFT JOIN pengiriman ON member.id_prov = pengiriman.id_prov WHERE member.username='$id' ORDER BY tgl");
		return $query->row();
	}

}

/* End of file MDatamember.php */
/* Location: ./application/models/MDatamember.php */