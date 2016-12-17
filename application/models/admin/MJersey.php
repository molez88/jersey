<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MJersey extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	function show_kategori(){
		return $this->db->query("SELECT * FROM kat_jersey ORDER BY tgl");
	}

}