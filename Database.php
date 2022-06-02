<?php
class Database
{
	function __construct()
	{
		try{
			$this->db = new PDO("mysql:host=localhost;dbname=harkespan",'root','');
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}

	}

	function getDataAll()
	{
		$rs = $this->db->query("SELECT * FROM users");

		return $rs;

	}

	function getDataDetail($id)
	{
		$rs = $this->db->prepare("SELECT * FROM users WHERE id=?");
		$rs->execute([$id]);
		return $rs;
	}

	function insertData($data)
	{
		$rs = $this->db->prepare("INSERT INTO users (username,passwd,active) VALUES (:username,:passwd,:active)");
		$rs->execute($data);
	}

	function updateData($data)
	{

		if(empty($data['passwd'])){
			$rs = $this->db->prepare("UPDATE users SET username=:username, active=:active WHERE id=:id");
		} else{
			$rs = $this->db->prepare("UPDATE users SET username=:username, passwd=:passwd, active=:active WHERE id=:id");
		}

		$rs->execute($data);
	}

	public function deleteData($data)
	{
		$rs = $this->db->prepare("DELETE FROM users WHERE id=:id");

		$rs->execute($data);
	}
}
