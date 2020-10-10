<?php
class database{
	
	public $db, $host, $user, $pass, $dbname;

	public function __construct()
	{
		$this->db = false;
		$this->dbname = 'data-siswa';
		$this->host   = 'localhost';
		$this->user   = 'root';
		$this->password = '';

	}

	function connect(){
		$this->db = mysql_connect(
			$this->host,
			$this->user,
			$this->pass)
		or die("Database connection access error..".mysql_error());

		if($this->db == false) return false;
		mysql_select_db($this->dbname, $this->db);
	}


	function close()
	{
		mysql_close($this->db) or die ("Database Access Error...".mysql_error());
		$this->db = false;
	}
	
	function getRows($sql)
	{
		if(!is_resource($this->db)) $this->connect();			
		
		$this->rowColl = mysql_query($sql) or die("Error : ".mysql_error());
		$rows  = array();
		
		if( count($this->rowColl) > 1) mysql_data_seek($this->rowColl,0);
		
		while ($row = mysql_fetch_array($this->rowColl, MYSQL_ASSOC))
			$rows[] = $row;
		
		return $rows;
	}

}
?>