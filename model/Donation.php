<?php
class Donation {
    public $conn = '';

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function insert($data) {
        $sql = "INSERT INTO tbl_donation 
                    SET first_name       = :firstName,
                        last_name        = :lastName,
                        company          = :company,
                        address          = :address,
                        city             = :city,
                        state            = :state,
                        zip              = :zip,
                        country          = :country,
                        email            = :email,
                        amount           = :amount,
                        donation_type    = :donation_type
                    ";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':firstName', $data['first_name']);
        $stmt->bindParam(':lastName', $data['last_name']);
        $stmt->bindParam(':company', $data['company']);
        $stmt->bindParam(':address', $data['address']);
        $stmt->bindParam(':city', $data['city']);
        $stmt->bindParam(':state', $data['state']);
        $stmt->bindParam(':zip', $data['zip']);
        $stmt->bindParam(':country', $data['country']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':amount', $data['amount']);
        $stmt->bindParam(':donation_type', $data['donation_type']);
        $stmt->execute();

        return 200;
    }

    public function getAll() {
        $sql = "SELECT UPPER(CONCAT(first_name, ' ', last_name)) as full_name, 
                       donation_type, 
                       amount, 
                       DATE_FORMAT(created_at, '%Y-%M-%d %r') as created_at 
                FROM tbl_donation";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    }

    public function paymentAcceptType() {
        $sql = "SELECT type FROM tbl_payment WHERE id = 1";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);

        return $type;
    }

    public function paymentAcceptUpdate($type) {
        $sql = "UPDATE tbl_payment SET type = :type WHERE id = 1";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':type', $type);
        $stmt->execute();

        return 200;
    }
}
?>