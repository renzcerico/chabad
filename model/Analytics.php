<?php
    class Analytics{
        public $conn;

        public function __construct ($conn){
            return $this->conn = $conn;
        }

        public function page_view($data, $ip){
            $page = ucfirst($data['page']);
            $ip = htmlspecialchars($ip);

            $sql = "INSERT INTO tbl_webviews SET
                    page = :page,
                    ip_address = :ip
                    ";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':ip', $ip);
            $stmt->execute();

            return 201;
        }

        public function page_count(){
            $sqlIP= "SELECT DISTINCT(ip_address) FROM tbl_webviews";
            $stmtIP = $this->conn->prepare($sqlIP);
            $stmtIP->execute();
            $countIP = $stmtIP->rowCount();

            $sql= "SELECT * FROM tbl_webviews";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $count = $stmt->rowCount();

            if ($count > 0) {
                return $count = array(
                    'total' => $count,
                    'ip' => $countIP
                );
            } else {
                return 0;
            }
        }
    }
?>