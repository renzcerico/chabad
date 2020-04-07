<?php
class Volunteer {
    public $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function insert($data) {
        try {
            $first_name = ucfirst($data['first_name']);
            $last_name = ucfirst($data['last_name']);
            $birthdate = ucfirst($data['birthdate']);
            $phone_number = ucfirst($data['phone_number']);
            $email_address = ucfirst($data['email_address']);
            $address1 = strtoupper($data['address1']);
            $address2 = strtoupper($data['address2']);
            $city_town = strtoupper($data['city_town']);
            $state = strtoupper($data['state']);
            $zip_code = ucfirst($data['zip_code']);
            $availability = $data['availability'];
            $services_hours = $data['services_hours'];
            $special_needs = $data['special_needs'];
            $services_hours = $data['services_hours'];
            $special_needs = $data['special_needs'];
            $emergency_name = ucfirst($data['emergency_name']);
            $emergency_number = $data['emergency_number'];
            $team_leader = $data['team_leader'];
            $profile_photo = $data['profile_photo'];
            $language = $data['language'];
            $other_skills = $data['other_skills'];
    
            $sql = "INSERT INTO tbl_volunteer SET
                        last_name = :last_name,
                        first_name = :first_name,
                        birthdate = :birthdate,
                        email_address = :email_address,
                        phone_number = :phone_number,
                        address_1 = :address1,
                        address_2 = :address2,
                        city_town = :city_town,
                        state = :state,
                        zip_code = :zip_code,
                        availability = :availability,
                        services_hours = :services_hours,
                        special_needs = :special_needs,
                        emergency_name = :emergency_name,
                        emergency_phone = :emergency_number,
                        team_leader = :team_leader,
                        photo = :profile_photo,
                        language = :language,
                        other_skills = :other_skills
                    ";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':birthdate', $birthdate);
            $stmt->bindParam(':email_address', $email_address);
            $stmt->bindParam(':phone_number', $phone_number);
            $stmt->bindParam(':address1', $address1);
            $stmt->bindParam(':address2', $address2);
            $stmt->bindParam(':city_town', $city_town);
            $stmt->bindParam(':state', $state);
            $stmt->bindParam(':zip_code', $zip_code);
            $stmt->bindParam(':availability', $availability);
            $stmt->bindParam(':services_hours', $services_hours);
            $stmt->bindParam(':special_needs', $special_needs);
            $stmt->bindParam(':emergency_name', $emergency_name);
            $stmt->bindParam(':emergency_number', $emergency_number);
            $stmt->bindParam(':team_leader', $team_leader);
            $stmt->bindParam(':profile_photo', $profile_photo);
            $stmt->bindParam(':language', $language);
            $stmt->bindParam(':other_skills', $other_skills);
            $stmt->execute();
    
            return 201;    
        } catch(PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }

    public function getAll() {
        $sql = "SELECT id, 
                       UPPER(CONCAT(first_name, ' ', last_name)) as full_name,
                       DATE_FORMAT(created_at, '%Y-%M-%d %r') as created_at
                FROM tbl_volunteer";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    }

    public function get($id) {
        $sql = "SELECT * FROM tbl_volunteer WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt;
    }

}
?>