<?php
class AuthorizeAPI {
    public $conn;

    public function __construct($conn) {
        return $this->conn = $conn;
    }

    public function secret() {
        $sql = "SELECT login_id, trans_key FROM tbl_authorize_api WHERE id = 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    }

    public function update($data) {
        $sql = "UPDATE tbl_authorize_api SET
                    login_id = :login_id,
                    trans_key = :trans_key
                WHERE id = 1";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':login_id', $data['login_id']);
        $stmt->bindParam(':trans_key', $data['trans_key']);
        $stmt->execute();

        return 200;
        // save the info to db if donation is success
        // txt msg when registering to chabad    
    }
}
?>