<?php

class Twilio {
	public $conn;

	public function __construct($conn) {
		$this->conn = $conn;
	}

	public function updateMobile($data) {
		try {
			$sql = "UPDATE tbl_twilio SET
						mobile_number = :mobile_number
					WHERE id = 1";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':mobile_number', $data['mobile_number']);
			$stmt->execute();

			return $stmt;

		} catch (PDOException $ex) {
			return $ex->getMessage();
		}


	}

	 public function verify() {
        $sql = "SELECT mobile_number FROM tbl_twilio WHERE id = 1";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt;

    }

    

}
?>