<?php
class Database {
    private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $db_name = 'chabad';
	public $conn;

    public function connection() {
        $this->conn = null;

		try {
			$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this->conn;
		} catch(PDOException $ex) {
			die($ex->getMessage());
			return $ex->getMessage();
		}
    }
}
?>