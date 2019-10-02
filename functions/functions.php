<?php

	class functions
  {

  	protected $db;

  	public function __construct()
  	{
  		$this->db = new mysqli('localhost', 'root', '', 'trimmer');

  		if ($this->db->connect_errno) {
  			header("Location: ../index.php?error=db");
  			die();
  		}
  	}


  	public function generateUniqueCode($idOfRow)
  	{
  		$idOfRow += 10000000;
  		return base_convert($idOfRow, 10, 36);
  	}

    public function addClicks($uniqueCode){
        $existInDatabase = $this->db->query("SELECT * FROM link WHERE code ='{$uniqueCode}'");
        $fetch = $existInDatabase->fetch_object()->visited;
        $counter = $fetch + 1;
        $this->db->query("UPDATE link SET visited = '".$counter."' WHERE code = '{$uniqueCode}'");
        
        return $uniqueCode;
    }


  	public function validateUrlAndReturnCode($orignalURL)	{

  		$orignalURL = trim($orignalURL);

  		if (!filter_var($orignalURL, FILTER_VALIDATE_URL)) {
  			header("Location: ../index.php?error=inurl");
  			die();
  		} else {

  			$orignalURL = $this->db->real_escape_string($orignalURL);
  			$existInDatabase = $this->db->query("SELECT * FROM link WHERE url ='{$orignalURL}'");

  			if ($existInDatabase->num_rows) {
  				$uniqueCode = $existInDatabase->fetch_object()->code;
  				return $uniqueCode;
  			}

  			$insertInDatabase = $this->db->query("INSERT INTO link (url,created) VALUES ('{$orignalURL}',NOW())");
  			$fetchFromDatabase = $this->db->query("SELECT * FROM link WHERE url = '{$orignalURL}'");
  			$getIdOfRow = $fetchFromDatabase->fetch_object()->id;
  			$uniqueCode = $this->generateUniqueCode($getIdOfRow);
  			$updateInDatabase = $this->db->query("UPDATE link SET code = '{$uniqueCode}' WHERE url = '{$orignalURL}'");

  			return $uniqueCode;
  		}
  	}

  	public function returnCustomCode($orignalURL, $customUniqueCode)
  	{
  		$orignalURL = trim($orignalURL);
  		$customUniqueCode = trim($customUniqueCode);

  		if (filter_var($orignalURL, FILTER_VALIDATE_URL)) {
  			$insert = $this->db->query("INSERT INTO link (url,code,created) VALUES ('{$orignalURL}','{$customUniqueCode}',NOW())");
  			return true;
  		}

  		return false;
  	}

  	public function getOrignalURL($string)
  	{
  		$string = $this->db->real_escape_string(strip_tags(addslashes($string)));
  		$rows = $this->db->query("SELECT url FROM link WHERE code = '{$string}'");
  		if ($rows->num_rows) {
  			return $rows->fetch_object()->url;
  		} else {
  			header("Location: index.php?error=dnp");
  			die();
  		}
  	}


  	public function checkUrlExistInDatabase($customCode)
  	{
  		$customCode = $this->db->real_escape_string(strip_tags(addslashes($customCode)));
  		$fetchedRows = $this->db->query("SELECT url FROM link WHERE code = '{$customCode}' LIMIT 1");

  		return $fetchedRows->num_rows > 0;
  	}



  	public function generateLinkForShortURL($uniqueCode = '')
  	{
  		return "http://localhost/urlShortener/{$uniqueCode}";
  	}


  }

?>
