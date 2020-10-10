<?php

class crud{
	private $db;
	public function Siswa(){
		$this->db = new database();
	}

	public function getsiswa(){
		$query = "select * from data-siswa";
		return $this->db->getRows($query);
	}
}

?>