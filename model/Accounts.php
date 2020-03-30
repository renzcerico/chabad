<?php
class Accounts {
    public $conn;

    public function __construct($conn) {
        return $this->conn = $conn;
    }

    public function login($data) {
        $sql = "SELECT * FROM tbl_accounts
                WHERE email_address = :email_address AND
                password = :password";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email_address', $data['email_address']);
        $stmt->bindParam(':password', $data['password']);
        $stmt->execute();
        $count = $stmt->rowCount();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($count > 0) {
            extract($row);
            return $row;
        } else {
            return false;
        }
    }

    public function getProfile($id) {
        $sql = "SELECT last_name, first_name, email_address FROM tbl_accounts WHERE id = :id";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt;
    }

    public function updateProfile($data, $id) {
        $sql = "UPDATE tbl_accounts SET last_name = :lastName,
                        first_name = :firstName,
                        email_address = :emailAddress
                    WHERE id = :id
                ";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':lastName', $data['lastName']);
        $stmt->bindParam(':firstName', $data['firstName']);
        $stmt->bindParam(':emailAddress', $data['emailAddress']);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return 200;
    }

    public function changePassword($data, $id) {
        $sql = "SELECT * FROM tbl_accounts WHERE id = :id AND password = :password";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':password', $data['currentPassword']);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $sqlUpdate = "UPDATE tbl_accounts SET password = :password
                        WHERE id = :id
                    ";

            $stmtUpdate = $this->conn->prepare($sqlUpdate);
            $stmtUpdate->bindParam(':password', $data['newPassword']);
            $stmtUpdate->bindParam(':id', $id);
            $stmtUpdate->execute();

            return 200;
        } else {
            return 401;
        }
    }


}
?>