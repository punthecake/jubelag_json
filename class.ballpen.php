<?php
class ballpen{
	public $database;
	
	public function __construct(){
		$this->database = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno()){
			echo "Database connection error.";
			exit;
		}else {
		}
	}
	
	public function get_ballpen(){
		$sql = "SELECT * FROM tblballpen";
		$result = mysqli_query($this->database,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	
}
?>
