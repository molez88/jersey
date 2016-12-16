<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MJasaPengiriman extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	function show(){
		return $this->db->query("SELECT * FROM pengiriman ORDER BY id_prov DESC");
	}

}

/* End of file MJasaPengiriman.php */
/* Location: ./application/models/MJasaPengiriman.php */